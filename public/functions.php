<?php

function connectToDb()
{
    $servername = "mysql";
    $dbname = "test";
    $username = "root";
    $password = "root";

    $pdo = mysqli_connect($servername, $username, $password, $dbname);
    if (!$pdo) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $pdo;
}



function dd($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}