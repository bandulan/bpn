<?php

class Profile_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('warga')->result_array();
    }
}
