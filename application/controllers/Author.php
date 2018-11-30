<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Author extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Author_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'author/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'author/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'author/index.html';
            $config['first_url'] = base_url() . 'author/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Author_model->total_rows($q);
        $author = $this->Author_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'author_data' => $author,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('author/author_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Author_model->get_by_id($id);
        if ($row) {
            $data = array(
		'author_id' => $row->author_id,
		'fist_name' => $row->fist_name,
		'last_name' => $row->last_name,
		'address1' => $row->address1,
		'address2' => $row->address2,
		'city' => $row->city,
		'country' => $row->country,
		'phone' => $row->phone,
		'email' => $row->email,
		'zip' => $row->zip,
		'institution' => $row->institution,
		'category' => $row->category,
		'username' => $row->username,
		'password' => $row->password,
		'last_login' => $row->last_login,
	    );
            $this->load->view('author/author_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('author'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('author/create_action'),
	    'author_id' => set_value('author_id'),
	    'fist_name' => set_value('fist_name'),
	    'last_name' => set_value('last_name'),
	    'address1' => set_value('address1'),
	    'address2' => set_value('address2'),
	    'city' => set_value('city'),
	    'country' => set_value('country'),
	    'phone' => set_value('phone'),
	    'email' => set_value('email'),
	    'zip' => set_value('zip'),
	    'institution' => set_value('institution'),
	    'category' => set_value('category'),
	    'username' => set_value('username'),
	    'password' => set_value('password'),
	    'last_login' => set_value('last_login'),
	);
        $this->load->view('author/author_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'fist_name' => $this->input->post('fist_name',TRUE),
		'last_name' => $this->input->post('last_name',TRUE),
		'address1' => $this->input->post('address1',TRUE),
		'address2' => $this->input->post('address2',TRUE),
		'city' => $this->input->post('city',TRUE),
		'country' => $this->input->post('country',TRUE),
		'phone' => $this->input->post('phone',TRUE),
		'email' => $this->input->post('email',TRUE),
		'zip' => $this->input->post('zip',TRUE),
		'institution' => $this->input->post('institution',TRUE),
		'category' => $this->input->post('category',TRUE),
		'username' => $this->input->post('username',TRUE),
		'password' => $this->input->post('password',TRUE),
		'last_login' => $this->input->post('last_login',TRUE),
	    );

            $this->Author_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('author'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Author_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('author/update_action'),
		'author_id' => set_value('author_id', $row->author_id),
		'fist_name' => set_value('fist_name', $row->fist_name),
		'last_name' => set_value('last_name', $row->last_name),
		'address1' => set_value('address1', $row->address1),
		'address2' => set_value('address2', $row->address2),
		'city' => set_value('city', $row->city),
		'country' => set_value('country', $row->country),
		'phone' => set_value('phone', $row->phone),
		'email' => set_value('email', $row->email),
		'zip' => set_value('zip', $row->zip),
		'institution' => set_value('institution', $row->institution),
		'category' => set_value('category', $row->category),
		'username' => set_value('username', $row->username),
		'password' => set_value('password', $row->password),
		'last_login' => set_value('last_login', $row->last_login),
	    );
            $this->load->view('author/author_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('author'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('author_id', TRUE));
        } else {
            $data = array(
		'fist_name' => $this->input->post('fist_name',TRUE),
		'last_name' => $this->input->post('last_name',TRUE),
		'address1' => $this->input->post('address1',TRUE),
		'address2' => $this->input->post('address2',TRUE),
		'city' => $this->input->post('city',TRUE),
		'country' => $this->input->post('country',TRUE),
		'phone' => $this->input->post('phone',TRUE),
		'email' => $this->input->post('email',TRUE),
		'zip' => $this->input->post('zip',TRUE),
		'institution' => $this->input->post('institution',TRUE),
		'category' => $this->input->post('category',TRUE),
		'username' => $this->input->post('username',TRUE),
		'password' => $this->input->post('password',TRUE),
		'last_login' => $this->input->post('last_login',TRUE),
	    );

            $this->Author_model->update($this->input->post('author_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('author'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Author_model->get_by_id($id);

        if ($row) {
            $this->Author_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('author'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('author'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('fist_name', 'fist name', 'trim|required');
	$this->form_validation->set_rules('last_name', 'last name', 'trim|required');
	$this->form_validation->set_rules('address1', 'address1', 'trim|required');
	$this->form_validation->set_rules('address2', 'address2', 'trim|required');
	$this->form_validation->set_rules('city', 'city', 'trim|required');
	$this->form_validation->set_rules('country', 'country', 'trim|required');
	$this->form_validation->set_rules('phone', 'phone', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('zip', 'zip', 'trim|required');
	$this->form_validation->set_rules('institution', 'institution', 'trim|required');
	$this->form_validation->set_rules('category', 'category', 'trim|required');
	$this->form_validation->set_rules('username', 'username', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('last_login', 'last login', 'trim|required');

	$this->form_validation->set_rules('author_id', 'author_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Author.php */
/* Location: ./application/controllers/Author.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-11-29 12:53:15 */
/* http://harviacode.com */