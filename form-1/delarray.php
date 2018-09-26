<?php 
session_start();

unset($_SESSION["users"]);
unset($_SESSION["user"]);
header("Location: tampil.php")

?>