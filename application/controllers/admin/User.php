<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Crud_model');
	}

	public function index()
	{
		// mengambil data user
		$user = $this->Crud_model->select('user','*')->result();
		// menyimpan ke array data
		$data['user']	= $user;
		$this->load->view('template/frontend', $data, FALSE);
	}

	

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */