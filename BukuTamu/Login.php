<?php  
session_start();

if (isset($_SESSION['username']))
{
	header('Location: indexBukutamu.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
</head>
<body>
	
	<form name="login" id="login" action="PeriksaLogin.php" method="post">
		<table>
		Username: <input type="text" name="userdariform"> <br>
		Password: <input type="text" name="passdariform"><br>
		<input type="submit" value="OK">
	</form>

</body>
</html>