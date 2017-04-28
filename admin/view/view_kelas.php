<script type="text/javascript" src="script/script_kelas.js"></script>

<?php
session_start();
if(empty($_SESSION['username']) OR empty($_SESSION['password']) OR $_SESSION['leveluser'] != "admin") {
	header('location: ../login.php');
}

//include library yang diperlukan
include "../../library/function_view.php";
include "../../library/function_form.php";

//membuat judul dan tombol tambah
create_title("signal","Manajemen Kelas");
create_button("success","plus-sign","Tambah","btn-add","form_add()");

//membuat header dan footer tabel
create_table(array("Nama Kelas","Aksi"));

//membuat form tambah dan dan edit data
open_form("modal_kelas","return save_data()");
	create_textbox("Nama Kelas","kelas","text",4,"","required");
close_form();