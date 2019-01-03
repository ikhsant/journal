<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paper extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('email_helper');
		// cek akses
		if (!$this->session->userdata('akses_level')) {
			redirect(base_url(),'refresh');
		}
	}

	// submited paper
	public function submited()
	{
		// cek akses
		if ($this->session->userdata('akses_level') == 'admin') {
			$data['paper'] = $this->Crud_model->select('paper','*')->result();
		}else{
			$id_user       = $this->session->userdata('id_user');
			$data['paper'] = $this->Crud_model->select('paper','*','id_user ="'.$id_user.'"')->result();
		}
		// end cek akses
		
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

				//Kirim email
				// cek hanya author yang dapat email
				$detail_paper = $this->Crud_model->select('paper','*','id_paper = '.$id_paper)->row();
				if ($detail_paper->id_user) {
					$detail_user = $this->Crud_model->select('user','*','id_user = '.$detail_paper->id_user)->row();
					// cek status
					$status = $this->input->post('status');
					if ($status == '2') {
						$status = 'Approve';
					}else{
						$status = 'Revision';
					}
					// end cek status
					// komentar admin
					$komentar = $this->input->post('komentar_admin');
					if (!empty($komentar)) {
						$komen = '<br>Comment form Admin: ';
						$komen .= $komentar;
					}else{
						$komen = '';
					}
					// end komen
					$nama         = $detail_user->name;
					$tujuan       = $detail_user->email;
					$setting      = $this->Crud_model->select('setting','*')->row();
					$judul        = 'Your Paper Status has Changed - '.$setting->nama_website;
					$isi          = 'Dear '.$nama.' 
									<br>Your Paper Status now is: <b>'.$status.'</b>'.$komen.'
									</b><br>Plase Check it on :'.base_url('paper/submited');
					$this->kirimEmail($tujuan,$judul,$isi);
				}
				// end kirim email

				// sukses message
				$this->session->set_flashdata('success','Success');

				// redirek
				// redirect(base_url('paper/revisi/').$id_paper, 'refresh');
			}
			
		}

		$data['paper']           = $this->Crud_model->select('paper','*','id_paper ="'.$id_paper.'"','','tanggal_submit DESC')->row();
		$data['jurnal_paper']    = $this->Crud_model->select('jurnal_paper','*','id_paper ="'.$id_paper.'"')->row();
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

	// function kirim email
	public function kirimEmail($tujuan,$judul,$isi)
	{
		$this->load->library('email');
		$this->email->set_newline("\r\n");
		$this->email->from('eizan.kappa@gmail.com'); // email pengirim
		$this->email->to($tujuan); // tujuan
		$this->email->subject($judul); // judul email
		$this->email->message($isi);
		$this->email->send();
  }

	

}

/* End of file Paper.php */
/* Location: ./application/controllers/Paper.php */