<?php
	echo "Nama: ".$_POST['nama'];
	echo "<br> Alamat: ".$_POST['alamat'];
	echo "<br> <a href='16_get_post_form.php?nama=$_POST[nama]&alamat=$_POST[alamat]'> Edit </a>";
?>
