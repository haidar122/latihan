<!DOCTYPE html>
<html>

<head>
    <title>Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
    <h2><a href="https://maulanahaidar122.blogspot.com/p/about.html">Latihan Jong Koding - Programmer Pemula</a></h2>

    <style>
        .table1 {
            font-family: sans-serif;
            color: #444;
            border-collapse: collapse;
            width: 50%;
            border: 1px solid #f2f5f7;
        }

        .table1 tr th {
            background: #35A9DB;
            color: #fff;
            font-weight: normal;
        }

        .table1,
        th,
        td {
            padding: 8px 20px;
            text-align: left;
        }

        .table1 tr:hover {
            background-color: #f5f5f5;
        }

        .table1 tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>

    <body style="font-family:arial">

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

        <form method="post" action="simpan.php">
            <div class="form-group">
                <label for="formGroupExampleInput">Kode Barang</label>
                <input type="text" class="form-control" name="kode" required="required" value="<?php echo $kodeBarang ?>">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Nama Barang</label>
                <input type="text" class="form-control" name="nama" required="required" placeholder="Nama">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Jumlah</label>
                <select class="form-control" name="jumlah" required="required">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                <div class="form-group">
                    <label for="formGroupExampleInput">Harga</label>
                    <input type="text" class="form-control" name="harga" required="required" placeholder="harga">
                </div>
                <div class="col-auto my-1">
                    <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

        <br>
        <hr>
        <br>

        <table style="width:100%" class="table1">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $barang = mysqli_query($koneksi, "SELECT * FROM barang");
                while ($b = mysqli_fetch_array($barang)) {
                ?>
                    <tr>
                        <td><?php echo $b['kode']; ?></td>
                        <td><?php echo $b['nama_barang']; ?></td>
                        <td><?php echo $b['jumlah']; ?></td>
                        <td><?php echo "Rp. " . number_format($b['harga']) . " ,-"; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </body>

</html>