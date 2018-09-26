<?php 
session_start();

if(isset($_SESSION["username"]) || isset($_POST["username"])) {

	$_SESSION["username"] = isset($_SESSION["username"]) ? $_POST["username"] = $_SESSION["username"]:$_SESSION["username"] = $_POST["username"];
	$_SESSION["password"] = isset($_SESSION["password"]) ? $_POST["password"] = $_SESSION["password"]:$_SESSION["password"] = $_POST["password"];

	$user_login = array(
		"nama"	   => "Andi Habil Dwi Syaputra",
		"username" => "admin",
		"password" => 123,
		"no_telp"  => "081340282272"
	);

	if ($user_login["username"] == $_POST["username"] && $user_login["password"] == $_POST["password"]) {
		$_SESSION["username"] = $user_login["username"];
		$_SESSION["password"] = $user_login["password"];
		$_SESSION["user"] = $user_login;
		echo "<p style='font-size: 20px;text-align: center'>Selamat anda telah masuk " . $user_login["username"] . "</p>";
		echo "<p style='font-size: 20px;text-align: center'><a href='form.php'>klik link ini untuk melanjutkan</a></p>";
	}else {
		$_SESSION["pesan"] = "Username/Password yang anda masukkan salah!";
		header("Location: login.php");
	}
}
?>