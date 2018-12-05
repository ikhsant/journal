<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submission extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// ceking akses level
		if ($this->session->userdata('akses_level') == 'admin') {
			redirect(base_url('admin'),'refresh');
		}
		if ($this->session->userdata('akses_level') !== 'author') {
			redirect(base_url('login'),'refresh');
		}
	}

	public function index()
	{
		$submit_paper = $this->input->post('submit_paper');
		if (isset($submit_paper)) {
			$id_user = $this->session->userdata('id_user');
			$judul   = $this->input->post('judul');
			$abstrak = $this->input->post('abstract');
			$keyword = $this->input->post('keyword');
			
			// upload
			$config['upload_path']   = './uploads/paper/';
			$config['allowed_types'] = 'pdf|xls|xlsx|doc|docx';
			$config['file_name']     = 'paper';
			$config['max_size']      = 5000;
			$this->load->library('upload', $config);

			// file paper upload
			if ($this->upload->do_upload('file_paper')){
				$data_file = array('upload_data' => $this->upload->data());
				$file_paper = $data_file['upload_data']['file_name'];
			}else{
				$this->session->set_flashdata('error',$this->upload->display_errors());
				// redirek
				redirect(base_url('submission'),'refresh');
			}

			// upload
			$config2['upload_path']   = './uploads/pernyataan_originial/';
			$config2['allowed_types'] = 'pdf|xls|xlsx|doc|docx';
			$config2['file_name']     = 'original_letter';
			$config2['max_size']      = 5000;
			$this->upload->initialize($config2);

			// file pernyataan upload
			if($this->upload->do_upload('pernyataan_originial')){
				$data_file = array('upload_data' => $this->upload->data());
				$pernyataan_originial = $data_file['upload_data']['file_name'];
			}else{
				// hapus data pertama yang terupload
				unlink('./uploads/paper/'.$file_paper);
				// pesan error
				$this->session->set_flashdata('error',$this->upload->display_errors());
				// redirek
				redirect(base_url('submission'),'refresh');
			}

			// menyimpan inputan ke array
			$data = array(	
				'judul'                => $this->input->post('judul'),
				'abstrak'              => $this->input->post('abstrak'),
				'kategori'             => $this->input->post('kategori'),
				'keyword'              => $this->input->post('keyword'),
				'id_user'              => $id_user,
				'pernyataan_originial' => $pernyataan_originial
			);
			// menyimpan kedatabase paper
			$this->Crud_model->insert('paper',$data);
			$id_paper = $this->Crud_model->get_id();

			// menyimpan kedatabase paper file
			$data_paper_file = array(
				'id_paper'   => $id_paper,
				'file_paper' => $file_paper
			);
			$this->Crud_model->insert('paper_file',$data_paper_file);

			// tambahan author
			$tambahan_author  = count($this->input->post('nama_author'));
			$nama_author      = $this->input->post('nama_author');
			$email_author     = $this->input->post('email_author');
			$institusi_author = $this->input->post('institusi_author');
			for ($i = 0; $i < $tambahan_author ; $i++) {
				$data_author['nama_author'] = $nama_author[$i];
				$data_author['email'] = $email_author[$i];
				$data_author['institusi'] = $institusi_author[$i];
				
				$this->Crud_model->insert('author',$data_author);

				$id_author[] = $this->Crud_model->get_id();

				// menyimpan data paper author
				$author_ke = $i+1;
				$data_paper_author = array(
					'id_paper' => $id_paper,
					'author_ke' => $author_ke,
					'id_author' => $id_author[$i]
				);
				$this->Crud_model->insert('paper_author',$data_paper_author);

			}			

			// jika semua oke
			$this->session->set_flashdata('success', 'Succes submit the paper');
			redirect(base_url('submission'),'refresh');

		}

		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Crud_model->select('user','*','id_user = "'.$id_user.'"')->row();
		$data['jurnal'] = $this->Crud_model->select('jurnal','*','status = "1"')->result();
		$data['page'] = 'page/submission';
		$this->load->view('template/backend', $data, FALSE);
	}

	public function paper_list()
	{
		$id_user = $this->session->userdata('id_user');
		$paper_list = $this->Crud_model->select('paper','*','id_user = "'.$id_user.'"');
		$data['paper'] = $paper_list->result();
		$data['user'] = $this->Crud_model->select('user','*','id_user = "'.$id_user.'"')->row();
		$data['page'] = 'page/paper_list';
		$this->load->view('template/backend', $data, FALSE);
	}
}

/* End of file Submission.php */
/* Location: ./application/controllers/Submission.php */