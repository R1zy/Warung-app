<?php
$hostname = 'localhost';
$username = 'root';
$password = 'root';
$database = 'warung_db';


$conn = mysqli_connect($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed, tolong cek config udah bener apa belum: " . $conn->connect_error);
}