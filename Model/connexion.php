<?php

$servername = "localhost";
$username = "root";
$password = "shikusu";
$database = "livraison";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

