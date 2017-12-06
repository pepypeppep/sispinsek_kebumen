<!DOCTYPE html>
<html lang="en">

<head>
 
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  
</head>

<body class="fixed-nav sticky-footer" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
  
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
       
        <li class="breadcrumb-item active">DATA SISWA PINDAH SEKOLAH</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				 <thead>
                <tr>
				  <th>No</th>
				  <th>Nama</th>
				  <th>Tempat/Tgl Lahir</th>
				  <th>NISN</th>
				  <th>Aksi</th>
                </tr>
              </thead>
			  </div>
			  </div>
		
		<tbody>
			<?php
			include("koneksi.php");
			$no=1;
			$query = mysql_query("SELECT * FROM tb_pindah");
					if(mysql_num_rows($query) == 0){	
		
			echo '<tr><td colspan="7">Tidak ada data!</td></tr>';
			
		}else{
					while($data = mysql_fetch_array($query)){
					
				echo '<tr>';
				echo	'<td>'.$no.'</td>';
				echo '<td><a href="detail_pin.php?nama='.$data['nama'].'">'.$data['nama'].'</button></a></td>';
				echo	'<td>'.$data['ttl'].'</td>';
				echo	'<td>'.$data['nisn'].'</td>';
				echo '<td>
					<a href="editpin.php?nama='.$data['nama'].'">Edit</a> | 
					<a href="hapuspin.php?nama=delete&nama='.$data['nama'].'"  onclick="return confirm(\'Anda yakin akan menghapus data '.$data['nama'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true">Hapus</span></a>
					</td>';
				$no++;
			}
				}
				?>			
			
			
		</tbody>
		 <tfoot>
    
           </table>
        
	  <nav>
		<ul>
			<a href="tambah_pin.php"><button>Tambah</button></a>
			<td>&nbsp;</td>
				<td>
			<a href="home.php" class="btn btn-sm btn-danger">Kembali</a></td>
			
		</ul>
	</nav>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small></small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
