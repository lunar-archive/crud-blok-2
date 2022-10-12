<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $nama_database = "biodata_lunar";



     //Database connection
    $db = mysqli_connect($server, $user, $password, $nama_database);
    if(!$db) {
        die("Failed to Regist : ". mysqli_connect_error());
    }
?>    