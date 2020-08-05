<?php

class Profile extends CI_Controller
{


    public function index() //funtion lihat mahasiswa pada halaman index.php


    {
        $this->load->model('Profile_model');
        $data['warga'] = $this->Profile_model->getAll();

        //tampilkan halaman index mahasiswa
        $this->load->view("templates/header");
        $this->load->view("testing/table", $data);
        $this->load->view("templates/footer");
    }
}
