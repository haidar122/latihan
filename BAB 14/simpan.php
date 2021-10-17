<?php 

include 'koneksi.php';

$kode_barang = $_POST['kode'];
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

mysqli_query($mysqli,"INSERT INTO barang VALUES ('$kode_barang', '$nama', '$jumlah', '$harga')")or die(mysqli_error($mysqli));

header("location:index.php");


?>