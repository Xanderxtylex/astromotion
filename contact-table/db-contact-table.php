<?php
$host = "localhost";
$username = "root";
$password = "";
$dbName = "contact-table";

$connect = mysqli_connect($host, $username, $password, $dbName);
if (!$connect) {
    echo "database error";
}
