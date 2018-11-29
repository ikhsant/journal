<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submission extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// ceking akses level
		if (!$this->session->userdata('akses_level')) {
			redirect(base_url('login'),'refresh');
		}
	}

	public function index()
	{
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Crud_model->select('user','*','id_user = "'.$id_user.'"')->row();
		$data['page'] = 'page/submission';
		$this->load->view('template/frontend', $data, FALSE);
	}

}

/* End of file Submission.php */
/* Location: ./application/controllers/Submission.php */