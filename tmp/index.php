<?php

header("Access-Control-Allow-Origin: http://localhost:5173/");
header("Access-Control-Allow-Headers: X-Requested-With");

header("Content-Type: application/json");

$students = [
    [
        'name' => 'Mario',
        'last-name' => 'Rossi',
    ],
    [
        'name' => 'Giovanna',
        'last-name' => 'Bianchi',
    ],
];

echo json_encode($students);

?>