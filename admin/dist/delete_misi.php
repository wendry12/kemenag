<?php
include "connect.php";

mysqli_query($koneksi,"DELETE FROM misi WHERE id_misi = '".$_GET['id_misi']."'");
echo "<script language=javascript>parent.location.href='tables.php';</script>";
?>