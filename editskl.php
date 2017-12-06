  <?php 
    include "koneksi.php";
    $kode_skl=$_GET["kode_skl"];
    $query=mysql_query("select * from tb_sekolah where kode_skl='$kode_skl'");
	?>
<html>
<head>
 <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  
 
 </head>
 <body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
  
   <ol class="breadcrumb">
       
        <li class="breadcrumb-item active" align="center">Edit Data Sekolah</li>
      </ol>
<style type="text/css">
<!--
.style2 {font-family: "Courier New", Courier, monospace}
.style6 {color: #FFFFFF; font-family: "Courier New", Courier, monospace; font-weight: bold; }
.style7 {
	color: #333333;
	font-weight: bold;
}
-->
</style>
 <br>
 <br>
 <form method="post" action="simpaneditskl.php"> 
<table align="center" width="49%" border="0">
    <?php
    while($row=mysql_fetch_array($query)){
    ?>
<tr>
<td>Kode</td> 
<td>:</td> 
<td> 
<input name="kode_skl" type="text" size="15" value="<?php echo $row['kode_skl'];?>" maxlength="50"> 
</td> 
</tr>       
<tr>
<td>Asal Sekolah</td> 
<td>:</td> 
<td> 
<input name="asal_skl" type="text" size="25" value="<?php echo $row['asal_skl'];?>" maxlength="50"> 
</td> 
</tr> 	
<tr> 
<td>Tujuan Sekolah</td> 
<td>:</td> 
<td> 
<input name="tujuan_skl" type="text" size="25" value="<?php echo $row['tujuan_skl'];?>" maxlength="50"> 
</td> 
</tr> 
    <tr>
   <td><input type="submit" name="update" class="btn btn-sm btn-primary" value="Simpan">
	<a href="tabel_skl.php" class="btn btn-sm btn-danger">Batal</a></td>	
    </tr>
    <?php } 
	?>
    </table>
	</form>
     
 </body>
 </html>