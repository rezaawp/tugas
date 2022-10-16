<?php 

include "DB.php";

$siswa = new DB("siswa");

$siswa->create([
	'nama'	=> 'Reza K',
	'id' 	=> 10
]);

$data = new DB("data");
$data->create([
	'nama'		=> 'reza',
	'umur'		=> "",
	'jurusan'	=> 'jurusan',
	'kelas'		=> 10
]);
