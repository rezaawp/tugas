<?php
include '../koneksi-database/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Siswa</title>
</head>

<body>
    <form action="proses_tambah.php" method="post">
        <div>
            Nama : <input type="text" name="nama">
        </div>

        <div>
            Username : <input type="text" name="username">
        </div>

        <div>
            Password : <input type="password" name="password">
        </div>

        <button type="submit">Simpan</button>
    </form>
</body>

</html>