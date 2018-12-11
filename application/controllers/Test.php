<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		$this->load->library('email');
		$this->email->from('eizan.kappa@gmail.com', 'Journal Nusa Putra');
		$this->email->to('ikhsan.thohir@nusaputra.ac.id');
		$this->email->subject('TEST EMAIL');
		$this->email->message('HAHAHAH');
		$this->email->send();
	}

}

/* End of file Test.php */
/* Location: ./application/controllers/Test.php */