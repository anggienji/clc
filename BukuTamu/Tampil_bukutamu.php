<!DOCTYPE html>
<html>
<head>
	<title>FORM BUKU TAMU</title>
</head>
<body>
	<table>
		<tr>
			<td colspan="2">Daftar pengisian buku tamu</td>
		</tr>

		<?php
		$host="localhost";
		$usernameserver="root";
		$passwordserver="";
		$database="web";

		$koneksi=mysqli_connect($host,$usernameserver,$passwordserver,$database)or die("tidak bisa nyambung ke mysql");

		$query="select *from bukutamu";
		$result=mysqli_query($koneksi,$query);

		if ($result)
		 {
			while ($hasil = mysqli_fetch_array($result)) 
			{
				extract($hasil);	
		?>

		<tr>
			<td>Nama</td>
			<td><?php echo "$hasil[nama]";?></td>
		</tr>

		<tr>
			<td>Email</td>
			<td><?php echo "$hasil[email]";?></td>
		</tr>

		<tr>
			<td>Pesan</td>
			<td><?php echo "$hasil[pesan]";?></td>
		</tr>

		<tr>
			<td>Tanggal</td>
			<td><?php echo "$hasil[tanggal]";?></td>
		</tr>

<?php }} ?>
	</table>
</body>
</html>