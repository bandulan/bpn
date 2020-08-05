<?php 

class Table_m extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('warga')->result_array();

    }
}
