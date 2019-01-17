<?php
	include("connect.php");
	if ($_GET) {
		$id = $_GET['id'];
	}
	
	$hapus = mysql_query("delete from tb_barang where id='$id'");
	header("location:satu.php");
	?>