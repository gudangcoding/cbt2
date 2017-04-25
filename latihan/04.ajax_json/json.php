<?php

$mysqli = mysqli_connect("localhost","root","","dbcbt");

$siswa = array();
$query = mysqli_query($mysqli, "SELECT * FROM siswa");

while($data = mysqli_fetch_array($query)){
	$siswa[] = $data;
}
echo json_encode($siswa);