<?php

	class model_status_karyawan extends CI_MODEL
	{
		function status_select()
		{
			$lihat = $this->db->get('tbl_status_karyawan');
			return $lihat->result_array();
		}

		function status_insert($data)
		{
			$tambah = $this->db->insert('tbl_status_karyawan', $data);
			return $tambah;
		}

		function data_update($id)
		{
			$tampil = $this->db->get_where('tbl_status_karyawan',array('id_status'=>$id));
			return $tampil->first_row("array");

		}
		
		function status_update($id)
		{
			$data = array
				(
					'nama_status' => $this->input->post('txt_namastatus'),
					'keterangan' => $this->input->post('txt_ket'),
					'created_by' => $this->input->post('txt_createdby'),
					'created_date' => $this->input->post('txt_createdate'),
					'modified_by' => $this->input->post('txt_modifiedby'),
					'modified_date' => $this->input->post('txt_modifieddate')
				);

				$this->db->where('id_status',$id);
				$update = $this->db->update('tbl_status_karyawan', $data);
				return $update;
		}

		function status_delete($id)
		{
			$this->db->where('id_status',$id);
			$delete = $this->db->delete('tbl_status_karyawan');
		}

	}
		

?>