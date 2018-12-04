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

	public function index()
	{
		$data['page'] = 'admin/dashboard';
		$user = $this->session->userdata('id_user');
		$data['user'] = $this->Crud_model->select('user','*','id_user = "'.$user.'"')->row();
		$this->load->view('template/backend', $data);
	}

	// author
	public function author()
	{
		$crud = new grocery_CRUD();
 
		$crud->set_table('author');
		$output = $crud->render();
		
		$user = $this->session->userdata('id_user');
		$data['user'] = $this->Crud_model->select('user','*','id_user = "'.$user.'"')->row();

		$data['crud'] = $this->load->view('crud',$output);
		$data['page'] = 'admin/crud_admin';
		$data['title_page'] = 'Author';

		$this->load->view('template/backend', $data);
	}

	// user
	public function user()
	{
		$crud = new grocery_CRUD();
 
		$crud->set_table('user');
		$crud->columns('name','email','institution','country');
		$output = $crud->render();
		
		$user = $this->session->userdata('id_user');
		$data['user']       = $this->Crud_model->select('user','*','id_user = "'.$user.'"')->row();
		
		$data['crud']       = $this->load->view('crud',$output);
		$data['page']       = 'admin/crud_admin';
		$data['title_page'] = 'User';

		$this->load->view('template/backend', $data);
	}

	// jurnal
	public function jurnal()
	{
		$crud = new grocery_CRUD();
 
		$crud->set_table('jurnal');
		$output = $crud->render();
		
		$user = $this->session->userdata('id_user');
		$data['user']       = $this->Crud_model->select('user','*','id_user = "'.$user.'"')->row();
		$data['crud']       = $this->load->view('crud',$output);
		$data['page']       = 'admin/crud_admin';
		$data['title_page'] = 'Journal';

		$this->load->view('template/backend', $data);
	}

	// Paper
	public function paper()
	{
		$crud = new grocery_CRUD();
 
		$crud->set_table('paper');
		$output = $crud->render();
		
		$user = $this->session->userdata('id_user');
		$data['user']       = $this->Crud_model->select('user','*','id_user = "'.$user.'"')->row();
		$data['crud']       = $this->load->view('crud',$output);
		$data['page']       = 'admin/crud_admin';
		$data['title_page'] = 'Paper';

		$this->load->view('template/backend', $data);
	}


}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */