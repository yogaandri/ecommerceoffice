<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			if(validation_errors() !=null){echo validation_errors();}
		?>

		<form method="post" action="">
			<input type="text" id="nama_status" name="txt_namastatus" value="<?php echo $list['nama_status']?>">
			<input type="text" id="keterangan" name="txt_ket" value="<?php echo $list['keterangan']?>">
			<input type="text" id="created_by" name="txt_createdby" value="<?php echo $list['created_by']?>">
			<input type="text" id="created_date" name="txt_createdate" value="<?php echo $list['created_date']?>">
			<input type="text" id="modified_by" name="txt_modifiedby" value="<?php echo $list['modified_by']?>">
			<input type="text" id="modified_date" name="txt_modifieddate" value="<?php echo $list['modified_date']?>">
			<input type="submit" name="ubah" value="UBAH">
		</form>
	</body>
</html>