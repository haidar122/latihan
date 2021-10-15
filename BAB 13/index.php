<?php
include 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT max(kode) as kodeTerbesar FROM barang");
$data = mysqli_fetch_array($query);
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
    <h2>Daftar Barang</h2>
    <table style="width:100%" class="table1">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th colspan='2'>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $barang = mysqli_query($koneksi, "SELECT * FROM barang");
            $no = 1;
            while ($b = mysqli_fetch_array($barang)) {
            ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $b['kode']; ?></td>
                    <td><?php echo $b['nama_barang']; ?></td>
                    <td><?php echo $b['jumlah']; ?></td>
                    <td><?php echo "Rp. " . number_format($b['harga']) . " ,-"; ?></td>
                <td>
                    <a href="edit.php?kode=<?php echo htmlspecialchars($b['kode']); ?>" class="btn btn-warning" role="button">Edit</a>
                    <a href="delete.php?kode=<?php echo $b['kode']; ?>" class="btn btn-danger" role="button">Delete</a>
                </td>
                </tr>
            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>
</body>

</html>