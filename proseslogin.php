<?php
   session_start(); //mulai session, krena kita akan menggunakan session pd file php ini
   include 'koneksi.php'; //hubungkan dengan config.php untuk berhubungan dengan database

   $username=$_POST['username']; //tangkap data yg di input dari form login input username
   $password=$_POST['password']; //tangkap data yg di input dari form login input password

   $query=mysqli_query($koneksi,"select * From tb_login where username='$username' and password='$password'"); //melakukan pengampilan data dari database untuk di cocokkan
   $xxx=mysqli_num_rows($query); //melakukan pencocokan

   if($xxx==TRUE){ // melakukan pemeriksaan kecocokan dengan percabangan.
      $_SESSION['username']=$username; //jika cocok, buat session dengan nama sesuai dengan username
      header("location:home.php"); // dan alihkan ke index.php
   }else{ //jika tidak tampilkan pesan gagal login
      echo "<script> alert('Username atau Password Salah, Silahkan Login Kembali'); location = 'index.php'; </script>";
	  
   }
?> 
