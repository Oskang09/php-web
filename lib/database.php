<?php

    require_once __DIR__ . "/../lib/prevent-access.php";

    $host       = 'localhost';
    $database   = 'poska';
    $port       = 3306;
    $user       = 'root';
    $password   = 'oskang09';

    $conn = mysqli_connect($host . ":" . $port, $user, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>