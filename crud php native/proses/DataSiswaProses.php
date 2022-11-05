<?php

include './database/DB.php';

$siswa = new DB("siswa");

// CARI SISWA
if (isset($_REQUEST['nis'])) {
    $data = $siswa->whereQuery('nis', $_REQUEST['nis']);
} else {
    $data = $siswa->all();
}

// DELETE
if (isset($_REQUEST['delete'])) {
    $siswa->delete(['nis' => $_REQUEST['delete']]);
    header('Location:data_siswa.php');
}

// STORE
if (isset($_REQUEST['tambah'])) {
    $siswa->create([
        'nis'       => $_REQUEST['nis'],
        'nama'      => $_REQUEST['nama']
    ]);
}
