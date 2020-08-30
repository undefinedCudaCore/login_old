<?php

session_start();


// $data = [

//     ['name' => 'Petras', 'pass' => md5('123')],
//     ['name' => 'Aloizas', 'pass' => md5('456')]

// ];

// file_put_contents(__DIR__ .'/data.json', json_encode($data));
$data = json_decode(file_put_contents(__DIR__ .'/data.json', 1));