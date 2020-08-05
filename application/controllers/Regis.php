<?php

class Regis extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index() //funtion lihat pada halaman index.php
    {
        //tampilkan halaman index 

        $this->load->view("regis/login");
    }

    public function daftar()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]');

        if ($this->form_validation->run() == false) {
            $this->load->view('regis/regis');
        } else {
            $data = [
                'username'  => $this->input->post('username', true),
                'password'  => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'foto'      => 'default.jpg'
            ];
            $this->db->insert('warga', $data);
            $this->session->set_flashdata('daftar', '<div class="alert alert-success" role="alert">Pendaftaran berhasil! Silahkan login untuk melanjutkan</div>');
            redirect('regis');
        }
    }
}
