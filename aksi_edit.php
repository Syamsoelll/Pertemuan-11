<?php
include "koneksi.php";

// Mendapatkan data dari form
$id = $POST['id'];
$nim = $POST['nim'];
$nama = $POST['nama'];
$no_hp = $POST['no_hp'];
$jenis_kelamin = $POST['jenis_kelamin'];
$jurusan = $POST['jurusan'];
$alamat = $POST['alamat'];

// Query update data mahasiswa
$sql = "UPDATE mahasiswa SET nim='$nim', nama='$nama', no_hp='$no_hp', jenis_kelamin='$jenis_kelamin', jurusan='$jurusan', alamat='$alamat' WHERE id='$id'";

if (mysqli_query($link, $sql)) {
    header("location:tampil_data.php");
}
?>
