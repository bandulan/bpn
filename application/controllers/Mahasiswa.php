<?php

class Mahasiswa extends CI_Controller
{


    public function index() //funtion lihat mahasiswa pada halaman index.php


    {

        //tampilkan halaman index mahasiswa

        $this->load->view("bpn/index");
    }
}
