<?php
$host = "localhost";
$username = "root";
$password = "";
$dbName = "astromotion";

$connect = mysqli_connect($host, $username, $password, $dbName);
if (!$connect) {
    echo "database error";
}
