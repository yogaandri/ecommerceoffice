<html>
	<head><title>form pegawai</title></head>
<body>
	<form name=”tb_pegawai” action=”” method=”post”>
<table border=”1? align=”center” bgcolor=”#98fb98?>
	<tr>
		<td colspan=”3?><h2 align=”center”>Absensi Pegawai</h2></td>
	</tr>
	<tr>
		<td>nip</td>
		<td><input name=”nip” type=”hidden”></td>
	</tr>
	<tr>
		<td>nama pegawai</td>
		<td><input name=”textnama” type=”text” size=”50? maxlength=”50?></td>
	</tr>
	<tr>
		<td>jenis kelamin</td>
		<td><input name=”radiokelamin” type=”radio” value=”laki-laki”>laki-laki
			<input name=”radiokelamin” type=”radio” value=”perempuan”>perempuan</td>
	</tr>
	<tr>
		<td>golongan</td>
		<td><textarea name=”golongan” cols=”30? rows=”5?></textarea></td>
	</tr>
	<tr>	
		<td>pendidikan</td>
		<td><textarea name=”pendidikan” cols=”30? rows=”5?></textarea></td>
	</tr>
	<tr>
		<td>status</td>
		<td><input name=”textstatus” type=”text” size=”50? maxlength=”50?></td>
	</tr>
	<tr>
		<td>alamat</td>
		<td><input name=”textalamat” type=”text” size=”50? maxlength=”50?></td>
	</tr>
	<tr>
		<td>mulai kerja</td>
		<td><input name=”textmulai_kerja” type=”text” size=”24? maxlength=”24? value=”HH:MM:SS”></td>
	</tr>
	<tr>
		<td>kd_bagian</td>
		<td><input name=”textkd_bagian” type=”text” size=”24? maxlength=”24? value=”HH:MM:SS”></td>
	</tr>
	<tr>
		<td>foto</td>
		<td><input name=”textfoto” type=”text” size=”24? maxlength=”24? value=”HH:MM:SS”></td>
	</tr>
	<tr>
		<td colspan=”3? align=”center”>
		<input name=”buttonsimpan” type=”submit” value=”simpan”>
		<input name=”buttoncancel” type=”reset” value=”cancel”>
		</td>
	</tr>
	</table>
	</form>
</body>
</html>