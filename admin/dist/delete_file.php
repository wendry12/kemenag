<?php
include "connect.php";

mysqli_query($koneksi,"DELETE FROM file_scan WHERE id = '".$_GET['id']."'");
echo "<script language=javascript>parent.location.href='tables.php';</script>";
?>