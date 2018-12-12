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
		$data['approve'] 	   = $this->Crud_model->select('paper_file','*','status ="2"')->result();
		$data['revision'] 	   = $this->Crud_model->select('paper_file','*','status ="1"')->result();
		$data['paper_waiting'] = $this->Crud_model->select('paper_file','*','status ="0"')->result();
		$data['jurnal']        = $this->Crud_model->select('jurnal','*')->result();
		$data['user_all']      = $this->Crud_model->select('user','*')->result();
		$data['paper']         = $this->Crud_model->select('paper','*')->result();
		$data['page']          = 'admin/dashboard';
		$this->load->view('template/backend', $data);
	}

	// author
	public function author()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('author');
		$output             = $crud->render();
		$data['crud']       = $this->load->view('crud',$output);
		$data['page']       = 'admin/crud_admin';
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
		$crud->order_by('tanggal','DESC');
		$crud->columns('tanggal','judul_jurnal','volume','tahun','status');
		$crud->set_field_upload('cover','uploads/cover');
		$crud->set_relation_n_n('paper', 'jurnal_paper', 'paper', 'id_jurnal', 'id_paper', 'judul', 'paper_ke');
		$crud->field_type('status','dropdown',
			array('1' => 'Call Paper', '2' => 'Current Paper', '3' => 'Archive'));
		$output = $crud->render();
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
		$crud->order_by('tanggal_submit','DESC');
		$crud->columns('tanggal_submit','judul','author','file_paper_final');
		$crud->set_field_upload('file_paper_final','uploads/paper');
		$crud->set_relation_n_n('author', 'paper_author', 'author', 'id_paper', 'id_author', 'nama_author', 'author_ke');
		$output = $crud->render();
		$data['crud']       = $this->load->view('crud',$output);
		$data['page']       = 'admin/crud_admin';
		$data['title_page'] = 'Paper';

		$this->load->view('template/backend', $data);
	}

	// Page
	public function page()
	{
		$crud = new grocery_CRUD();
 
		$crud->set_table('page');
		$output = $crud->render();
		$data['crud']       = $this->load->view('crud',$output);
		$data['page']       = 'admin/crud_admin';
		$data['title_page'] = 'Paper';

		$this->load->view('template/backend', $data);
	}

	// Setiting
	public function setting()
	{
		$crud = new grocery_CRUD();
 
		$crud->set_table('setting');
		$crud->set_field_upload('logo','uploads/logo');
		$crud->set_field_upload('logo_header','uploads/logo');
		$output = $crud->render();
		$data['crud']       = $this->load->view('crud',$output);
		$data['page']       = 'admin/crud_admin';
		$data['title_page'] = 'Paper';

		$this->load->view('template/backend', $data);
	}

	// Partner
	public function partner()
	{
		$crud = new grocery_CRUD();
 
		$crud->set_table('partner');
		$crud->set_field_upload('logo','uploads/partner');
		$output             = $crud->render();
		$data['crud']       = $this->load->view('crud',$output);
		$data['page']       = 'admin/crud_admin';
		$data['title_page'] = 'Paper';

		$this->load->view('template/backend', $data);
	}


}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */