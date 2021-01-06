<?php
if(isset($_SESSION['page'])){
  
}
?>
<div class="content-header ml-3 mr-3">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">TAMBAH PRODUK</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?page=produk">Informasi Produk</a></li>
              <li class="breadcrumb-item active">Tambah Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
	</div>

<section class="content ml-3 mr-3">
	<div class="content">
		<div class="container-fluid">
	
		<form action="./konfig/add_produk.php" method="POST">
		  <div class="form-group">
			<label for="exampleInputEmail1">Nama Produk</label>
			<input required class="form-control" type="text" name="nama" placeholder="Masukan Nama Produk">
		  </div>
		  
		 <div class="form-group">
			<label for="exampleInputEmail1">Harga</label>
				<input required class="form-control" type="text" name="harga" placeholder="Masukan Harga">
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">Jumlah</label>
				<input required class="form-control" type="text" name="jumlah" placeholder="Masukan Jumlah">
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">Keterangan</label>
				<input required class="form-control" type="text" name="keterangan" placeholder="Masukan keterangan">
		  </div>
			<button type="submit" class="btn btn-outline-primary mt-3 float-right" value="simpan">Tambahkan</button>
		</form>

	</div>
</div>
</section>