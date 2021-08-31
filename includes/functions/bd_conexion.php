<?php
$user = 'root';
$password = 'root';
$db = 'bsaswebcamp';
$host = 'localhost';
$port = 8889;

$conn = mysqli_connect($host, $user, $password, $db, $port);

// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
