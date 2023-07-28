<?php

include './../database/DB.php';

$siswa = new DB("peserta");

$deleteSiswa = $siswa->delete([
    'id' => $_POST['id']
]);

if ($deleteSiswa) {
    header('Location: ./../index.php');
}
