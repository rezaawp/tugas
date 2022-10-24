<?php

include './database/DB.php';

$tb_user = new DB("user");

if (isset($_POST['submit']))
{
    $store = $tb_user->create([
        'id'        => 1,
        'username'  => $_POST['username'],
        'password'  => hash('sha256', $_POST['password']),
    ]);
}