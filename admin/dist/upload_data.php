<?php 

include 'connect.php';
$no_porsi = $_POST ['no_porsi'];
$no_valid = $_POST ['no_valid'];
$nama = $_POST['nama'];
$nama_ayah = $_POST ['nama_ayah'];
$kecamatan = $_POST['kecamatan'];
$bank = $_POST ['bank'];
$gender = $_POST ['gender'];
$pendidikan = $_POST ['pendidikan'];
$pekerjaan = $_POST ['pekerjaan'];

mysqli_query($koneksi, "INSERT INTO data_transaksi ((no_porsi ,no_valid, nama, nama_ayah, kecamatan , bank , gender, pendidikan, pekerjaan) VALUES ('$no_porsi', '$no_valid' , '$nama', '$nama_ayah', 'kecamatan' , '$bank' , '$gender' , '$pendidikan' , '$pekerjaan')");

header("location:tables.php?pesan=input")
 ?>

