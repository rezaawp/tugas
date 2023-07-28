<?php

include './../database/DB.php';

$siswa = new DB("peserta");

$siswa->create([
    'id' => 'a_i',
    'nama' => $_POST['nama'],
    'makanan_favorit' => $_POST['makanan_favorit']
]);

header('Location: ./../create.php');
