<?php
session_start();

if(isset($_SESSION["username"])) {
	if (isset($_SESSION["error"])) {
		$error = $_SESSION["error"];
		$_SESSION["error"] = "";
	} else{
		$error = "";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Form</title>
</head>
<body>
	<form action="proses.php" method="post" enctype="multipart/form-data">
		<table align="center" style="border-spacing: 0 5px;">
			<?php if(isset($_SESSION["error"])) : ?>
			<tr>
				<td><?php echo $error; ?></td>
			</tr>
			<?php endif; ?>
			<tr>
				<th align="left">Nama</th>
			</tr>
			<tr>
				<td><input type="text" style="width: 100%" name="nama"></td>
			</tr>
			<tr>
				<th align="left">Hobbi yang digemari</th>
			</tr>
			<tr valign="top">
				<td>
					<input type="checkbox" name="hobi[]" value="Olahraga">&nbsp;Olahraga<br>
					<input type="checkbox" name="hobi[]" value="Seni">&nbsp;Seni<br>
					<input type="checkbox" name="hobi[]" value="Music">&nbsp;Music<br>
					<input type="checkbox" name="hobi[]" value="Menggambar">&nbsp;Menggambar<br>
					<input type="checkbox" name="hobi[]" value="Coding">&nbsp;Coding
				</td>
			</tr>
			<tr>
				<th align="left">Genre film favorit</th>
			</tr>
			<tr valign="top">
				<td>
					<input type="checkbox" name="genre[]" value="Horror">&nbsp;Horror<br>
					<input type="checkbox" name="genre[]" value="Action">&nbsp;Action<br>
					<input type="checkbox" name="genre[]" value="Thriller">&nbsp;Thriller<br>
					<input type="checkbox" name="genre[]" value="Animasi">&nbsp;Animasi<br>
					<input type="checkbox" name="genre[]" value="Komedi">&nbsp;Komedi
				</td>
			</tr>
			<tr>
				<th align="left">Tujuan travelling selanjutnya</th>
			</tr>
			<tr valign="top">
				<td>
					<input type="checkbox" name="wisata[]" value="Bali">&nbsp;Bali<br>
					<input type="checkbox" name="wisata[]" value="Raja Ampat">&nbsp;Raja Ampat<br>
					<input type="checkbox" name="wisata[]" value="Pulau Derawan">&nbsp;Pulau Derawan<br>
					<input type="checkbox" name="wisata[]" value="Labuan Bajo">&nbsp;Labuan Bajo<br>
					<input type="checkbox" name="wisata[]" value="Bangka Belitung">&nbsp;Bangka Belitung
				</td>
			</tr>
			<tr>
				<th align="left">Foto anda</th>
			</tr>
			<tr>
				<td><input type="file" name="image" id="image"></td>
			</tr>
			<tr>
				<td align="right"><input type="submit" value="Submit" name="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
} else {
	header("Location: login.php");
}
?>