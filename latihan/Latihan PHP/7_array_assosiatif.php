<?php
	// cara 1
	$profil = array("nama" => "Nabil", "alamat" => "Tegal", "usia" => "4");
	
	echo "Nama saya $profil[nama], saya berasal dari $profil[alamat],
		usia saya $profil[usia] tahun";
	
	// cara 2
	$profil['nama'] = "Afaf";
	$profil['alamat'] = "Banjarnegara";
	$profil['usia'] = 5;
	
	echo "<br>Nama saya $profil[nama], saya berasal dari $profil[alamat], 
		usia saya $profil[usia] tahun";
?>
