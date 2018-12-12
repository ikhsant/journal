<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurnal extends CI_Controller {

	public function detail($id_jurnal = NULL)
	{
		// cek jika tidak ada id paper
		if (!$id_jurnal) {
			redirect(base_url(),'refresh');
		}
		// end cek

		$data['jurnal'] = $this->Crud_model->select('jurnal','*','id_jurnal ="'.$id_jurnal.'"')->row();
		$data['paper'] = $this->db->query("SELECT * 
											FROM jurnal_paper 
											JOIN paper 
											ON jurnal_paper.id_paper = paper.id_paper 
											WHERE jurnal_paper.id_jurnal = '$id_jurnal' 
											ORDER BY paper_ke ASC ")->result();
		$data['page'] = 'page/jurnaldetail';
		$this->load->view('template/backend', $data);
	}

}

/* End of file Jurnal.php */
/* Location: ./application/controllers/Jurnal.php */