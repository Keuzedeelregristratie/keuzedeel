<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'keuzedeel';

    $db = new PDO(
        "mysql:host=$dbHost; dbname=$dbName",
        $dbUser,
        $dbPass
    );


    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

