<?php

session_start();
if(isset($_SESSION['page'])){

	if(isset($_GET['id_produk'])){
		include'connection.php';
		$no_user = $_GET['id_produk'];
		
		$sql = mysqli_query($dbconnect,"DELETE FROM produk WHERE id_produk='$no_user'");
		header("location:../index.php?page=produk");
	}else{
		header("location:../index.php?page=produk&error=true");
	}
  
}

?>