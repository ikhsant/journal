<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		// Validasi
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		$email			= $this->input->post('email');
		$password		= sha1($this->input->post('password'));
		
		if($this->form_validation->run()) {
			$user = $this->Crud_model->select('user','*','email ="'.$email.'" AND password = "'.$password.'"');
			if ($user->num_rows() > 0) {
				$row = $user->row();
				$this->session->set_userdata('id_user',$row->id_user);
				$this->session->set_userdata('akses_level',$row->akses_level);
				$this->session->set_userdata('nama',$row->nama);
				$this->session->set_userdata('username',$row->username);
				$this->session->set_userdata('email',$row->email);
				// pesan sukses
				$this->session->set_flashdata('success', 'Success');
				// redirek
				if ($row->akses_level == 'admin') {
					redirect(base_url('admin/dashboard'),'refresh');
				}elseif($row->akses_level == 'author'){
					redirect(base_url('submission'),'refresh');
				}else{
					$this->session->set_flashdata('error', 'Not Found');
				}
			}else{
				$this->session->set_flashdata('error', 'Email or Password incorrect');
			}
		}
		// End validasi

		$data['page'] = 'page/login';
		$this->load->view('template/frontend', $data, FALSE);
	}

	// Logout
	public function logout() {
		session_destroy();
		$this->session->set_flashdata('success', 'Berhasil');
		redirect(base_url('login'),'refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */