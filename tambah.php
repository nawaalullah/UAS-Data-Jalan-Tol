<?php
session_start();
include 'db.php';
include 'auth.php';
include 'functions.php';

if (isset($_POST['submit'])) {
    $asal = $_POST['asal'];
    $tujuan = $_POST['tujuan'];
    $harga = $_POST['harga'];

    $gambar_asal = $_FILES['gambar_asal'];
    $gambar_tujuan = $_FILES['gambar_tujuan'];

    if (addTol($asal, $gambar_asal, $tujuan, $gambar_tujuan, $harga)) {
        header("Location: index.php");
    } else {
        echo "Gagal menambahkan data!";
    }
}
?>

<form method="POST" enctype="multipart/form-data">
    Tol Asal: <input type="text" name="asal" required><br>
    Gambar Asal: <input type="file" name="gambar_asal" required><br>
    Tol Tujuan: <input type="text" name="tujuan" required><br>
    Gambar Tujuan: <input type="file" name="gambar_tujuan" required><br>
    Harga: <input type="number" name="harga" required><br>
    <button type="submit" name="submit">Tambah</button>
</form>
