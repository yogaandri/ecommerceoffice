<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			if(validation_errors() !=null){echo validation_errors();}
		?>

		<form method="post" action="<?php echo site_url('keu_in_hutang/do_add');?>">
			<input type="text" id="total_bayar" name="txt_totalbayar" placeholder="TOTAL BAYAR">
			<input type="text" id="total_bunga_bayar" name="txt_totalbungabayar" placeholder="TOTAL BUNGA BAYAR">
			<input type="text" id="konfirm_bayar" name="txt_konfirmbayar" placeholder="KONFIRM BAYAR">
			<input type="text" id="tanggal_konfirm_bayar" name="txt_tanggalkonfirmbayar" placeholder="TANGGAL KONFIRM BAYAR">
			<input type="text" id="bayar_ke" name="txt_bayarke" placeholder="BAYAR KE">
            <input type="text" id="keterangan" name="txt_keterangan" placeholder="KETERANGAN">
            <input type="text" id="created_by" name="txt_createdby" placeholder="CREATED BY">
			<input type="text" id="created_date" name="txt_createdate" placeholder="CREATED DATE">
			<input type="text" id="modified_by" name="txt_modifiedby" placeholder="MODIFIED BY">
			<input type="text" id="modified_date" name="txt_modifieddate" placeholder="MODIFIEN DATE">
			<input type="submit" name="simpan" value="SIMPAN">
		</form>
	</body>
</html>