<?php
	
	/**
	Rizqya Zakyyatul Arif
	* 
	*/
	class Keu_out_barang extends CI_CONTROLLER
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			$this->load->model('Model_out_barang');
			$data['list'] 		= $this->Model_out_barang->barang_select();
			$data['title']		= "Daftar Pembelian Barang";
			$data['content'] 	=  $this->load->view('keu_out_barang/list_out_barang',$data,true);
								   $this->load->view('wrapper/wrapper_output_keu',$data);
		}

		public function add()
		{
			$data['title'] 		= "Tambah Daftar Pembelian Barang";
			$data['content']	= $this->load->view('keu_out_barang/add_out_barang',$data,true);
			$this->load->view('wrapper/wrapper_output_keu',$data);

		}

		public function do_add()
		{
			$this->lang->load('form_validation');
			$this->form_validation->set_rules('txt_ttlbiayabeli','total_biaya_pembelian', 'required');
			$this->form_validation->set_rules('txt_konfrimbyr','konfirm_bayar','required');
			$this->form_validation->set_rules('txt_tglkonfirmbyr','tanggal_konfirm_bayar','required');
			$this->form_validation->set_rules('txt_konfirmakhir','konfirm_akhir','required');
			$this->form_validation->set_rules('txt_tglkonfirmakhir','tanggal_konfirm_akhir','required');
			$this->form_validation->set_rules('txt_status','status','required');
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
					'total_biaya_pembelian' => $this->input->post('txt_ttlbiayabeli'),
					'konfirm_bayar'=>$this->input->post('txt_konfrimbyr'),
					'tanggal_konfirm_bayar'=>$this->input->post('txt_tglkonfirmbyr'),
					'konfirm_akhir'=>$this->input->post('txt_konfirmakhir'),
					'tanggal_konfirm_akhir'=>$this->input->post('txt_tglkonfirmakhir'),
					'status'=>$this->input->post('txt_status'),
					'keterangan'=>$this->input->post('txt_ket'),
					'created_by'=>$this->input->post('txt_createdby'),
					'created_date'=>$this->input->post('txt_createdate'),
					'modified_by'=>$this->input->post('txt_modifiedby'),
					'modified_date'=>$this->input->post('txt_modifieddate')
				);
				
				$this->load->model('Model_out_barang');
				$nulis = $this->Model_out_barang->barang_insert($data);

				if($nulis)
				{
					$this->session->set_flashdata('message','BERHASIL MENAMBAH DATA');
				}
				else
				{
					$this->session->$this->session->set_flashdata('message', 'GAGAL MENAMABAH DATA');
				}
				redirect(base_url('Keu_out_barang'));
			}
		}

		public function update_outbarang($id)
		{
			$lol = $id;

			$this->load->model('Model_out_barang');
			$data['list'] = $this->Model_out_barang->data_update($lol);

			// print_r($data['list']);

			if (isset($_POST['ubah']))
			{
				$haha = $this->Model_out_barang->barang_update($lol);
				if($haha)
				{
					redirect(base_url('Keu_out_barang'));
				}
				else
				{
					redirect(base_url('Keu_out_barang/update_outbarang'));
				}
			}
		
			$this->load->view('keu_out_barang/update_out_barang',$data);
		}

	function hapus ($id)
	{
		$this->load->model('Model_out_barang');
		$delete = $this->Model_out_barang->barang_delete($id);
		redirect(base_url('Keu_out_barang'));
	}


	}	
?>