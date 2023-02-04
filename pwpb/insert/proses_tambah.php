<?php

include '../koneksi-database/koneksi.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

// die($password);

$koneksi->query("INSERT INTO `siswa` VALUES ('' ,'$nama', '$username', '$password')");
