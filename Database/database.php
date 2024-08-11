<?php
$servername = "localhost"; // Ganti dengan server Anda jika berbeda
$username = "root"; // Ganti dengan username Anda
$password = ""; // Ganti dengan password Anda
$dbname = "db_courseonline"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
