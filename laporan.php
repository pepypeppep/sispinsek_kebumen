<?php
            include("koneksi.php");
?>            
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
       
        <li class="breadcrumb-item active">LAPORAN SISWA PINDAH SEKOLAH</li>
      </ol>
          <form method="GET" action="cetaklaporan.php" >
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
                <tbody>
            <?php
                    include("koneksi.php");
                    $no=1;
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_pindah");
                        if(mysqli_num_rows($query) == 0){ 
                          echo '<tr><td colspan="7">Tidak ada data!</td></tr>';
                        }else{
                          while($data = mysqli_fetch_array($query)){?>
              <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data['nama'];?></td>
                <td><?php echo $data['ttl'];?></td>
                <td><?php echo $data['nisn'];?></td>
                <td>
                  <a class="btn btn-success btn-sm" href="cetaklaporan.php?id=<?php echo $data['id']; ?>">Cetak</a>
                </td>
              </tr>
              <?php $no++;}}?>
              </tbody>
            </table>
          </form>
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
