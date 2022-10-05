<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <?php
    $data = [
        [
            'gambar'        => 'assets/img/ABSENSI.png',
            'title'         => 'Aplikasi Absensi',
            'deskripsi'     => 'Aplikasi absensi ini adalah berbasis website'
        ],
        [
            'gambar'        => 'assets/img/MARKETPLACE.png',
            'title'         => 'Aplikasi Marketplace',
            'deskripsi'     => 'Aplikasi Marketplace ini dibuat menggunakan laravel'
        ],
        [
            'gambar'        => 'assets/img/KUIS.png',
            'title'         => 'Aplikasi Kuis',
            'deskripsi'     => 'Aplikasi Kuis ini adalah berbasis website dan dibuat menggunakan laravel'
        ],
    ]
    ?>

    <nav class="navbar navbar-expand-lg biru-tua">
        <div class="container-fluid">
            <a class="navbar-brand text-white fw-bold" href="#">Projects</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-white" href="#">Action</a></li>
                            <li><a class="dropdown-item text-white" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled text-white">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-4">
            <?php foreach ($data as $product) { ?>
                <div class="col-md-4 mb-2 d-flex justify-content-center">
                    <div class="card" style="width: 18rem; height: 23rem;">
                        <img src="<?= $product['gambar'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $product['title'] ?></h5>
                            <p class="card-text"><?= $product['deskripsi'] ?></p>
                        </div>
                        <div class="cortainer p-3 d-flex justify-content-end">
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>