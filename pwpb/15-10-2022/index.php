<?php

include './database/DB.php';

$siswa = new DB('peserta');

$dataSiswa = $siswa->all();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <?php include './bootstrap/css.php' ?>
</head>

<body>
    <div class="container py-3">

        <a href="./create.php" class="btn btn-primary mb-2">TAMBAH DATA</a>

        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Peserta</th>
                    <th scope="col">Makanan Favorit</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataSiswa as $item) : ?>
                    <tr>
                        <th scope="row"><?= $item['id'] ?></th>
                        <td><?= $item['nama'] ?></td>
                        <td><?= $item['makanan_favorit'] ?></td>
                        <td class="d-flex gap-2">
                            <form action="./proses/delete.php" method="post">
                                <button class="btn btn-danger" type="submit" value="<?= $item['id'] ?>" name="id">HAPUS</button>
                            </form>
                            <a href="" class="btn btn-warning">EDIT</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php include './bootstrap/js.php' ?>
</body>

</html>