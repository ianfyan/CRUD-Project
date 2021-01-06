<?php
if(isset($_SESSION['page'])) {
	if(isset($_GET['id_produk']) && isset($_GET['nama_produk']) && isset($_GET['harga']) && isset($_GET['jumlah'])&& isset($_GET['keterangan'])){
		//lajut
	}else{
		echo '<h3><center> Permintaan ditolak :( </center></h3>';
		exit;
	}
}
	$id_produk = $_GET['id_produk'];
	$nama_produk = $_GET['nama_produk'];
	$harga = $_GET['harga'];
	$jumlah = $_GET['jumlah'];
	$keterangan = $_GET['keterangan'];

?>

<div class="content-header ml-3 mr-3">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">EDIT PRODUK</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?page=produk">Informasi Produk</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>

<section class="content ml-3 mr-3">
	<div class="content">
		<div class="container-fluid">
	
		<form action="./konfig/update_produk.php" method="POST">
		  <div class="form-group">
			<label for="exampleInputEmail1">Nama Produk</label>
			 <input type="hidden" name="id_produk" value="<?php echo $id_produk; ?>">
			<input required class="form-control" type="text" name="nama" placeholder="Masukan Nama Produk" value="<?php echo $nama_produk ?>">
		  </div>
		  
		  <div class="form-group">
			<label for="exampleInputEmail1">Harga</label>
				<input required class="form-control" type="text" name="harga" placeholder="Masukan Harga" value="<?php echo $harga ?>">
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">Jumlah</label>
				<input required class="form-control" type="text" name="jumlah" placeholder="Masukan Jumlah" value="<?php echo $jumlah ?>">
		  </div>	
		  <div class="form-group">
			<label for="exampleInputEmail1">Keterangan</label>
				<input required class="form-control" type="text" name="keterangan" placeholder="Masukan Keteangan" value="<?php echo $keterangan ?>">
		  </div>	  
			<button type="submit" class="btn btn-outline-primary mt-3 float-right" value="simpan">Simpan</button>
		</form>

	</div>
</div>
</section>