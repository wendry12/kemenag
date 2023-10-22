<?php 
	
	define('HOST', 'localhost')
	define('PASS', '')
	define('USER', 'localhost')
	define('DB', 'si_akademik')

	$koneksi = mysqli_connect(HOST, USER, PASS, DB);
	if(!$koneksi){
		echo "Your Database is not Working";
		
	}else{
		echo "Database tidak konek";
	}
 ?>