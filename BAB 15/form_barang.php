<?php
include 'koneksi.php';

$mysqli = mysqli_query($mysqli, "SELECT max(kode) as kodeTerbesar FROM barang");
$data = mysqli_fetch_array($mysqli);
$kodeBarang = $data['kodeTerbesar'];

$urutan = (int) substr($kodeBarang, 3, 3);

$urutan++;

$huruf = "BRG";
$kodeBarang = $huruf . sprintf("%03s", $urutan);
?>


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
                <h2>Input Barang</h2>
                    <form method="post" action="simpan.php">
                    <div class="form-group">
				<label>Foto :</label>
				<input type="file" name="foto" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
			</div>			
                        <div class="form-group mb-2">
                            <label for="formGroupExampleInput">Kode Barang</label>
                            <input type="text" class="form-control" name="kode" required="required" value="<?php echo $kodeBarang ?>">
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
                            <div class="form-group mb-2">
                                <label for="formGroupExampleInput">Harga</label>
                                <input type="text" class="form-control" name="harga" required="required" placeholder="harga">
                            </div>
                            <div class="col-auto my-1">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                    <br>
                    <hr>
                    <br>

                </div>

            </div>

        </div>

    </div>