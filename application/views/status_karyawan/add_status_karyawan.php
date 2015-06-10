<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			if(validation_errors() !=null){echo validation_errors();}
		?>

		<form method="post" action="<?php echo site_url('status_karyawan/do_add');?>">
			<input type="text" id="nama_status" name="txt_namastatus" placeholder="STATUS">
			<input type="text" id="keterangan" name="txt_ket" placeholder="KETERANGAN">
			<input type="text" id="created_by" name="txt_createdby" placeholder="CREATED BY">
			<input type="text" id="created_date" name="txt_createdate" placeholder="CREATED DATE">
			<input type="text" id="modified_by" name="txt_modifiedby" placeholder="MODIFIED BY">
			<input type="text" id="modified_date" name="txt_modifieddate" placeholder="MODIFIEN DATE">
			<input type="submit" name="simpan" value="SIMPAN">
		</form>
	</body>
</html>