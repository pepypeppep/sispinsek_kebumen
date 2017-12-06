<html>
<title>Hapus</title>
<style type="text/css">
<!--
.style2 {font-size: 24px}
-->
</style>

<?php
  include("koneksi.php");
  if(isset($_GET['kode_skl'])!="")
  {
  $delete=$_GET['kode_skl'];
  $delete=mysql_query("DELETE FROM tb_sekolah WHERE kode_skl='$delete'");
	if($delete){
		
	echo "<script> alert('data berhasil dihapus'); location = 'tabel_skl.php'; </script>";
		
	}else{
		
		echo "<script> alert('data gagal dihapus'); location = 'tabel_skl.php'; </script>";
		
	}
  {
      echo mysql_error();
  }
  }
?>
</html>