<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// ceking akses level
		if (!$this->session->userdata('akses_level')) {
			redirect(base_url('login'),'refresh');
		}
	}

	// change password
	public function changePassword()
	{
		$id_user = $this->session->userdata('id_user');

		$submit = $this->input->post('submit');
		if (isset($submit)) {
			$old_password = $this->input->post('old_password');
			$new_password = $this->input->post('new_password');

			$cek_old = $this->Crud_model->select('user','*','id_user ="'.$id_user.'" AND password ="'.$old_password.'"');
			if ($cek_old->num_rows() > 0) {
				$data['password'] = $new_password;
				// menyimpan dengan sandi baru
				$this->Crud_model->update('user',$data,'id_user ="'.$id_user.'"');
				// pesan berhasil
				$this->session->set_flashdata('success','Success change the password');
				// redirek
				redirect(base_url('user/changepassword'),'refresh');
			}else{
				// pesan error
				$this->session->set_flashdata('error','Old password is Wrong');
				// redirek
				redirect(base_url('user/changepassword'),'refresh');
			}
		}


		$data['user'] = $this->Crud_model->select('user','*','id_user = "'.$id_user.'"')->row();
		$data['page'] = 'page/changepassword';
		$this->load->view('template/backend', $data);
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */