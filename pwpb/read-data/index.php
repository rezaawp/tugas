<?php
include '../koneksi-database/koneksi.php';
$query = $koneksi->query('SELECT * FROM siswa');

$data = $query->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Data</title>
</head>

<body>
    <h1>List Data Siswa</h1>

    <?php for ($i = 0; $i < count($data); $i++) : ?>
        <?php echo $i == 0 ? "<hr>" : "" ?>
        <p>Username : <?= $data[$i]['nama'] ?></p>
        <p>Nama : <?= $data[$i]['username'] ?></p>
        <p>Password : <?= $data[$i]['password'] ?></p>
        <hr>
    <?php endfor; ?>
</body>

</html>