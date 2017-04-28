<?php
session_start();
include "../../library/config.php";
include "../../library/function_view.php";

if($_GET['action'] == "table_data"){
	$query = mysqli_query($mysqli, "SELECT * FROM user WHERE level!='admin' ORDER BY id_user DESC");
	$data = array();
	$no = 1;
	while($r = mysqli_fetch_array($query)){
	   $row = array();
	   $row[] = $no;
	   $row[] = $r['nama'];
	   $row[] = $r['username'];
	   $row[] = $r['level'];
	   $row[] = create_action($r['id_user']);
	   $data[] = $row;
	   $no++;
	}
		
	$output = array("data" => $data);
	echo json_encode($output);
}