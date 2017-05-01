<script type="text/javascript" src="script/script_siswa.js"></script>

<?php
session_start();
if(empty($_SESSION['username']) OR empty($_SESSION['password']) OR $_SESSION['leveluser'] != "admin") {
	header('location: ../login.php');
}
//include library yang dibutuhkan
include "../../library/config.php";
include "../../library/function_view.php";
include "../../library/function_form.php";

//membuat judul, tombol tambah, tombol import dan tombol cetak kartu
create_title("list-all", "Manajemen Siswa");
create_button("success","plus-sign","Tambah","btn-add","form_add()");
create_button("primary","import","Import","btn-import","form_import()");
create_button("info","print","Cetak Kartu","btn-print","form_print()");

//membuat header dan footer tabel
create_table(array("NIS","Nama Siswa","Password","Kelas","Aksi"));

//Membuat form tambah dan edit data
open_form("modal_siswa","return save_data()");
	create_textbox("NIS","nis","text",4,"","required");
	create_textbox("Nama Siswa","nama","text",6,"","required");

	$qkelas = mysqli_query($mysqli, "SELECT * FROM kelas");
	$list = array();
	while($rk = mysqli_fetch_array($qkelas)) {
		$list[] = array($rk['id_kelas'],$rk['kelas']);
	}
	create_combobox("Kelas","kelas",$list,4,"","required");
close_form();

//Membuat form cetak kartu
open_form("modal_print","return print_data()");
	$qkelas = mysqli_query($mysqli, "SELECT * FROM kelas");
	$list = array();
	while($rk = mysqli_fetch_array($qkelas)) {
		$list[] = array($rk['id_kelas'], $rk['kelas']);
	}
	create_combobox("Kelas","kelas_print",$list,4,"","required");
close_form("print","Print");

//membuat form import
open_form("modal_import","return import_data()");
	create_textbox("Pilih File .xls","file","file",6,"","required");

	$qkelas = mysqli_query($mysqli, "SELECT * FROM kelas");
	$list = array();
	while($rk = mysqli_fetch_array($qkelas)) {
		$list[] = array($rk['id_kelas'], $rk['kelas']);
	}
	create_combobox("Kelas","kelas_import",$list,4,"","required");
close_form("import","Import");