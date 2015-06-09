<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			if(validation_errors() !=null){echo validation_errors();}
		?>

		<form method="post" action="<?php echo site_url('keu_out_barang/do_add');?>">
			<input type="text" id="total_biaya_pembelian" name="txt_ttlbiayabeli" placeholder="TOTAL BIAYA PEMBELIAN">
			<input type="text" id="konfirm_bayar" name="txt_konfrimbyr" placeholder="KONFIRM BAYAR">
			<input type="text" id="tanggal_konfirm_bayar " name="txt_tglkonfirmbyr" placeholder="TANGGAL KONFIRM BAYAR">
			<input type="text" id="konfirm_akhir" name="txt_konfirmakhir" placeholder="KONFIFRM AKHIR">
			<input type="text" id="tanggal_konfirm_akhir" name="txt_tglkonfirmakhir" placeholder="TANGGAL KONFIRM AKHIR">
			<input type="text" id="status" name="txt_status" placeholder="STATUS">
			<input type="text" id="keterangan" name="txt_ket" placeholder="KETERANGAN">
			<input type="text" id="created_by" name="txt_createdby" placeholder="CREATED BY">
			<input type="text" id="created_date" name="txt_createdate" placeholder="CREATED DATE">
			<input type="text" id="modified_by" name="txt_modifiedby" placeholder="MODIFIED BY">
			<input type="text" id="modified_date" name="txt_modifieddate" placeholder="MODIFIEN DATE">
			<input type="submit" name="simpan" value="SIMPAN">
		</form>
	</body>
</html>