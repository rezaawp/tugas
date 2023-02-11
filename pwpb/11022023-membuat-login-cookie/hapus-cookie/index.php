<?php

$destroy_cookies = ['username', 'nama', 'tgl_lahir'];

foreach ($destroy_cookies as $c) {
    if (isset($_COOKIE[$c])) {
        setcookie($c, "", -1, '/');
    }
}