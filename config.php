<?php
$host = "localhost";
$user = "root"; // Default MySQL user di lokal
$pass = ""; // Kosongkan jika menggunakan XAMPP atau Laragon
$dbname = "dummy"; // Nama database

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
