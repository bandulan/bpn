<?php

class Warga_m extends CI_model
{

	public function getAllWarga()
	{
		$query = $this->db->get("warga"); //select dari tabel warga
		return $query->result_array();
	}

	public function tambahDataWarga()
	{
		$data = [

			"ktp" => $this->input->post('ktp', true),
			"nama" => $this->input->post('nama', true),
			"alamat" => $this->input->post('alamat', true),
			"telfon" => $this->input->post('telfon', true),
			/* "agama" => $this->input->post('agama', true),
			"pekerjaan" => $this->input->post('pekerjaan', true),
			"no_kk" => $this->input->post('no_kk', true),
			"tempat_lhr" => $this->input->post('tempat_lhr', true),
			"tanggal_lhr" => $this->input->post('tanggal_lhr', true),
			"foto" => $this->input->post('foto') */
		];

		$this->db->insert('warga', $data); //insert to tabel warga
	}

	public function getById($id_warga)
	{
		return $this->db->get_where('warga', ['id_warga' => $id_warga])->row_array(); //select dari tabel warga
	}
}
