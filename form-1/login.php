<?php
session_start();

if(isset($_SESSION["username"])) {
	header("Location: login-proses.php");
}else {
	if (isset($_SESSION["pesan"])) {
		$pesan = $_SESSION["pesan"]; 
		session_destroy();	
	} else{
		$pesan = "";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
</head>
<body>
	<form action="login-proses.php" method="post">
		<table>
			<?php if(isset($_SESSION["pesan"])) : ?>
			<tr>
				<td><?php echo $pesan; ?></td>
			</tr>
			<?php endif; ?>
			<tr>
				<td>Username = admin , Password = 123</td>
			</tr>
			<tr>
				<td>Username</td>
			</tr>
			<tr>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
			</tr>
			<tr>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="login"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php } ?>