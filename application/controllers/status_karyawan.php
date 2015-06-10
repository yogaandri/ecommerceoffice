<?php
	
	/**
	* 
	*/
	class status_karyawan extends CI_CONTROLLER
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			$this->load->model('model_status_karyawan');
			$data['list'] 		= $this->model_status_karyawan->status_select();
			$data['title']		= "Daftar Pembelian Barang";
			$data['content'] 	=  $this->load->view('status_karyawan/list_status_karyawan',$data,true);
								   $this->load->view('wrapper/wrapper_status_karyawan',$data);
		}

		public function add()
		{
			$data['title'] 		= "Daftar Status Karyawan";
			$data['content']	= $this->load->view('status_karyawan/add_status_karyawan',$data,true);
			$this->load->view('wrapper/wrapper_status_karyawan',$data);

		}

		public function do_add()
		{
			$this->lang->load('form_validation');
			$this->form_validation->set_rules('txt_namastatus','nama_status', 'required');
			$this->form_validation->set_rules('txt_ket','keterangan','required');
			$this->form_validation->set_rules('txt_createdby','created_by','required');
			$this->form_validation->set_rules('txt_createdate','created_date','required');
			$this->form_validation->set_rules('txt_modifiedby','modified_by','required');
			$this->form_validation->set_rules('txt_modifieddate','modified_date','required');


			if(!$this->form_validation->run())
			{
				$this->add;
			}
			else
			{
				$data = array
				(
					'nama_status' => $this->input->post('txt_namastatus'),
					'keterangan'=>$this->input->post('txt_ket'),
					'created_by'=>$this->input->post('txt_createdby'),
					'created_date'=>$this->input->post('txt_createdate'),
					'modified_by'=>$this->input->post('txt_modifiedby'),
					'modified_date'=>$this->input->post('txt_modifieddate')
				);
				
				$this->load->model('model_status_karyawan');
				$nulis = $this->model_status_karyawan->status_insert($data);

				if($nulis)
				{
					$this->session->set_flashdata('message','BERHASIL MENAMBAH DATA');
				}
				else
				{
					$this->session->$this->session->set_flashdata('message', 'GAGAL MENAMABAH DATA');
				}
				redirect(base_url('status_karyawan'));
			}
		}

		public function update_status($id)
		{
			$lol = $id;

			$this->load->model('model_status_karyawan');
			$data['list'] = $this->model_status_karyawan->data_update($lol);

			// print_r($data['list']);

			if (isset($_POST['ubah']))
			{
				$haha = $this->model_status_karyawan->status_update($lol);
				if($haha)
				{
					redirect(base_url('status_karyawan'));
				}
				else
				{
					redirect(base_url('status_karyawan/update_status'));
				}
			}
		
			$this->load->view('status_karyawan/update_status',$data);
		}

	function hapus ($id)
	{
		$this->load->model('model_status_karyawan');
		$delete = $this->model_status_karyawan->status_delete($id);
		redirect(base_url('status_karyawan'));
	}


	}	
?>