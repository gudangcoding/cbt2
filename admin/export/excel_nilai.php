<?php
include "../../library/config.php";

$rujian = mysqli_fetch_array(mysqli_query($mysqli, "SELECT * FROM ujian WHERE id_ujian='$_GET[ujian]'"));
$rkelas = mysqli_fetch_array(mysqli_query($mysqli, "SELECT * FROM kelas WHERE id_kelas='$_GET[kelas]'"));

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Nilai $rujian[nama_mapel] Kelas $rkelas[kelas].xls");

session_start();

if(empty($_SESSION['username']) OR empty($_SESSION['password']) OR $_SESSION['leveluser'] != "guru") {
	header('location: ../login.php');
}

echo '<table>
		<tr>
			<td>No</td>
			<td>NIS</td>
			<td>Nama Siswa</td>
			<td>Jml. Benar</td>
			<td>Nilai</td>
		</tr>';
$query = mysqli_query($mysqli, "SELECT * FROM siswa WHERE id_kelas='$_GET[kelas]'");
$no = 1;

while($r = mysqli_fetch_array($query)) {
	$n = mysqli_fetch_array(mysqli_query($mysqli, "SELECT * FROM nilai WHERE nis='$r[nis]' AND id_ujian='$_GET[ujian]'"));
	echo '<tr>
			<td>'.$no.'</td>
			<td>'.$r['nis'].'</td>
			<td>'.$r['nama'].'</td>
			<td>'.$n['jml_benar'].'</td>
			<td>'.$n['nilai'].'</td>
		</tr>';
	$no++;
}
echo '</table>';