<?php

$host = "localhost";
$port = "3306";
$dbName = "login_db";
$username = "Dwayne";
$password = "123456";

$mysqli = new mysqli(
    hostname: $host,
    username: $username,
    password: $password,
    database: $dbName
);

if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;
