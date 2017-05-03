<?php
session_start();

include "../../library/config.php";
include "../../library/function_view.php";

//menampilkan data ke table
if($_GET['action'] == "table_data") {
	$query = mysqli_query($mysqli, "SELECT * FROM ujian ORDER BY id_user");
	$data = array();

	$no = 1;

	while($r = mysqli_fetch_array($query)) {
		$qkelas = mysqli_query($mysqli, "SELECT * FROM kelas t1, kelas_ujian t2 WHERE t1.id_kelas = t2.id_kelas AND t2.id_ujian = '$r[id_ujian]'");
		$label = "";
		while($rk = mysqli_fetch_array($qkelas)) {
			$label .= '<span class="label label-info">'.$rk['kelas'].'</span>';
		}
		$row = array();
	      $row[] = $no;
	      $row[] = $r['judul'];
	      $row[] = $label;
	      $row[] = create_action($r['id_ujian'], true, false);
	      $data[] = $row;
	      $no++;
	}
	$output = array("data" => $data);

	echo json_encode($output);
}

//Mengedit data ke form edit
elseif($_GET['action'] == "form_data") {
	$query = mysqli_query($mysqli, "SELECT * FROM kelas_ujian WHERE id_ujian='$_GET[id]'");

	$id_kelas = array();

	while($row = mysqli_fetch_array($query)) {
		$id_kelas[] = $row['id_kelas'];
	}
	$data = array();
	$data['kelas'] = implode(",",$id_kelas);

	echo json_encode($data);
}

//Mengedit data pada database
elseif($_GET['action'] == "update") {
	mysqli_query($mysqli, "DELETE FROM kelas_ujian WHERE id_ujian='$_POST[id]'");
	$kelas = $_POST['kelas'];

	foreach($kelas as $kls) {
		mysqli_query($mysqli, "INSERT INTO kelas_ujian SET id_ujian='$_POST[id]', id_kelas='$kls'");
	}
}