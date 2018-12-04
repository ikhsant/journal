<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Revisi extends CI_Controller {

	// detail
	public function detail($id_paper)
	{
		$user               = $this->session->userdata('id_user');
		$data['user']       = $this->Crud_model->select('user','*','id_user = "'.$user.'"')->row();
		$data['paper']      = $this->Crud_model->select('paper','*','id_paper ="'.$id_paper.'"','','tanggal_submit DESC')->row();
		$data['revisi']      = $this->Crud_model->select('revisi','*','id_paper ="'.$id_paper.'"','','tanggal DESC')->result();
		$data['page']       = 'admin/revisi_detail';
		$data['title_page'] = 'Paper';

		$this->load->view('template/backend', $data);
	}

}

/* End of file Revisi.php */
/* Location: ./application/controllers/Revisi.php */