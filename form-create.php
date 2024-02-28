<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>
</head>
<body>
	<h3>CREATE DATA</h3>
	<form action="process-create.php" method="POST">
		<table border="0">
			<tr>
				<td>Nama Karyawan</td>
				<td><input type="text" name="nama_karyawan" class="form-control"></td>
			</tr>
			<tr>
				<td>Posisi</td>
				<td><input type="text" name="posisi" class="form-control"></td>
			</tr>
			<tr>
				<td>Gaji</td>
				<td><input type="text" name="gaji" class="form-control"></td>
			</tr>
		</table>
		<button type="submit" name="create" class="btn btn-primary">Simpan</button>
	</form>
</body>
</html>