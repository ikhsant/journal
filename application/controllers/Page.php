<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}		

	// detail page
	public function detail($url = NULL)
	{
		if (!empty($url)) {
			$data['page_isi'] = $this->Crud_model->select('page','*','url ="'.$url.'"')->row();
			$data['page'] = 'page/page_isi';
			$this->load->view('template/frontend', $data);
		}else{
			redirect(base_url(),'refresh');
		}
	}
}

/* End of file Page.php */
/* Location: ./application/controllers/Page.php */