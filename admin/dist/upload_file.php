<?php 
    include "connect.php";
    if($_POST['upload']){
        $no_porsi  = $_POST['no_porsi'];
        $ekstensi_diperbolehkan = array('pdf','docx');
        $nama   = $_FILES['file']['name'];
        $x      = explode('.', $nama);
        $ekstensi   = strtolower(end($x));
        $ukuran     = $_FILES['file']['size'];
        $file_tmp   = $_FILES['file']['tmp_name']; 
     
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 10000000){ 
                move_uploaded_file($file_tmp, 'file_scan/'.$nama);
                $query  = mysqli_query( $koneksi, "INSERT INTO file_scan VALUES(NULL, '$no_porsi', '$nama')");
                if($query){
                    header('location:file_scan.php');
                }
                else{
                    echo '<center>FILE GAGAL DI UPLOAD!</center>';
                    echo '<center><a href="insert_file.php">Kembali</a></center>';
                }
            }
            else{
                echo '<center>UKURAN FILE TERLALU BESAR!</center>';
                echo '<center><a href="insert_file.php">Kembali</a></center>';
            }
        }
        else{
            echo '<center>EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN!</center>';
            echo '<center><a href="insert_file.php">Kembali</a></center>';
        }
    }
    ?> 