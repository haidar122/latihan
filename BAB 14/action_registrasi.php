<?php

require_once("koneksi.php");

$error = 0;
if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['password']) && isset($_POST['re-password'])) {
	$email = $_POST['email'];
	$name = $_POST['name'];
	$password = $_POST['password'];
	$repassword = $_POST['re-password'];
}else{
	$error = 1;
}

if ($password != $repassword) {
	echo "Password tidak sama. <a href='index.php'>Kembali</a>";
	exit();
}else{
	$password = hash("sha256", $password);
}

if ($error == 1) {
	echo "Terjadi kesalahan dalam proses input data";
	exit();
}

$query = "INSERT INTO petugas (email, nama, password)
		VALUES('{$email}', '{$name}', '{$password}')";
$insert = mysqli_query($mysqli, $query);

if ($insert == false) {
	echo "Error dalam menambahkan data. <a href='index.php'>Kembali</a>";
}else {
	header("Location: index.php");
}


?>