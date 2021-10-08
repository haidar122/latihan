<?php
$artikel = array(
    (object) array(
        "judul" => "Perkembangan pemrograman android di indoneia",
        "text" => "Bersaing",
        "image" => "https://miro.medium.com/max/800/0*vXa77JsDDpgf2kN0"
    ),
    (object) array(
        "judul" => "Bahasa pemrograman mobile kotlin makin diminati di dunia",
        "text" => "keren",
        "image" => "https://jaxenter.com/wp-content/uploads/2019/09/image1-2.jpg"
    ),
    (object) array(
        "judul" => "Persaingan java dan kotlin",
        "text" => "luar biasa",
        "image" => "https://miro.medium.com/max/689/1*wSxeE-1tYe0e0uFJ1hJQRg.jpeg"
    ),
    (object) array(
        "judul" => "Alibaba Prediksi 10 Tren Teknologi 2021",
        "text" => "Alibaba Group",
        "image" => "https://asset-a.grid.id/crop/0x0:0x0/x/photo/2021/01/07/4099845356.jpeg"
    ),
    (object) array(
        "judul" => "Windows 11 Beta Sudah Tersedia, Begini Cara Memasangnya di PC dan Laptop",
        "text" => "Coba aja",
        "image" => "https://asset.kompas.com/crops/tu0CD7nUYUhxP4y9yxxr0C53vms=/92x61:828x552/750x500/data/photo/2021/06/25/60d532267212b.jpg"
    ),
    (object) array(
        "judul" => "5 Tren Teknologi Tahun 2021 yang Harus Kamu Ketahui",
        "text" => "Simak",
        "image" => "https://i0.wp.com/iteba.ac.id/wp-content/uploads/2021/01/ITEBA-prediksi-teknologi.png?resize=1000%2C480&ssl=1"
    )
);
$carousel = array(
    (object) array(
        "judul" => "Framework Laravel",
        "text" => "yuk belajar",
        "image" => "https://adinata.id/wp-content/uploads/2020/02/Laravel-Development.jpg"
    ),
    (object) array(
        "judul" => "Framework CI",
        "text" => "Yuk belajar",
        "image" => "https://1.bp.blogspot.com/-gWQrFUGL3t4/XsEKIm0JwjI/AAAAAAAAA6U/cxYWSzBh8iYnTMJh8-wHp7DQVDpi1HLUACPcBGAYYCw/s1600/Codeighneiter.jpg"
    ),
    (object) array(
        "judul" => "Bootstrap",
        "text" => "Yuk belajar",
        "image" => "https://blog.codedthemes.com/wp-content/uploads/2020/04/bootstrap-5.jpg"
    )
);


?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <!-- Memanggil Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Navbar-brand -->
            <a href="#" class="navbar-brand">
                <img src="http://jongkreatif.id/_nuxt/img/logo.825423d.png" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Collapse -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.html" class="nav-link">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profile
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="#" class="dropdown-item">Login</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a href="#" class="dropdown-item">Register</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Carousel Indicator -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <!-- Carousel Indicator -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!-- Carousel Inner -->
        <div class="carousel-inner">
            <?php
            $i = 0;
            foreach ($carousel as $slide) {
                if ($i == 0) {
                    $i++; ?>
                    <div class="carousel-item active">
                    <?php } else { ?>
                        <div class="carousel-item">
                        <?php } ?>
                        <img src="<?= $slide->image ?>" class="d-block w-100" alt="jalan bareng kawan">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><?= $slide->judul ?></h5>
                            <p><?= $slide->text ?></p>
                        </div>
                        </div> <!-- Penutup carousel-item -->
                    <?php } ?>
                    </div>
        </div>
        <!-- Carousel Navigation -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div id="features" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col col-4">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="icon mb-4">
                                <i class="bi bi-alarm"></i>
                            </div>
                            <h5 class="card-title">Ketelitian dan Kedisiplinan</h5>
                            <p class="card-text">Programmer pemula harus teliti dan disiplin</p>
                        </div>
                    </div>
                </div>
                <div class="col col-4">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="icon mb-4">
                                <i class="bi bi-book"></i>
                            </div>
                            <h5 class="card-title">Belajar Jong Koding</h5>
                            <p class="card-text">Produktif tiap saat</p>
                        </div>
                    </div>
                </div>
                <div class="col col-4">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="icon mb-4">
                                <i class="bi bi-cash"></i>
                            </div>
                            <h5 class="card-title">Olah kasus dan kode</h5>
                            <p class="card-text">Pasti Bisa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="blog" class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($artikel as $data) { ?>

                    <div class="col col-6">
                        <div class="card mb-3">
                            <img src="<?= $data->image ?>" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"><?= $data->judul ?></h5>
                                <p class="card-text"><?= $data->text ?>.</p>
                                <p class="card-text"><small class="text-muted">Last Updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>