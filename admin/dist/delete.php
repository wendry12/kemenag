<?php
include "connect.php";

mysqli_query($koneksi,"DELETE FROM data_jan WHERE no_porsi = '".$_GET['no_porsi']."'");
echo "<script language=javascript>parent.location.href='tables.php';</script>";
?>