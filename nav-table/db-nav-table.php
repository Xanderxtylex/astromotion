<?php
$host = "localhost";
$username = "root";
$password = "";
$dbName = "nav-table";

$connect = mysqli_connect($host, $username, $password, $dbName);
if (!$connect) {
    echo "database error";
}
