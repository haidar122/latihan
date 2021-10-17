<?php 

include 'koneksi.php';

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

//mysqli_query($mysqli,"INSERT INTO barang VALUES ('$kode', '$nama', '$jumlah', '$harga')")or die(mysqli_error($mysqli));
$files = $_FILES['foto'];
$path = "file/";

if (!empty($files["nama"])) {
	$filepath = $path . $files["nama"];
	$upload = move_uploaded_file($files["tmp_nama"], $filepath);
} else {
	$filepath = "";
	$upload = false;
}

// Menangani Error saat Upload
if ($upload != true && $filepath != "") {
	exit("Gagal Mengupload File. <a href='index.php'>Kembali</a>");
}


if ($error == 1) {
	echo "Terjadi kesalahan dalam proses input data";
	exit();
}

$query = "INSERT INTO barang (kode, nama_barang, jumlah, harga, foto)
		VALUES('{$kode}', '{$nama}','{$jumlah}','{$harga}', '{$filepath}')";
$insert = mysqli_query($mysqli, $query);

if ($insert == false) {
	echo "Error dalam menambahkan data. <a href='index.php'>Kembali</a>";
}else {
	header("Location: index.php");
}


?>