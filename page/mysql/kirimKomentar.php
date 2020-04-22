<?php include '../mysql/connectMYSQL.php'; ?>
<?php include '../mysql/getKomentar.php'; ?>
<?php 
	$namakomen = $_POST['namakomen'];
	$komen = $_POST['komentar'];
	var_dump($namakomen);
	var_dump($komen);
	$sql = "INSERT INTO komentar (nama, komentar)
	VALUES ('$namakomen','$komen')";
	$conn->query($sql);
 ?>
