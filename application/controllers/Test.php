<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		$submit = $this->input->post('submit');
		if (isset($submit)) {
			$author = $this->input->post('author');
			print_r($author);
		}
		$data['page'] = 'page/test';
		$this->load->view('template/frontend', $data);
	}

}

/* End of file Test.php */
/* Location: ./application/controllers/Test.php */