<?php

include("config.php");

if(isset($_POST['create'])){

	$nama_karyawan = $_POST['nama_karyawan'];
	$posisi = $_POST['posisi'];
	$gaji = $_POST['gaji'];

	$sql = "INSERT INTO karyawan (nama_karyawan, posisi, gaji)
	VALUE ('$nama_karyawan', '$posisi', '$gaji')";

	$query = mysqli_query($db, $sql);
	
	if( $query ) {
		header('Location: index.php?status=sukses');
	} else {
		header('Location: index.php?status=gagal');
	}
} else {
	die("Akses dilarang...");
}

?>