<?php
include 'config.php';

$sql = "DELETE FROM pengumuman";
if ($conn->query($sql) === TRUE) {
    echo "Semua pengumuman berhasil dihapus!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
