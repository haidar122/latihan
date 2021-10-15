<?php 

include 'koneksi.php';

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

mysqli_query($koneksi,"INSERT INTO barang VALUES ('$kode', '$nama', '$jumlah', '$harga')")or die(mysqli_error($koneksi));

header("location:index.php");


?>