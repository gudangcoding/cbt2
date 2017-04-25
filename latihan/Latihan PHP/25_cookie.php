<?php
	$batas = time() + 30;
	
	setcookie("kunjunganTerakhir", date('H:i:s'), $batas);
	
	echo "COOKIE telah dibuat, buka file 25_cookie_cek.php 
			sebelum dan setelah 30 detik";
?>
