<form action="16_get_post_tampil.php" method="post">
	Nama: <input type="text" name="nama" 
			value="<?php if(isset($_GET['nama'])) echo $_GET['nama'];  ?>"> <br>
	Alamat: <input type="text" name="alamat" 
			value="<?php if(isset($_GET['alamat'])) echo $_GET['alamat']; ?>"> <br>
	<input type="submit" value="Simpan">
</form>
