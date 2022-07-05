<?php

$dbCoonnection = [
    'host' => '127.0.0.1',
    'user' => 'root',
    'password' => '12345678',
    'database' => 'hhcform'
];

$dbConn= new mysqli($dbCoonnection['host'],
                    $dbCoonnection['user'],
                    $dbCoonnection['password'],
                    $dbCoonnection['database']);

if($dbConn->connect_error){
    die("Error connection to database ".$dbConn->connect_error);
}

