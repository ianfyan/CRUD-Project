<?php
  include 'konfig/connection.php';
  $_SESSION['page'] = 'index';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Imam Kurfian</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- Font Awesome Icons -->
   <link rel="stylesheet" href="vendor/css/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vendor/css/admin-lte/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- custom databales -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
 <!-- loading -->
 <link rel="stylesheet" href="vendor/css/css-manual/loading.css">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light navbar-dark" style="background-color: #0E809B ;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas">Sistem Manajemen Produk</i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#0E809B; height: 695px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
	      <img src="vendor/img/logo.png" alt="AdminLTE Logo" style="width:200px; margin-left: 16px;" class="img-rounded">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <img src="vendor/img/admin1.png" class="img-circle elevation-2"  style="margin-left: 80px;" alt="User Image">
          <a href="#" class="d-block" style="margin-left: 50px; margin-top: 10px;">IMAM KURFIAN</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>Umur : 22 Tahun</p><br>
              <p>Universitas : Trunojoyo Madura</p><br>
              <p>Kecamatan : Klampis</p><br>
              <p>Kabupaten : Bangkalan</p><br>
              Madura, Jawa Timur
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper pt-4 pb-4">
  <?php 
				if(isset($_GET['page'])){
				$page = $_GET['page'];
 
					switch ($page) {
					case 'produk':
					include "pages/produk.php";
					break;
					case 'edit_produk':
					include "pages/edit_produk.php";
					break;
					case 'tambah_produk':
					include "pages/tambah_produk.php";
					break;
					default:
					echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
					break;
          }
        }else{
          include "pages/produk.php";
        }	
			?>
    
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020 </strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="vendor/js/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vendor/js/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="vendor/js/admin-lte/adminlte.min.js"></script>


<!-- Js datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>

<!--data tables function-->
<script>
		$(document).ready(function() {
			var table = $('#example').DataTable( {
				blengthChange: false,
				bPaginate: false,
				bInfo : false,
				buttons: [
					{ extend: 'pdf', className: 'btn-danger' },
					{ extend: 'excel', className: 'btn-success' },
					{ extend: 'print', className: 'btn-info' }
					]	 
			} );
	 
			table.buttons().container()
	        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
			
		} );
     </script>

<script>
		$(document).ready(function() {
			var table = $('#siswa').DataTable( {
				blengthChange: false,
				bPaginate: true,
				bInfo : false,
      });
	 
			table.buttons().container()
	        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
			
		} );
</script>

  <script>
            $(document).ready(function() {
                  if (Notification.permission !== "granted")
                    Notification.requestPermission();
            });
			
			function cek(){
				$.ajax({
					type: "GET",
					url: './konfig/notifikasi.php',
					success: function(data){
						if(data == '0'){
						
						}
						else{
						var notifikasi = new Notification(data, {
							icon: 'vendor/img/user.png',
							body: "Klik notifikasi ini untuk memasukan data siswa",
						});
						notifikasi.onclick = function () {
							window.open("index.php?page=siswa");      
						};
						}
					}
				});
				i=1;
				loop();
			}
			
			

				var i = 1;                     
				function loop () {           
				   setTimeout(function () {    
					  i++;  
					  if (i < 15) {           
						 loop();             
					  }else{
						cek();
					  }
				   }, 1000)
				}
			loop();
</script>

</body>
</html>
 