<?php
include 'connection.php';

$nama = mysqli_real_escape_string($dbconnect, $_POST['nama']);
$harga = mysqli_real_escape_string($dbconnect, $_POST['harga']);
$jumlah = mysqli_real_escape_string($dbconnect, $_POST['jumlah']);
$keterangan = mysqli_real_escape_string($dbconnect, $_POST['keterangan']);
	$sql = mysqli_query($dbconnect,"INSERT INTO produk(nama_produk, keterangan, harga, jumlah) VALUES ('$nama', '$keterangan', '$harga', '$jumlah')");
	if($sql){
		$error = 'false';
	}else{
		$error = 'true';
	}
header("location:../index.php?page=produk&error=".$error);
?>