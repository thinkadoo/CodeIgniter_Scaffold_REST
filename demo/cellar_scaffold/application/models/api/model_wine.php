<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_wine extends CI_Model
{

    private $wine = 'wine';

    public function __construct()
    {
        parent::__construct();
    }


    public function list_all()
    {
        $this->db->order_by('id','asc');
        return $this->db->get($this->wine);
    }


    public function count_all()
    {
        return $this->db->count_all($this->wine);
    }


    public function get_paged_list($limit = 10, $offset = 0)
    {
        $this->db->order_by('id','asc');
        return $this->db->get($this->wine, $limit, $offset);
    }


    public function get_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get($this->wine);
    }


    public function save($wine)
    {
        $this->db->insert($this->wine, $wine);
        return $this->db->insert_id();
    }


    public function update($id, $wine)
    {
        $this->db->where('id', $id);
        $this->db->update($this->wine, $wine);
        return $id;
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->wine);
        return $id;
    }


}
