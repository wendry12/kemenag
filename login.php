<?php

include"connect.php";
$user = $_POST ['username'];
$pass = $_POST ['password'];

$sql = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$user' and password='$pass' ");

if (mysqli_num_rows($sql)) {
    while ($row = mysqli_fetch_array($sql)) {
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['hak_akses'] = $row['hak_akses'];
        
        
        if ($row['hak_akses'] == "admin") {
            echo "<script>alert('Login Berhasil | Selamat Datang Admin');document.location='admin/dist/index.php'</script>";
        } elseif ($row['hak_akses'] == "kasi") {
            echo "<script>alert('Login Berhasil | Selamat Datang Kasi');document.location='kasi/dist/index.php'</script>";
        } else {
            echo '<script>href.location</script>';
            session_destroy();
        }
    }
}else{
    if (empty($username) && empty($password)) {
        echo "<script>alert('Maaf, Login Gagal, Password anda tidak sesuai!');document.location='index.php'</script>";   
    } else if (empty($username)) {
        header('location:index.php?error=Username Kosong!');
    } else if (empty($password)) {
        header('location:index.php?error=Password Kosong!');
    }
}
?>  