<?php 
    include './proses/DataSiswaProses.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './plugins/css_bootstrap.php' ?>
    <title>Data Siswa</title>
</head>
<body>
    <div class="container mt-5" style="width: 30rem;">
    <form action="" method="get">
        <div class="container-fluid d-flex mb-3">
            <input type="text" class="form-control form-control-sm" placeholder="Cari Data" name="nis">
            <button class="btn btn-primary btn-sm ms-1" type="submit">Cari</button>
            <a class="btn btn-primary btn-sm ms-1" href="data_siswa.php">Reset</a>
        </div>
    </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($data as $siswa)
                    {
                        $id = $siswa['nis'];
                        $nama = $siswa['nama'];
                        echo <<<ROW
                        <tr>
                            <th scope="row">{$id}</th>
                            <td>{$nama}</td>
                            <td>
                                <div class="container-fluid d-flex">
                                    <button class="btn btn-warning btn-sm">Update</button>
                                    <form action="" method="post">
                                        <button class="btn ms-2 btn-danger btn-sm" value="{$id}" name="delete" type="submit">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        ROW;
                    }
                ?>
            </tbody>
        </table>
    </div>
    <?php include './plugins/js_bootstrap.php' ?>
</body>
</html>