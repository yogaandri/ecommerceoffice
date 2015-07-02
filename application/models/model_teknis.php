<?php
class model_teknis extends CI_Model {
	
	function insert_backoffice($data) {
		$insert = $this->db->insert('back_office', $data);
		return $insert;
	}
	
	function insert_frontoffice($data) {
		$insert = $this->db->insert('front_office', $data);
		return $insert;
	}
	
	function select_backoffice(){
		$result = $this->db->query("SELECT * FROM `back_office`");
		return $result -> result_array();
	}
	
	function delete_backoffice($id) {
		$this->db->where('no_keluhan', $id);
		$this->db->delete('back_office');
	}
	
	function select_frontoffice(){
		$result = $this->db->query("SELECT * FROM `front_office`");
		return $result -> result_array();
	}
	
	function delete_frontoffice($id) {
		$this->db->where('no_keluhan', $id);
		$this->db->delete('front_office');
	}
	
	/*function hitungmasuk($kode_pegawai, $bulan){
		$result = $this->db->query("SELECT COUNT(*) AS Masuk FROM `absen` WHERE kode_pegawai = '$kode_pegawai' AND status = 'masuk' AND tanggal LIKE '%$bulan%' ");
		 
		return $result -> first_row('array');
	}

	function hitungtelat($kode_pegawai, $bulan){
		$result = $this->db->query("SELECT COUNT(*) AS Telat FROM `absen` WHERE kode_pegawai = '$kode_pegawai' AND status = 'telat' AND tanggal LIKE '%$bulan%' ");
		 
		return $result -> first_row('array');
	}
	
	function hitungtidakabsenkeluar($kode_pegawai, $bulan){
		$result = $this->db->query("SELECT COUNT(*) AS TidakAbsenKeluar FROM `absen` WHERE kode_pegawai = '$kode_pegawai' AND jam_keluar = 0 AND tanggal LIKE '%$bulan%' ");
		
		return $result -> first_row('array');
	}

	function dataPegawai(){
		$result = $this->db->query("SELECT * FROM `absen` Group by kode_pegawai");		 
		
		return $result -> result_array();
	}
	
	function dataReward($kode_pegawai){
		$result = $this->db->query("SELECT * FROM `reward` WHERE kode_pegawai='$kode_pegawai'");		
		return $result -> first_row('array');
	}
	
	function cariPegawai($cari){
		$result = $this->db->query("SELECT * FROM `absen` WHERE nama LIKE '%$cari%' Group by kode_pegawai");		
		return $result -> result_array();
	}*/
}

?>