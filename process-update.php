<?php

include("config.php");

if(isset($_POST['update'])){

	$id = $_POST['id_karyawan'];
	$nama_karyawan = $_POST['nama_karyawan'];
	$posisi = $_POST['posisi'];
	$gaji = $_POST['gaji'];

	$sql = "UPDATE karyawan SET nama_karyawan='$nama_karyawan', posisi='$posisi',
	gaji='$gaji' WHERE id_karyawan=$id";
	$query = mysqli_query($db, $sql);

	if( $query ) {
		header('Location: index.php');
	} else {
		die("Gagal menyimpan perubahan...");
	}
} else {
    die("Akses dilarang...");
}

?>