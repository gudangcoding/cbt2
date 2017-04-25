<?php
$nama_file = $_FILES['gambar']['name'];
$lokasi_file = $_FILES['gambar']['tmp_name'];

move_uploaded_file($lokasi_file, "gambar/".$nama_file);

echo "gambar/".$nama_file;