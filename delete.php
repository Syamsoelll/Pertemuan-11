<?php

// Koneksi ke database
include "koneksi.php";

// Mendapatkan ID mahasiswa yang akan dihapus
$id = $_GET['id'];

// Query hapus data mahasiswa
$sql = "DELETE FROM mahasiswa WHERE id='$id'";

// Mengeksekusi query dan cek statusnya
if (mysqli_query($link, $sql)) {
    // Penghapusan data berhasil
    header('Location: tampil_data.php');
} 
?>
