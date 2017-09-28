<?php

$host="localhost";
	$usernameserver="root";
	$passwordserver="";
	$database="web";
	
$koneksi = mysqli_connect($host,$usernameserver,$passwordserver,$database) or die('Error while establishing database connection');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Buku Tamu</title>
</head>
<body>
	<form name="form1" method="post" action="Simpan_bukutamu.php">
	<table>
		<tr>
			<td colspan="2">Form BKU TAMU</td>
		</tr>

		<tr>
			<td>Nama</td>
			<td><input type="text" name="fm_nama" id="fm_nama"></td>	
		</tr>

		<tr>
			<td>Email</td>
			<td><input type="text" name="fm_email" id="fm_email"></td>
		</tr>
			
		<tr>
			<td>Pesan</td>
			<td><input type="text" name="fm_pesan" id="fm_pesan"></td>	
		</tr>

		<tr>
			<td><input type="submit" name="submit" value="simpan"></td>
		</tr>
	</table>
	</form>
</body>
</html>