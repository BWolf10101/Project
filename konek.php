<?php
$servername = "localhost"; // Nama server
$username = "root"; // Username MySQL Anda
$password = ""; // Password MySQL Anda
$dbname = "uas"; // Nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
