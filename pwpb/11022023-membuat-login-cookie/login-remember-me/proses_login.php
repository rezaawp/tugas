<?php
if ($_POST['username'] == 'reza' && $_POST['password'] == '123') {
    if (isset($_POST['remember_me'])) {
        setcookie('username', $_POST['username'], time() + (86400 * 30), '/');
        setcookie('ssid', true, time() + (86400 * 30), "/");
        header('Location: home.php');
    } else {
        echo "<script> alert('Username dan password sudah benar. Silahkan klik tombol remember me untuk login') </script>";
    }
    $login = true;
} else {
    $login = false;
    echo "<script> alert('Username atau password salah') </script>";
}
