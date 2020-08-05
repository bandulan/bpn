<?php


class Warga extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Warga_m');
		$this->load->library('form_validation');
	}


	public function index()

	{
		$this->load->model("Warga_m"); //masuk ke model mahasiswa
		$data["warga"] = $this->Warga_m->getAllWarga(); //get  function $mahasiswa yang dipanggil di index.php

		$this->load->view('templates/header');
		$this->load->view('bpn/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()                                        //function tambah
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
	}
	public function profil()

	{


		$this->load->view('templates/header');
		$this->load->view('petugas/profil');
		$this->load->view('templates/footer');
	}
}
