<?php
	include"connect.php";
	$tampil = mysql_query("select * from barangg");
	while ($data = mysql_fetch_array($tampil)){
	echo $data;
	}
	?>