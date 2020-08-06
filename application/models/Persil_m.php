<?php

class Persil_m extends CI_model
{

    public function getAllPersil()
    {
        $query = $this->db->get("persil"); //select dari tabel persil
        return $query->result_array();
    }

    public function tambahDataPersil()
    {
        $data = [

            "ktp" => $this->input->post('ktp', true),
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "telfon" => $this->input->post('telfon', true),
            "agama" => $this->input->post('agama', true),
            "pekerjaan" => $this->input->post('pekerjaan', true),
            "no_kk" => $this->input->post('no_kk', true),
            "tempat_lhr" => $this->input->post('tempat_lhr', true),
            "tanggal_lhr" => $this->input->post('tanggal_lhr', true),
            "foto" => $this->input->post('foto')
        ];

        $this->db->insert('persil', $data); //insert to tabel persil
    }

    public function getById($id_persil)
    {
        return $this->db->get_where('persil', ['id_persil' => $id_persil])->row_array(); //select dari tabel warga
    }
}
