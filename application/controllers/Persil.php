<?php


class Persil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Persil_m');
        /* $this->load->library('form_validation'); */
    }


    public function index()

    {
        $this->load->model("Persil_m"); //masuk ke model mahasiswa
        $data["persil"] = $this->Persil_m->getAllPersil(); //get  function $mahasiswa yang dipanggil di index.php

        $this->load->view('testing/header');
        $this->load->view('persil/persil', $data);
        $this->load->view('templates/footer');
    }

    /* public function tambah()                                        //function tambah
    {
        //$data["judul"] = "Form tambah";                             //judul halaman tambah

        $this->form_validation->set_rules('nama', 'Nama', 'required');  //set validasi di form tambah
        if ($this->form_validation->run() == FALSE) {              //kalau data yang di input tidak benar, masuk ke form tambah

            $this->load->view('templates/header.php');
            $this->load->view("bpn/tambah");                      //form tambah
            $this->load->view("templates/footer");
        } else {                                                    // kalau validasi benar
            $this->Persil_m->tambahDataPersil();
            $this->session->set_flashdata('flash', 'ditambahkan');    //set notif berhasil
            redirect('warga');                                   //redirect ke controller mahasiswa
        } */
}
