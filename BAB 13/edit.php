<!DOCTYPE html>
<html>

<head>
    <title>Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body style="font-family:arial">
    <div id="form" class="pt-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col col-8 p-4 bg-light">
                    <?php

                    //Include file koneksi, untuk koneksikan ke database
                    include "koneksi.php";
                    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
                    function input($b)
                    {
                        $b = trim($b);
                        $b = stripslashes($b);
                        $b = htmlspecialchars($b);
                        return $b;
                    }

                    //Cek apakah ada kiriman form dari method post
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                        $kode = htmlspecialchars($_POST["kode"]);
                        $nama = input($_POST["nama"]);
                        $jumlah = input($_POST["jumlah"]);
                        $harga = input($_POST["harga"]);

                        //Query update data pada tabel anggota
                        $query = "update barang set
                        kode='$kode',
                        nama='$nama',
                        jumlah='$jumlah',
                        harga='$harga',
                        where kode=$kode";

                        //Mengeksekusi atau menjalankan query diatas
                        $barang = mysqli_query($koneksi, $query);

                        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
                        if ($barang) {
                            header("Location:index.php");
                        } else {
                            echo "<div class='alert alert-danger'> Data Gagal diupdate.</div>";
                        }
                    }

                    ?>

                    <h2>Edit Barang</h2>
                    <form method="post" action="simpan.php">
                        <div class="form-group mb-2">
                            <label for="formGroupExampleInput">Kode Barang</label>
                            <input type="text" class="form-control" name="kode" required="required">
                        </div>
                        <div class="form-group mb-2">
                            <label for="formGroupExampleInput2">Nama Barang</label>
                            <input type="text" class="form-control" name="nama" required="required" placeholder="Nama">
                        </div>
                        <div class="form-group mb-2">
                            <label for="exampleFormControlSelect1">Jumlah</label>
                            <select class="form-control" name="jumlah" required="required">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label for="formGroupExampleInput">Harga</label>
                            <input type="text" class="form-control" name="harga" required="required" placeholder="harga">
                        </div>
                        <div class="col-auto my-1">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                    <br>
                    <hr>
                    <br>

                </div>

            </div>

        </div>

    </div>