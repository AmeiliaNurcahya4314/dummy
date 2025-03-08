<?php
include 'config.php';

$judul = "Pengumuman Contoh " . rand(1, 100);
$isi = "Isi pengumuman contoh. Ini adalah data dummy untuk testing.";
$tanggal = date("Y-m-d");

$sql = "INSERT INTO pengumuman (judul, isi, tanggal, link) VALUES ('$judul', '$isi', '$tanggal', '$link')";
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
