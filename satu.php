<html>
<head>
	<title>Kelola Data Barang</title>
	<link rel="stylesheet" href="css.css" type="text/css">
</head>
<body>
	<H1><div class= "jdl" > KELOLA DATA BARANG</div></H1>
	<br>
	<br>
	<table width= 80% height=5% align="center">
		<tr>
			<h3><b>Data Barang</b></h3>
			<td><p align= "right"><a href=input.php><button class ="btn">Tambah</button></a></p></td>
		</tr>
	</table>
	<br>
	<table width=80% height=40% align="center" border=1 cellpadding=0 cellspacing=0>
	<tr align="center">
	<td>Kode</td>
	<td>Nama</td>
	<td>Harga</td>
	<td>Aksi</td>
	</tr>
	
	<?php
	include("connect.php");
	$tampil=mysql_query("select * from tb_barang");
	while ($data=mysql_fetch_array($tampil)){
		
	?>
	
	<tr align = "center">
	<td><?php echo $data['kode']; ?></td>
	<td><?php echo $data['nama']; ?></td>
	<td><?php echo $data['harga']; ?></td>
	<td class = "eh"><a href = "Update.php?id=<?php echo $data ['id'];?>">
	Edit</a> | <a href = hapus.php?id=<?php echo $data ['id'];?>"> Hapus</a></td>
	</tr>
	<table align="center">
	<br>
	<tr>
	<td><p align= "center"><a href=logout.php><button class ="btn">Logout</button></a></p></td>
	</tr>
	</br>
	</table>
	<?php
		header("location:login.php");
		}
	?>


</table>
</body>
</html>