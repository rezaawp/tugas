<?php

include "DB.php";

$siswa = new DB("peserta");

// $siswa->create([
//     "nama"                   => "Abdul",
//     "makanan_favorit"        => "Apel"
// ]);

// $siswa->create([
//     "nama"                   => "Reza",
//     "makanan_favorit"        => "Mangga"
// ]);

// $dataSiswa = $siswa->all();

// foreach ($dataSiswa as $item) {
//     echo "Nama : " . $item['nama'] . '<br>';
//     echo "Makanan favorit : " . $item['makanan_favorit'] . '<br> <br>';
// }

// function update()
// {
//     global $siswa;
//     $data = $siswa->where('nama', 'Abdul');
//     $siswa->update([
//         'nama'              => 'Ryan',
//         'makanan_favorit'   => 'Durian'
//     ]);
// }

// update();

$siswa->delete([
    'nama'    => 'Ryan'
]);