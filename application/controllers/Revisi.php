<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Revisi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// cek akses level
		if (!$this->session->userdata('akses_level')) {
			// redirek
			redirect(base_url('submission'),'refresh');
		}
	}

	// detail
	public function detail($id_paper)
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
					'file_paper' => $file_paper,
					'komentar'   => $this->input->post('komentar'),
					'id_paper'   => $id_paper
				);
				$this->Crud_model->insert('revisi',$data_revisi);
				// sukses message
				$this->session->set_flashdata('success','Success');
				// redirek
				redirect(base_url('revisi/detail/').$id_paper, 'refresh');
			}else{
				$this->session->set_flashdata('error',$this->upload->display_errors());
				// redirek
				redirect(base_url('revisi/detail/').$id_paper, 'refresh');
			}
		}

		// jika diedit
		$edit = $this->input->post('edit');
		if (isset($edit)) {
			// id revisi
			$id_revisi = $this->input->post('id_revisi');
			// cek jika menganti file
			if (!empty($_FILES['file_paper']['name'])) {
				// delete file lama
				$file_paper = $this->input->post('file_paper');
				unlink('./uploads/paper/revisi/'.$file_paper);
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
						'file_paper' => $file_paper,
						'komentar'   => $this->input->post('komentar'),
						'status'     => $this->input->post('status'),
						'id_paper'   => $id_paper
					);
					$this->Crud_model->update('revisi',$data_revisi,'id_revisi ="'.$id_revisi.'"');
					// sukses message
					$this->session->set_flashdata('success','Success');
					// redirek
					redirect(base_url('revisi/detail/').$id_paper, 'refresh');
				}else{
					$this->session->set_flashdata('error',$this->upload->display_errors());
					// redirek
					redirect(base_url('revisi/detail/').$id_paper, 'refresh');
				}
			}else{
				$data_revisi = array(
					'komentar' => $this->input->post('komentar'),
					'status'   => $this->input->post('status'),
					'id_paper' => $id_paper
				);
				$this->Crud_model->update('revisi',$data_revisi,'id_revisi ="'.$id_revisi.'"');
				// sukses message
				$this->session->set_flashdata('success','Success');
				// redirek
				redirect(base_url('revisi/detail/').$id_paper, 'refresh');
			}
			
		}

		$user               = $this->session->userdata('id_user');
		$data['user']       = $this->Crud_model->select('user','*','id_user = "'.$user.'"')->row();
		$data['paper']      = $this->Crud_model->select('paper','*','id_paper ="'.$id_paper.'"','','tanggal_submit DESC')->row();
		$data['revisi']     = $this->Crud_model->select('revisi','*','id_paper ="'.$id_paper.'"','','tanggal DESC')->result();
		$data['paper_file'] = $this->Crud_model->select('paper_file','*','id_paper ="'.$id_paper.'"','','tanggal DESC')->result();
		$data['page']       = 'page/revisi_detail';
		$data['title_page'] = 'Paper';

		$this->load->view('template/backend', $data);

	}

	// delete revision
	public function delete($id_paper,$id_revisi)
	{
		// akses admin saja
		// cek akses level
		if (!$this->session->userdata('akses_level') == 'admin') {
			// redirek
			redirect(base_url('revisi/detail/').$id_paper, 'refresh');
		}

		$revisi = $this->Crud_model->select('revisi','*','id_paper ="'.$id_paper.'"')->row();
		$delete = $this->Crud_model->delete('revisi','id_revisi = "'.$id_revisi.'"');
		$file_paper = $revisi->file_paper;
		if (!$delete) {
			$this->session->set_flashdata('success','Success delete Data');
			unlink('./uploads/paper/revisi/'.$file_paper);
			redirect(base_url('revisi/detail/').$id_paper, 'refresh');
		}else{
			$this->session->set_flashdata('error','Error delete Data');
			redirect(base_url('revisi/detail/').$id_paper, 'refresh');
		}
	}
}

/* End of file Revisi.php */
/* Location: ./application/controllers/Revisi.php */