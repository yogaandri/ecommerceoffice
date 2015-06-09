<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			if(validation_errors() !=null){echo validation_errors();}
		?>

		<form method="post" action="">
			<input type="text" id="total_biaya_pembelian" name="txt_ttlbiayabeli" value="<?php echo $list['total_biaya_pembelian']?>">
			<input type="text" id="konfirm_bayar" name="txt_konfrimbyr" value="<?php echo $list['konfirm_bayar']?>">
			<input type="text" id="tanggal_konfirm_bayar" name="txt_tglkonfirmbyr" value="<?php echo $list['tanggal_konfirm_bayar']?>">
			<input type="text" id="konfirm_akhir" name="txt_konfirmakhir" value="<?php echo $list['konfirm_akhir']?>">
			<input type="text" id="tanggal_konfirm_akhir" name="txt_tglkonfirmakhir" value="<?php echo $list['tanggal_konfirm_akhir']?>">
			<input type="text" id="status" name="txt_status" value="<?php echo $list['status']?>">
			<input type="text" id="keterangan" name="txt_ket" value="<?php echo $list['keterangan']?>">
			<input type="text" id="created_by" name="txt_createdby" value="<?php echo $list['created_by']?>">
			<input type="text" id="created_date" name="txt_createdate" value="<?php echo $list['created_date']?>">
			<input type="text" id="modified_by" name="txt_modifiedby" value="<?php echo $list['modified_by']?>">
			<input type="text" id="modified_date" name="txt_modifieddate" value="<?php echo $list['modified_date']?>">
			<input type="submit" name="ubah" value="UBAH">
		</form>
	</body>
</html>