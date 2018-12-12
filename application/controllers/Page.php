<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	// home
	public function home()
	{
		$data['jurnal']     = $this->db->query("SELECT * FROM jurnal WHERE NOT status = '3' ORDER BY status ASC ")->result();
		$data['page']       = 'page/home';
		$this->load->view('template/backend', $data);
	}

	// detail page
	public function detail($url = NULL)
	{
		if (!empty($url)) {
			// cek page ada di database
			$page = $this->Crud_model->select('page','*','url ="'.$url.'"');
			if ($page->num_rows() > 0) {
				$data['page_isi'] = $this->Crud_model->select('page','*','url ="'.$url.'"')->row();
				$data['page'] = 'page/page_isi';
				$this->load->view('template/backend', $data);
			}else{
				show_404();
			}
		}else{
			redirect(base_url(),'refresh');
		}
	}

	// archive
	public function archive()
	{
		$data['jurnal'] = $this->db->query("SELECT * FROM jurnal WHERE status = '3' ORDER BY volume ASC, tahun DESC")->result();
		$data['page'] = 'page/archive';
		$this->load->view('template/backend', $data);
	}


	// jurnal
	public function jurnal($id_jurnal = NULL)
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

	// paper
	public function paper($id_paper = NULL)
	{
		// cek jika tidak ada id paper
		if (!$id_paper) {
			redirect(base_url(),'refresh');
		}
		// end cek

		$data['paper'] = $this->Crud_model->select('paper','*','id_paper ="'.$id_paper.'"')->row();
		$data['author'] = $this->db->query("SELECT * 
											FROM paper_author 
											JOIN author 
											ON paper_author.id_author = author.id_author 
											WHERE paper_author.id_paper = '$id_paper' 
											ORDER BY author_ke ASC ")->result();
		$data['page'] = 'page/paperdetail';
		$this->load->view('template/backend', $data);
	}

	// cari
	public function search()
	{
		$cari = $this->input->post('cari');
		
		$data['paper'] = $this->db->query("SELECT * FROM paper WHERE judul LIKE '%$cari%' LIMIT 5 ")->result();		
		$data['page']  = 'page/search';
		$this->load->view('template/backend', $data);
	}
}

/* End of file Page.php */
/* Location: ./application/controllers/Page.php */