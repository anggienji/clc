<?php

	$nama=$_POST['fm_nama'];
	$email=$_POST['fm_email'];
	$pesan=$_POST['fm_pesan'];
	$tanggal=date('Y-m-d');

	$host="localhost";
	$usernameserver="root";
	$passwordserver="";
	$database="web";

	$koneksi=mysqli_connect($host,$usernameserver,$passwordserver,$database)or die("tidak bisa nyambung ke mysql");

	if (strlen($nama)==0) {
		echo "Nama belum diisi";
	}

	elseif (strlen($email)==0) {
		echo "Email belum diisi";
	}

	elseif (strlen($pesan)==0) {
		echo "Pesan belum diisi";
	}

	elseif ($koneksi) {
		$query="insert into bukutamu(nama,email,pesan,tanggal) values('$nama','$email','$pesan','$tanggal')
		 								";
		$result=mysqli_query($koneksi,$query);
		include "Tampil_bukutamu.php";
	}

	?>