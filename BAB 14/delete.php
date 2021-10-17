<?php

    include "koneksi.php";

    if (isset($_GET['kode'])) {
        $kode=htmlspecialchars($_GET["kode"]);

        $query="delete from barang where kode='$kode' ";
        $barang=mysqli_query($mysqli,$query);

        //Kondisi apakah berhasil atau tidak
            if ($barang) {
                header("Location:index.php");

            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

            }
        }
?>