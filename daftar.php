<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
?>

<html>
<head>
<title>Form Login</title>
	<link rel="stylesheet" href="css.css" type="text/css">
</head>
<body>

	<div align='center'>
	<form action="prosesdaftar.php" method="post">
	<h1>Masuk</h1>
  
	<div class="mou">
	<table align="center" >
	</div>
  
  <tbody>
  <tr><td colspan="2" align="center"><h1>Daftar Baru</h1></td></tr>
  <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
  <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
  <tr><td colspan="2" align="right"><input value="Daftar" type="submit"> <input value="Batal" type="reset"></td></tr>
  <tr><td colspan="2" align="center">Sudah Punya akun ? <a href="login.php"><b>Login</b></a></td></tr>
  </tbody>
  </table>
  </form>
</div>
</body>
</html>