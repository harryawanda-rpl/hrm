<?php
include("config.php");
if( !isset($_GET['id']) ){
	header('Location: index.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM karyawan WHERE id_karyawan=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>
</head>
<body>
	<h3>Update Data</h3>
	<form action="process-update.php" method="POST">
		<table border="0">
			<tr>
				<td></td>
				<td><input type="hidden" name="id_karyawan" value="<?php echo $data['id_karyawan'] ?>" /></td>
			</tr>
			<tr>
				<td>Nama Karyawan</td>
				<td><input type="text" name="nama_karyawan" value="<?php echo $data['nama_karyawan'] ?>" class="form-control"></td>
			</tr>
			<tr>
				<td>Posisi</td>
				<td><input type="text" name="posisi" value="<?php echo $data['posisi'] ?>" class="form-control"></td>
			</tr>
			<tr>
				<td>Gaji</td>
				<td><input type="text" name="gaji" value="<?php echo $data['gaji'] ?>" class="form-control"></td>
			</tr>
			<tr>
				<td>&nbsp</td>
			</tr>
		</table>
		<button type="submit" name="update" class="btn btn-primary">Simpan</button>
	</form>
</body>
</html>