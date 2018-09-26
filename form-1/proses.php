<?php
session_start();

if (isset($_POST["hobi"]) || isset($_POST["wisata"]) || isset($_POST["genre"])) {
	
	$dir = "uploads/";
	$nama_file = $_FILES["image"]["name"];
	$nama_file_tmp = $_FILES["image"]["tmp_name"];
	$nama_file_temp = explode(".", $_nama_file);
	$nama_file_baru = time() . '.' . end($nama_file_temp);
	$target_file = $dir . $nama_file_baru;


	if (move_uploaded_file($nama_file_tmp, $target_file)) {
		$_SESSION["submitted"] = true;
		$user = array(
			"nama" 		=> $_POST["nama"],
			"hobi" 		=> $_POST["hobi"],
			"genre" 	=> $_POST["genre"],
			"wisata" 	=> $_POST["wisata"],
			"image" 	=> $target_file
		);
		
		$_SESSION["user"] = $user;
		header("Location: tampil.php");
	}

}else {
	$_SESSION["error"] = "Semua kolom kosong harus diisi!";
	header("Location: form.php");
}
?>