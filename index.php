<?php
include("koneksi.php");
?>

<!DOCTYPE html>

<html>
<head>
   <title>Halaman Login</title>
</head>
<body>
   <form class="form-signin" role="form" name="login" method="post" action="proseslogin.php">
      <h1>Login Dahulu</h1>
      <input placeholder="Username" type="text" name="username"/>
      <input placeholder="Password" type="password" name="password"/>
      <button class="btn">Log in</button>
      <link rel="stylesheet" type="text/css" href="css/login-style.css">
   </form>
</body>
</html>