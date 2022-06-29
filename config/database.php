<?php

$connection = [
    'host' => 'localhost',
    'user' => 'root',
    'password' => '',
    'database' => 'manag'
];

$conn = new mysqli($connection['host'],
                    $connection['user'],
                    $connection['password'],
                    $connection['database']);

if($conn->connect_error){
    die("Error connection to database".$conn->connect_error);
}

