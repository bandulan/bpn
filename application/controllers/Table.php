<?php

class Table extends CI_Controller
{


    public function index() //funtion lihat mahasiswa pada halaman index.php


    {
        $this->load->model('Table_m');
        $data['warga'] = $this->Table_m->getAll();

        //tampilkan halaman index mahasiswa
        $this->load->view("templates/header");
        $this->load->view("testing/table", $data);
        $this->load->view("templates/footer");
    }
}
