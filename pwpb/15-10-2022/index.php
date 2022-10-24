<?php 

include "DB.php";

$siswa = new DB("peserta");

// $siswa->create([
//     "nama"					=> 1,
//     "makanan_favorit"		=> "Reza"
// ]);

$siswa->where('makanan_favorit', 'Reza');
$siswa->update([
    'nama'              => 'Reza',
    'makanan_favorit'   => 'apel hijau'
]);

// $siswa->delete([
//     'nama'    => 1
// ]);

// $dataSiswa = $siswa->all();
// foreach($dataSiswa as $item)
// {
//     echo $item['nama'] . '<br>';
// }