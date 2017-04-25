<?php
	if(isset($_COOKIE['kunjunganTerakhir']))
	{
		echo "Anda terakhir membuka file 25_cookie.php 
			jam ".$_COOKIE['kunjunganTerakhir'];
	}
	else
	{
		echo "Anda terakhir membuka file 25_cookie.php 
			30 detik yang lalu";
	}
	
?>

