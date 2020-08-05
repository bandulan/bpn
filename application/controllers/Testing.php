<?php

class Testing extends CI_Controller
{


    public function index() //funtion lihat mahasiswa pada halaman index.php


    {

        //tampilkan halaman index mahasiswa
        $this->load->view("templates/header");
        $this->load->view("testing/index");
        $this->load->view("templates/footer");
    }
    public function table()
    {
        $this->load->view('testing/table');
    }

    public function fix()
    {
        $this->load->view('testing/header');
        $this->load->view('testing/fixed');
        $this->load->view('testing/footer');
    }
}
