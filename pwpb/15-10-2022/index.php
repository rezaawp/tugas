<?php 

include "DB.php";

$siswa = new DB("siswa");

$siswa->create([
    "id"					=> 1,
    "nama"				=> "Reza"
]);

// $siswa->delete([
//     'id' => 2
// ]);

// $siswa->where('nama', 'Reza');
// $siswa->update([
// 	'id'	=> 2,
// 	'nama'	=> 'Abdul'
// ]);

foreach($siswa->all() as $item)
{
    echo $item["nama"] . " <br>";
}