<?php 
session_start();
if (isset($_SESSION["user"])) {
$user = $_SESSION["user"];
	if($_SESSION["submitted"] == true) {
		$_SESSION["users"][] = $user;
		$users = $_SESSION["users"];
		$_SESSION["submitted"] = false;
	}else {
		$users = $_SESSION["users"];
	}
?>

<table>
<?php
	for ($i=0; $i < count($users); $i++) { 
	?>
	<tr>
		<th align="left" valign="top">Nama</th>
		<td>&nbsp;</td>
		<td valign="top"><?php echo $users[$i]["nama"]; ?></td>
		<td rowspan="4">
			<img height="120px" src="<?php echo $users[$i]["image"]; ?>" alt="">
		</td>
	</tr>
	<tr>
		<th align="left" valign="top">Hobi</th>
		<td>&nbsp;</td>
		<td valign="top">
			<?php
				for($j=0; $j < count($users[$i]["hobi"]); $j++) {
			 		echo $users[$i]["hobi"][$j] . "<br>";
			 	} 	
			?>
		</td>
	<tr>
		<th align="left" valign="top">Genre Film</th>
		<td>&nbsp;</td>
		<td valign="top">
			<?php
				for($j=0; $j < count($users[$i]["genre"]); $j++) {
			 		echo $users[$i]["genre"][$j] . "<br>";
			 	} 	
			?>
		</td>
	</tr>
	<tr>
		<th align="left" valign="top">Tujuan Wisata</th>
		<td>&nbsp;</td>
		<td valign="top">
			<?php
				for($j=0; $j < count($users[$i]["wisata"]); $j++) {
			 		echo $users[$i]["wisata"][$j] . "<br>";
			 	} 	
			?>
		</td>
	</tr>
	<tr>
		<td colspan="4">------------------------------------------------------------------------------</td>
	</tr>
		<?php } ?>
	<tr>
		<td><a href="form.php">Tambah</a></td>
		<td><a href="delarray.php">Hapus</a></td>
	</tr>
</table>
<?php
}else {
	?>
	<table>
		<tr>
			<th align="left" valign="top">Nama</th>
			<td>&nbsp;</td>
			<td valign="top">-</td>
			<td rowspan="4">
				Gambar tidak ditemukan!
			</td>
		</tr>
		<tr>
			<th align="left" valign="top">Hobi</th>
			<td>&nbsp;</td>
			<td valign="top">
				-
			</td>
		<tr>
			<th align="left" valign="top">Genre Film</th>
			<td>&nbsp;</td>
			<td valign="top">
				-
			</td>
		</tr>
		<tr>
			<th align="left" valign="top">Tujuan Wisata</th>
			<td>&nbsp;</td>
			<td valign="top">
				-
			</td>
		</tr>
		<tr>
			<td colspan="4">------------------------------------------------------------------------------</td>
		</tr>
		<tr>
			<td><a href="form.php">Tambah</a></td>
		</tr>
	</table>
	<?php
}

?>