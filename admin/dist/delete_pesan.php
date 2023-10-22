<?php
include "connect.php";

mysqli_query($koneksi,"DELETE FROM kontak WHERE id = '".$_GET['id']."'");
echo "<script language=javascript>parent.location.href='index.php';</script>";
?>