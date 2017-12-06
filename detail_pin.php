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
	  
<?php
	include('koneksi.php');
	if(isset($_GET['nama'])){
	$nama = $_GET['nama'];
			
			$show = mysql_query( "SELECT * FROM tb_pindah WHERE nama='$nama'");
			
}			
		if(mysql_num_rows($show) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo '<script>window.history.back()</script>';
		
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$data = mysql_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	}
	
?>
	 <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<tr>
					
					<th width="20%">Nama Siswa</th>
					<td><?php echo $data['nama']; ?></td>
				</tr>
				<tr>
					<th>Tempat/Tgl Lahir</th>
					<td><?php echo $data['ttl']; ?></td>
				</tr>
				<tr>
					<th>NISN</th>
					<td><?php echo $data['nisn']; ?></td>
				</tr>
				<tr>
					<th>Asal Sekolah</th>
					<td><?php echo $data['asal']; ?></td>
				</tr>
				<tr>
					<th>Kelas</th>
					<td><?php echo $data['kelas']; ?></td>
				</tr>
				<tr>
					<th>Nama Orang Tua</th>
					<td><?php echo $data['ortu']; ?></td>
				</tr>
				<tr>
					<th>Keperluan</th>
					<td><?php echo $data['keperluan']; ?></td>
				</tr>
        <tr>
          <th>Alasan Pindah Sekolah</th>
          <td><?php echo $data['alasan']; ?></td>
        </tr>
				<tr>
					<th>Yang Bersangkutan Memiliki</th>
					<td><?php echo $data['memiliki']; ?></td>
				</tr>
				<tr>
					<th>Keterangan</th>
					<td><?php echo $data['keterangan']; ?></td>
				</tr>
			</div>
			</div>
				</table>
			<td>&nbsp;</td>
				<td>
			<a href="tabel_pin.php?nama='.$data['nama'].'" class="btn btn-sm btn-danger">Kembali</a></td>
			
		
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
				 