<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('grocery_CRUD');
		// cek admin
		if ($this->session->userdata('akses_level') !== 'admin') {
			redirect(base_url('submission'),'refresh');
		}

	}

	public function author()
	{
		$crud = new grocery_CRUD();
 
		$crud->set_table('author');
		$crud->columns('fist_name','last_name','country');
		$output = $crud->render();
		 

		$data['crud'] = $this->load->view('crud',$output);
		$data['page'] = 'page/author';

		$this->load->view('template/frontend', $data);
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */