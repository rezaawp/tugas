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
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($data as $siswa)
                    {
                        $id = $siswa['id'];
                        $nama = $siswa['nama'];
                        echo <<<ROW
                        <tr>
                            <th scope="row">{$id}</th>
                            <td>{$nama}</td>
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