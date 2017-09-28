<?php 
session_start();

if (isset($_SESSION['username']))
{
	header('Location: indexBukutamu.php');
}


	$host="localhost";
	$usernameserver="root";
	$passwordserver="";
	$database="web";

	$koneksi=mysqli_connect($host,$usernameserver,$passwordserver,$database) or die("tidak bisa nyambung ke mysql");

	$userdariform=$_POST['userdariform'];
	$passdariform=$_POST['passdariform'];

	if (strlen($userdariform)==0) {
		echo "username tidak ada";
	}

	else if (strlen($passdariform)==0) {
		echo "password tidak ada";
	}

	else if ($koneksi) {
		$query="select username, password from admin where username='".$userdariform."'AND password='".$passdariform."'";
		$result=mysqli_query($koneksi,$query);
		$rowset=mysqli_fetch_row($result);

		if ($rowset) {
			$_SESSION['username']=$rowset['username'];
			header('Location: indexBukutamu.php');
			//echo "Selamat Datang";
		}

		else
		{
			echo 'Login gagal. <a href="Login.php">Kembali</a>';
		}
	}

	?>