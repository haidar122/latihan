<?php

require_once("koneksi.php");

$error = 0;

if (isset($_POST['email']) && isset($_POST['password'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
}else{
	$error = 1;
}
if ($error == 1) {
	echo "Terjadi kesalahan dalam proses input data";
	exit();
}

$password = hash("sha256", $password);

$query = "SELECT * FROM petugas WHERE email = '{$email}'";
$result = mysqli_query($mysqli, $query);

$data = mysqli_fetch_assoc($result);

if (is_null($data)) {
	echo "Email tidak terdaftar. <a href='index.php'>Kembali</a>";
	exit();
}elseif ($data[password] != $password) {
	echo "Password Salah! <a href='index.php'>Kembali</a>";
	exit();
} else {

	session_start();

	$_SESSION['status'] = true;
	$_SESSION['name'] = $data["nama"];
	$_SESSION['email'] = $data["email"];

	header("Location: index.php");
}

?>