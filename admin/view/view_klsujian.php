<script type="text/javascript" src="script/script_klsujian.js"></script>
<?php
if(empty($_SESSION['username']) OR empty($_SESSION['password']) OR $_SESSION['leveluser'] != "admin"){
	header('location : ../login.php');
}
//include library yang diperlukan
include "../../library/config.php";
include "../../library/function_view.php";
include "../../library/function_form.php";

//membuat judul
create_title("sort-by-attribute","Manajemen Kelas Per Ujian");

//membuat header dan footer tabel
create_table(array("Judul Ujian","Kelas","Aksi"));

//membuat form edit data
open_form("modal_klsujian","return save_data()");
	$qkelas = mysqli_query($mysqli, "SELECT * FROM kelas");
	$list = array();
	while($rk = mysqli_fetch_array($qkelas)) {
		$list[] = array($rk['id_kelas'], $rk['kelas']);
	}
	create_checkbox("Kelas","kelas",$list);
close_form();