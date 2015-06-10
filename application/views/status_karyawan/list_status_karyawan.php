<a href="<?php echo base_url('status_keuangan/add');?>">TAMBAH DATA</a>
<?php

	if($this->session->flashdata('message') !=null)
	{
		echo $this->session->flashdata('message');
	}

	echo '
			<table>
					<tr>
						<th>ID STATUS</th>
						<th>NAMA STATUS</th>
						<th>KETERANGAN</th>
						<th>CREATED BY</th>
						<th>CREATED DATE</th>
						<th>MODIFIED BY</th>
						<th>MODIFIED DATE</th>
					</tr>

		 ';
	if (!empty ($list))
	{
		foreach ($list as $key => $row) 
		{
			echo '<tr>';
			echo '<td>'.++$key.'</td>';
			echo '<td>'.$row['id_status'].'</td>';
			echo '<td>'.$row['nama_status'].'</td>';
			echo '<td>'.$row['keterangan'].'</td>';
			echo '<td>'.$row['created_by'].'</td>';
			echo '<td>'.$row['created_date'].'</td>';
			echo '<td>'.$row['modified_by'].'</td>';
			echo '<td>'.$row['modified_date'].'</td>';
			echo '<td>'.'<a href = '.base_url('status_karyawan/update_status/'.$row['id_status'].'').'>Edit</a></td>';
			echo '<td>'.'<a href = '.base_url('status_karyawan/hapus/'.$row['id_status'].'').'>Hapus</a></td>';
			echo '<tr>';
		}
	}
	else
	{
		echo'<tr><td>tidak ada data yang ditampilkan</td>';
	}

	echo'</table>';
?>