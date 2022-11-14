<?php
include './proses/DataSiswaProses.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <?php include './plugins/css_bootstrap.php' ?>
</head>

<body>
    <div class="container mt-5" style="width: 30rem;">
        <form action="" method="post">
            <input type="text" class="form-control form-control-sm mb-2" placeholder="Nis" name="nis">
            <input type="text" class="form-control form-control-sm mb-2" placeholder="Nama" name="nama">
            <input type="text" class="form-control form-control-sm mb-2" placeholder="Gambar" name="gambar">
            <button class="btn btn-primary btn-sm ms-1" type="submit" name="tambah">Tambah</button>
        </form>
    </div>
    <?php include './plugins/js_bootstrap.php' ?>
</body>

</html>