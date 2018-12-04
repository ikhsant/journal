<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paper extends CI_Controller {

	public function detail()
	{
		$data['page'] = 'page/paperdetail';
		$this->load->view('template/frontend', $data);
	}

	// submited paper
	public function submited()
	{
		$user               = $this->session->userdata('id_user');
			$data['user']       = $this->Crud_model->select('user','*','id_user = "'.$user.'"')->row();
			$data['paper']      = $this->Crud_model->select('paper','*')->result();
			$data['page']       = 'admin/revisi';
			$data['title_page'] = 'Paper';

			$this->load->view('template/backend', $data);
	}

}

/* End of file Paper.php */
/* Location: ./application/controllers/Paper.php */