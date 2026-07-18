<?php

$host = "sql206.infinityfree.com";
$user = "if0_42436207";
$password = "Y5n7ouQtp5r";
$database = "if0_42436207_smartdb";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>