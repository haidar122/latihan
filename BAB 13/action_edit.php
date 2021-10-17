<?php

require_once("koneksi.php");

if (isset($_POST['kode'])) {
	$kode_barang = $_POST['kode'];
}else{
	echo "ID Barang Tidak ditemukan! <a href='index.php'>Kembali</a>";
	exit();
}

$query = "SELECT * FROM barang WHERE kode_barang = '{$kode}'";
$result = mysqli_query($koneksi, $query);

if (isset($_POST['kode'])) $kode_barang = $_POST['kode'];

if (isset($_POST['nama'])) $nama = $_POST['nama'];

if (isset($_POST['jumlah'])) $jumlah = $_POST['jumlah'];

if (isset($_POST['harga'])) $harga = $_POST['harga'];

$query = "UPDATE barang SET 
		nama_barang = '{$nama}',
        jumlah = '{$jumlah}',
		harga = '{$harga}'
	WHERE kode = '{$kode_barang}' ";

$insert = mysqli_query($koneksi, $query);

if ($insert == false) {
	echo "Error dalam mengubah data. <a href='index.php'>Kembali</a>";
}else{
	header("Location: index.php");
}

?>