<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
	class teknis extends CI_Controller{
	
		function __construct() {
			parent:: __construct();
			$this->load->model('model_teknis');
		}
		
		function index(){
			$this->load->view('teknis/teknis');
		}
		
		function add_backoffice() {
			$data['title'] = "Form Keluhan";
			$data['result'] = "";
			
			if($_POST) {				
				$data = array(
					'id_karyawan'=>$this->input->post('id_karyawan'),
					'permasalahan'=>$this->input->post('permasalahan'),
					'solusi'=>'-',
					'tgl_keluhan'=>$this->input->post('tgl_keluhan'),
					'tgl_selesai'=>'0000-00-00',
					'status'=>0,
					'keterangan'=>$this->input->post('keterangan'),
					'pembiayaan'=>0
				);
				
				$insert = $this->model_teknis->insert_backoffice($data);
				
				if($insert) {
					$data['result'] = "Keluhan berhasil ditambahkan";
				} else {
					$data['result'] = "Gagal";
				}
				
			}
			$this->load->view('teknis/frm_backoffice',$data);
		}
		
		
		function add_frontoffice() {
			$data['title'] = "Form Keluhan";
			$data['result'] = "";
			
			if($_POST) {				
				$data = array(
					'id_ukm'=>$this->input->post('id_ukm'),
					'nama_pengeluh'=>$this->input->post('nama_pengeluh'),
					'permasalahan'=>$this->input->post('permasalahan'),
					'solusi'=>'-',
					'tgl_keluhan'=>$this->input->post('tgl_keluhan'),
					'tgl_selesai'=>'0000-00-00',
					'status'=>0,
					'keterangan'=>$this->input->post('keterangan'),
					'pembiayaan'=>0
				);
				
				$insert = $this->model_teknis->insert_frontoffice($data);
				
				if($insert) {
					$data['result'] = "Keluhan berhasil ditambahkan";
				} else {
					$data['result'] = "Gagal";
				}
				
			}
			$this->load->view('teknis/frm_frontoffice',$data);
		}
		
		function backoffice() {
			$data['title'] = "Back Office";
			
			$data_backoffice = $this->model_teknis->select_backoffice();
		
			$data['dataBackoffice'] = $data_backoffice;

			foreach($data_backoffice as $key => $value){
				$tgl_selesai = $value['tgl_selesai'];
				if($tgl_selesai=="0000-00-00") {
					$data_tglSelesai = "-";
				} else {
					$data_tglSelesai = $tgl_selesai;
				}
				
				$status = $value['status'];
				if($status=="0") {
					$data_status = "proses";
				} else {
					$data_status = "sukses";
				}
				
				$data['dataBackoffice'][$key]['data_tglSelesai'] = $data_tglSelesai;
				$data['dataBackoffice'][$key]['data_status'] = $data_status;
			}
			
			$this->load->view('teknis/back_office',$data);
		}
		
		function delete_backoffice($id) {
			$this->model_teknis->delete_backoffice($id);
			$ref = $this->input->server('HTTP_REFERER', TRUE);
			redirect($ref, 'location'); 
		}
		
		function frontoffice() {
			$data['title'] = "Front Office";
			
			$data_frontoffice = $this->model_teknis->select_frontoffice();
		
			$data['dataFrontoffice'] = $data_frontoffice;

			foreach($data_frontoffice as $key => $value){
				$tgl_selesai = $value['tgl_selesai'];
				if($tgl_selesai=="0000-00-00") {
					$data_tglSelesai = "-";
				} else {
					$data_tglSelesai = $tgl_selesai;
				}
				
				$status = $value['status'];
				if($status=="0") {
					$data_status = "proses";
				} else {
					$data_status = "sukses";
				}
				
				$data['dataFrontoffice'][$key]['data_tglSelesai'] = $data_tglSelesai;
				$data['dataFrontoffice'][$key]['data_status'] = $data_status;
			}
			
			$this->load->view('teknis/front_office',$data);
		}
		
		function delete_frontoffice($id) {
			$this->model_teknis->delete_frontoffice($id);
			$ref = $this->input->server('HTTP_REFERER', TRUE);
			redirect($ref, 'location'); 
		}
	}
?>