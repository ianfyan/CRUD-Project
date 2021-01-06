<?php
if(isset($_SESSION['page'])){
  
}
?>
<div class="content-header ml-3 mr-3">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">INFORMASI PRODUK</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Informasi Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
	
  <section class="content ml-3 mr-3">
    <div class="content">
      <div class="container-fluid">

      <div class="row">
          <div class="col-md-12 mb-3 mt-4">
            <a href="./index.php?page=tambah_produk"><button type="button" class="btn btn-secondary btn-sm float-right"><i class="fas fa-plus-square"></i> &nbsp Tambah Produk</button></a>
          </div>
      </div>
      
			<div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="bg-secondary">
              <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
                <th>Edit</th>
              </tr>
            </thead>

          <tbody>
          <tbody class="bg-white">
						<?php
							$sql = mysqli_query($dbconnect,"SELECT * FROM produk");
								$no = '0';
								while($data = mysqli_fetch_array($sql)){
								$no++;
						?>
              <tr class="odd gradeX">
                <td><?php echo $no; ?></td>
                <td><?php echo $data['nama_produk']; ?></td>
                <td><?php echo $data['harga']; ?></td>
								<td><?php echo $data['jumlah']; ?></td>
								<td><?php echo $data['keterangan']; ?></td>
								<td>
								<center>
									<a href="./konfig/delete_produk.php?id_produk=<?php echo $data['id_produk'];?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Ingin menghapus pengguna?')" data-toggle="tooltip" title="Hapus"><i class="fas fa-trash-alt"></i></a>
									<a href="./index.php?page=edit_produk&id_produk=<?php echo $data['id_produk'];?>&nama_produk=<?php echo $data['nama_produk']; ?>&harga=<?php echo $data['harga']; ?>&jumlah=<?php echo $data['jumlah']; ?>&keterangan=<?php echo $data['keterangan']; ?>" class="btn btn-outline-primary btn-sm ml-3" data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a>
								</center>
								</td>
               </tr>
										
							<?php 
							}
							?>
           </tbody>
         </table>
      </div>
		</div>
	</div>
  </section>