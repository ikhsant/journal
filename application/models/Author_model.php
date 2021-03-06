<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Author_model extends CI_Model
{

    public $table = 'author';
    public $id = 'author_id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('author_id', $q);
	$this->db->or_like('fist_name', $q);
	$this->db->or_like('last_name', $q);
	$this->db->or_like('address1', $q);
	$this->db->or_like('address2', $q);
	$this->db->or_like('city', $q);
	$this->db->or_like('country', $q);
	$this->db->or_like('phone', $q);
	$this->db->or_like('email', $q);
	$this->db->or_like('zip', $q);
	$this->db->or_like('institution', $q);
	$this->db->or_like('category', $q);
	$this->db->or_like('username', $q);
	$this->db->or_like('password', $q);
	$this->db->or_like('last_login', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('author_id', $q);
	$this->db->or_like('fist_name', $q);
	$this->db->or_like('last_name', $q);
	$this->db->or_like('address1', $q);
	$this->db->or_like('address2', $q);
	$this->db->or_like('city', $q);
	$this->db->or_like('country', $q);
	$this->db->or_like('phone', $q);
	$this->db->or_like('email', $q);
	$this->db->or_like('zip', $q);
	$this->db->or_like('institution', $q);
	$this->db->or_like('category', $q);
	$this->db->or_like('username', $q);
	$this->db->or_like('password', $q);
	$this->db->or_like('last_login', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // insert data
    function insert_user($data)
    {
        $this->db->insert('user', $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Author_model.php */
/* Location: ./application/models/Author_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-11-29 12:53:15 */
/* http://harviacode.com */