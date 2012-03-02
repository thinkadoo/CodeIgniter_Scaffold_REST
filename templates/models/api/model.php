<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class %NAME_MODEL% extends CI_Model
{

    private $%NAME_TABLE% = '%NAME_TABLE%';

    public function __construct()
    {
        parent::__construct();
    }


    public function list_all()
    {
        $this->db->order_by('id','asc');
        return $this->db->get($this->%NAME_TABLE%);
    }


    public function count_all()
    {
        return $this->db->count_all($this->%NAME_TABLE%);
    }


    public function get_paged_list($limit = 10, $offset = 0)
    {
        $this->db->order_by('id','asc');
        return $this->db->get($this->%NAME_TABLE%, $limit, $offset);
    }


    public function get_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get($this->%NAME_TABLE%);
    }


    public function save($%NAME_TABLE%)
    {
        $this->db->insert($this->%NAME_TABLE%, $%NAME_TABLE%);
        return $this->db->insert_id();
    }


    public function update($id, $%NAME_TABLE%)
    {
        $this->db->where('id', $id);
        $this->db->update($this->%NAME_TABLE%, $%NAME_TABLE%);
        return $id;
    }


    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->%NAME_TABLE%);
        return $id;
    }


}
