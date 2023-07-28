<?php

include './../database/DB.php';

$siswa = new DB('peserta');

$dataSiswa = $siswa->all();

foreach ($dataSiswa as $item) {
    echo $item['makanan_favorit'] . '<br>';
}
