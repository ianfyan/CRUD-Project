<?php 
session_start();
if(isset($_SESSION['page'])){

if(isset($_POST['id_produk'])){

include 'connection.php';
$nama_produk = mysqli_real_escape_string($dbconnect, $_POST['nama']);
$harga = mysqli_real_escape_string($dbconnect, $_POST['harga']);
$jumlah = mysqli_real_escape_string($dbconnect, $_POST['jumlah']);
$keterangan = mysqli_real_escape_string($dbconnect, $_POST['keterangan']);
$id_produk = mysqli_real_escape_string($dbconnect, $_POST['id_produk']);
$sql = mysqli_query($dbconnect, "UPDATE produk SET nama_produk='$nama_produk', keterangan='$keterangan', harga='$harga', jumlah='$jumlah' WHERE id_produk='$id_produk'");
    if($sql){
        $error = "false";
    }else{
        $error = "true";
    }
}else{
    $error="true";
}

}else{
    $error="true";
}
header("location:../index.php?page=produk&error=".$error);

?>