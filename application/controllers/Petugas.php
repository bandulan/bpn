<?php


class Petugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Warga_m');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $this->load->model("Warga_m"); //masuk ke model warga
        $data["warga"] = $this->Warga_m->getAllWarga(); //get  function $warga yang dipanggil di index.php

        $this->load->view('templates/header');
        $this->load->view('petugas/tabelwarga', $data);
        $this->load->view('templates/footer');
    }
    public function persil()
    {
        $this->load->model("Persil_m"); //masuk ke model persil
        $data["persil"] = $this->Persil_m->getAllPersil(); //get  function $persil yang dipanggil di index.php

        $this->load->view('templates/header');
        $this->load->view('petugas/tabelpersil', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id_warga)
    {
        /* $id = $this->input->post('id_warga');
        $this->warga_m->profile('$id'); */

        $data['warga'] = $this->Warga_m->getById($id_warga);


        $this->load->view('templates/header');
        $this->load->view('petugas/profil', $data);
        $this->load->view('templates/footer');
    }

    public function profil()
    {
        $this->load->view('templates/header');
        $this->load->view('petugas/profil');
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
            $this->Warga_m->tambahDataWarga();
            $this->session->set_flashdata('flash', 'ditambahkan');    //set notif berhasil
            redirect('warga');                                   //redirect ke controller mahasiswa
        }
    } */
}
