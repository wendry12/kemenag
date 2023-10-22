<?php 

include 'connect.php';

if (isset($_POST['update'])) {
	$no_porsi = $_POST ['no_porsi'];
$no_valid = $_POST['no_valid'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$pendidikan = $_POST['pendidikan'];
$pekerjaan = $_POST['pekerjaan'];
$nama_ayah = $_POST['nama_ayah'];
$tgl_daftar = $_POST['tgl_daftar'];
$kecamatan = $_POST['kecamatan'];
$bank = $_POST['bank'];

mysqli_query($koneksi, "UPDATE data_jan SET no_porsi ='$no_porsi', no_valid = '$no_valid' , nama = '$nama' , gender = '$gender' , pendidikan = '$pendidikan' , nama_ayah = '$nama_ayah' , pekerjaan = '$pekerjaan' , tgl_daftar = '$tgl_daftar' , kecamatan = '$kecamatan' , bank = '$bank'  WHERE no_porsi = '$no_porsi'");

header("location:tables.php?pesan=update");
}

?>
