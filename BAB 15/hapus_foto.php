<?php

require_once("koneksi.php");

if (isset($_GET['kode'])) $kode_barang = $_GET['kode'];
else{
	echo "ID Barang Tidak ditemukan! <a href='index.php'>Kembali</a>";
	exit();
}

$query = "SELECT * FROM barang WHERE kode = '{$kode_barang}'";

$result = mysqli_query($mysqli, $query);

foreach ($result as $barang) {
	$foto = $barang["foto"];
}

if (!is_null($foto) && !empty($foto)) {
	$remove = unlink($foto);

	if ($remove) {
		$query = "UPDATE barang SET foto = NULL WHERE kode = '{$kode_barang}'";
		$insert = mysqli_query($mysqli, $query);
	}
}

header("Location: edit.php?kode={$kode_barang}");

?>