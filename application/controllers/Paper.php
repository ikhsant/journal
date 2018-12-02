<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paper extends CI_Controller {

	public function detail()
	{
		$data['page'] = 'page/paperdetail';
		$this->load->view('template/frontend', $data);
	}

}

/* End of file Paper.php */
/* Location: ./application/controllers/Paper.php */