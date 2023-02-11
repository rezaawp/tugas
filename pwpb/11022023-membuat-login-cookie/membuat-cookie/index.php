<?php

$cookies = [
    [
        'cookie_name' => 'nama',
        'cookie_value' => 'Reza'
    ],
    [
        'cookie_name' => 'username',
        'cookie_value' => 'rezawp'
    ],
    [
        'cookie_name' => 'tgl_lahir',
        'cookie_value' => '19-07-2006'
    ]
];

foreach ($cookies as $c) {
    echo $c['cookie_name'] . "<br>";
    setcookie($c['cookie_name'], $c['cookie_value'], time() + (86400 * 30), "/");
}
