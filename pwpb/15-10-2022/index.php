<?php 

include "DB.php";
include "PDO.php";


// // OOP
// $peserta = new DB("peserta");

// $peserta->create([
//     "nama"              => "Hai",
//     "makanan_favorit"   => "mangga"
// ]);

// // $peserta->delete([
// //     'makanan_favorit' => "Mangga"
// // ]);

// $pesertaNaufal = $peserta->where('nama', 'Naufal');
// var_dump($peserta->update("sl"));

// PDO
$koneksi->query("INSERT INTO peserta VALUES ('Reza', 'Mangga')");

$koneksi->query("SELECT * FROM peserta");

$koneksi->query("DELETE FROM peserta WHERE nama='Reza'");

$koneksi->query("UPDATE peserta SET nama='Dimas',makanan_favorit='Apel' WHERE nama='Reza'");

// // var_dump($peserta->all());
// foreach($peserta->all() as $item)
// {
//     echo $item["makanan_favorit"] . " <br>";
// }