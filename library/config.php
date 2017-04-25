<?php
//Membuat variabel, ubah sesuai dengan nama host dan database pada hosting
$host = "localhost";
$user = "root";
$pass = "";
$db = "dbcbt2";

//menggunakan objek mysqli untuk membuat koneksi dan menyimpan dalam variabel $mysqli
$mysqli = new mysqli($host, $user, $pass, $db);

//membuat variabel yang menyimpan url website dan folder website
$url_website = "http://localhost/cbt2";
$folder_website = "/cbt2";

//menentukan timezone
date_default_timezone_set('Asia/Jakarta');