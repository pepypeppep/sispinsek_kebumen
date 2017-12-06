     <?php
    include "koneksi.php";
	$nisn     	= $_POST['nisn'];
    $nama    	= $_POST['nama'];
    $kelamin    = $_POST['kelamin'];
    $alamat   	= $_POST['alamat'];
	$ttl     	= $_POST['ttl'];
	$kelas	 	= $_POST['kelas'];

    $query =mysql_query("update tb_siswa set nisn='$nisn', nama='$nama', kelamin='$kelamin', alamat='$alamat', ttl='$ttl', kelas='$kelas' where nisn='$nisn'");
		if($query){
		
		echo "<script> alert('update data berhasil'); location = 'tabel_siswa.php'; </script>";
		
	}else{
		
		echo "<script> alert('update data gagal'); location = 'tabel_siswa.php'; </script>";
		
	}
  {
      echo mysql_error();
  }
  
    ?>