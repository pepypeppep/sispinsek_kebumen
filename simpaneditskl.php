     <?php
    include "koneksi.php";
    $kode_skl     	= $_POST['kode_skl'];
	$asal_skl     	= $_POST['asal_skl'];
    $tujuan_skl    	= $_POST['tujuan_skl'];


    $query =mysql_query("update tb_sekolah set kode_skl='$kode_skl', asal_skl='$asal_skl', tujuan_skl='$tujuan_skl' where kode_skl='$kode_skl'");
		if($query){
		
		echo "<script> alert('update data berhasil'); location = 'tabel_skl.php'; </script>";
		
	}else{
		
		echo "<script> alert('update data gagal'); location = 'tabel_skl.php'; </script>";
		
	}
  {
      echo mysql_error();
  }
  
    ?>