<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paper extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('email_helper');
	}

	public function detail($id_paper = NULL)
	{
		// cek jika tidak ada id paper
		if (!$id_paper) {
			redirect(base_url(),'refresh');
		}
		// end cek

		$data['paper'] = $this->Crud_model->select('paper','*','id_paper ="'.$id_paper.'"')->row();
		$data['author'] = $this->db->query("SELECT * 
											FROM paper_author 
											JOIN author 
											ON paper_author.id_author = author.id_author 
											WHERE paper_author.id_paper = '$id_paper' ")->result();
		$data['page'] = 'page/paperdetail';
		$this->load->view('template/frontend', $data);
	}

	// submited paper
	public function submited()
	{
			$user               = $this->session->userdata('id_user');
			$data['user']       = $this->Crud_model->select('user','*','id_user = "'.$user.'"')->row();
			$data['paper']      = $this->Crud_model->select('paper','*')->result();
			$data['page']       = 'paper/submited';
			$data['title_page'] = 'Paper';

			$this->load->view('template/backend', $data);
	}

	// detail
	public function revisi($id_paper)
	{
		// jika tambah
		$submit = $this->input->post('submit');
		if (isset($submit)) {
			// upload
			$config['upload_path']   = './uploads/paper/revisi/';
			$config['allowed_types'] = 'pdf|xls|xlsx|doc|docx';
			$config['max_size']      = 5000;
			$config['file_name']     = $id_paper.'-'.date('Ymd');
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;
			$this->load->library('upload', $config);

			// file paper upload
			if ($this->upload->do_upload('file_paper')){
				$data_file  = array('upload_data' => $this->upload->data());
				$file_paper = $data_file['upload_data']['file_name'];
				// menyimpan kedatabase
				$data_revisi = array(
					'file_paper'      => $file_paper,
					'komentar_author' => $this->input->post('komentar_author'),
					'id_paper'        => $id_paper
				);
				$this->Crud_model->insert('paper_file',$data_revisi);
				// sukses message
				$this->session->set_flashdata('success','Success');
				// redirek
				redirect(base_url('paper/revisi/').$id_paper, 'refresh');
			}else{
				$this->session->set_flashdata('error',$this->upload->display_errors());
				// redirek
				redirect(base_url('paper/revisi/').$id_paper, 'refresh');
			}
		}

		// jika diedit
		$edit = $this->input->post('edit');
		if (isset($edit)) {
			// id revisi
			$id_paper_file = $this->input->post('id_paper_file');
			// cek jika menganti file
			if (!empty($_FILES['file_paper']['name'])) {
				// delete file lama
				$file_paper = $this->input->post('file_paper');
				unlink('./uploads/paper/revisi/'.$file_paper);
				// upload
				$config['upload_path']   = './uploads/paper/revisi/';
				$config['allowed_types'] = 'pdf|xls|xlsx|doc|docx';
				$config['max_size']      = 5000;
				$config['file_name']     = $id_paper.'-'.date('Ymd').'-rev';
				// $config['max_width']            = 1024;
				// $config['max_height']           = 768;
				$this->load->library('upload', $config);

				// file paper upload
				if ($this->upload->do_upload('file_paper')){
					$data_file  = array('upload_data' => $this->upload->data());
					$file_paper = $data_file['upload_data']['file_name'];
					// menyimpan kedatabase
					$data_revisi = array(
						'file_paper'      => $file_paper,
						'komentar_author' => $this->input->post('komentar_author'),
						'komentar_admin'  => $this->input->post('komentar_admin'),
						'status'          => $this->input->post('status'),
						'id_paper'        => $id_paper
					);
					$this->Crud_model->update('paper_file',$data_revisi,'id_paper_file ="'.$id_paper_file.'"');
					// sukses message
					$this->session->set_flashdata('success','Success');
					// redirek
					redirect(base_url('paper/revisi/').$id_paper, 'refresh');
				}else{
					$this->session->set_flashdata('error',$this->upload->display_errors());
					// redirek
					redirect(base_url('paper/revisi/').$id_paper, 'refresh');
				}
			}else{
				$data_revisi = array(
					'komentar_admin'  => $this->input->post('komentar_admin'),
					'komentar_author' => $this->input->post('komentar_author'),
					'status'          => $this->input->post('status'),
					'id_paper'        => $id_paper
				);
				$this->Crud_model->update('paper_file',$data_revisi,'id_paper_file ="'.$id_paper_file.'"');
				// sukses message
				$this->session->set_flashdata('success','Success');

				// redirek
				redirect(base_url('paper/revisi/').$id_paper, 'refresh');
			}
			
		}

		$user                    = $this->session->userdata('id_user');
		$data['user']            = $this->Crud_model->select('user','*','id_user = "'.$user.'"')->row();
		$data['paper']           = $this->Crud_model->select('paper','*','id_paper ="'.$id_paper.'"','','tanggal_submit DESC')->row();
		$data['revisi']          = $this->Crud_model->select('revisi','*','id_paper ="'.$id_paper.'"','','tanggal DESC')->result();
		$data['paper_file']      = $this->Crud_model->select('paper_file','*','id_paper ="'.$id_paper.'"','','tanggal ASC')->result();
		$data['page']            = 'paper/revisi_detail';
		$data['title_page']      = 'Paper';

		$this->load->view('template/backend', $data);

	}

	// delete revisi
	public function delete_revisi($id_paper,$id_paper_file)
	{
		// akses admin saja
		// cek akses level
		if (!$this->session->userdata('akses_level') == 'admin') {
			// redirek
			redirect(base_url('revisi/detail/').$id_paper, 'refresh');
		}

		$revisi = $this->Crud_model->select('paper_file','*','id_paper_file ="'.$id_paper_file.'"')->row();
		$delete = $this->Crud_model->delete('paper_file','id_paper_file = "'.$id_paper_file.'"');
		$file_paper = $revisi->file_paper;
		if (!$delete) {
			$this->session->set_flashdata('success','Success delete Data');
			unlink('./uploads/paper/revisi/'.$file_paper);
			redirect(base_url('paper/revisi/').$id_paper, 'refresh');
		}else{
			$this->session->set_flashdata('error','Error delete Data');
			redirect(base_url('paper/revisi/').$id_paper, 'refresh');
		}
		
	}

}

/* End of file Paper.php */
/* Location: ./application/controllers/Paper.php */