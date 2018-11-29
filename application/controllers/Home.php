<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['page'] = 'page/home';
		$this->load->view('template/frontend', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */