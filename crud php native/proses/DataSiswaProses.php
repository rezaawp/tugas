<?php

include './database/DB.php';

$siswa = new DB("siswa");

if(isset($_REQUEST['id']))
{
    $data = $siswa->whereQuery('id', $_REQUEST['id']);
} else {
    $data = $siswa->all();
}