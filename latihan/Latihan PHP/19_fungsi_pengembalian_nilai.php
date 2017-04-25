<?php
	function hitung_luas($panjang, $lebar)
	{
		$luas = $panjang * $lebar;
		return $luas;
	}
	
	echo "Luas ruangan adalah ".hitung_luas(10,8);
	
	echo " <p>Kita dapat menggunakanya lagi seperti berikut: </p>";
	
	$p = 15;
	$l = 10;
	$luas = hitung_luas($p, $l);
	echo "Luas ruangan adalah $luas";
	
?>
