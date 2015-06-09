<?php

	class Model_out_barang extends CI_MODEL
	{
		function barang_select()
		{
			$lihat = $this->db->get('tbl_keu_out_barang');
			return $lihat->result_array();
		}

		function barang_insert($data)
		{
			$tambah = $this->db->insert('tbl_keu_out_barang', $data);
			return $tambah;
		}

		function data_update($id)
		{
			$tampil = $this->db->get_where('tbl_keu_out_barang',array('id_out_barang'=>$id));
			return $tampil->first_row("array");

		}
		
		function barang_update($id)
		{
			$data = array
				(
					'total_biaya_pembelian' => $this->input->post('txt_ttlbiayabeli'),
					'konfirm_bayar' => $this->input->post('txt_konfrimbyr'),
					'tanggal_konfirm_bayar' => $this->input->post('txt_tglkonfirmbyr'),
					'konfirm_akhir' => $this->input->post('txt_konfirmakhir'),
					'tanggal_konfirm_akhir' => $this->input->post('txt_tglkonfirmakhir'),
					'status' => $this->input->post('txt_status'),
					'keterangan' => $this->input->post('txt_ket'),
					'created_by' => $this->input->post('txt_createdby'),
					'created_date' => $this->input->post('txt_createdate'),
					'modified_by' => $this->input->post('txt_modifiedby'),
					'modified_date' => $this->input->post('txt_modifieddate')
				);

				$this->db->where('id_out_barang',$id);
				$update = $this->db->update('tbl_keu_out_barang', $data);
				return $update;
		}

		function barang_delete($id)
		{
			$this->db->where('id_out_barang',$id);
			$delete = $this->db->delete('tbl_keu_out_barang');
		}



	}
		

?>