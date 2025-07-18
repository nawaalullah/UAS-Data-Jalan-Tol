<?php
include 'db.php';
include 'auth.php';
include 'functions.php';

if (isset($_POST['submit'])) {
    $asal = $_POST['tol_asal'];
    $tujuan = $_POST['tol_tujuan'];
    $harga = $_POST['harga'];

    $gambar_asal = $_FILES['gambar_asal']['name'];
    $gambar_tujuan = $_FILES['gambar_tujuan']['name'];

    move_uploaded_file($_FILES['gambar_asal']['tmp_name'], "uploads/$gambar_asal");
    move_uploaded_file($_FILES['gambar_tujuan']['tmp_name'], "uploads/$gambar_tujuan");

    addTol($asal, $gambar_asal, $tujuan, $gambar_tujuan, $harga);
    header("Location: index.php");
}
?>

<form method="POST" enctype="multipart/form-data">
    Tol Asal: <input type="text" name="tol_asal" required><br>
    Gambar Asal: <input type="file" name="gambar_asal" required><br>
    Tol Tujuan: <input type="text" name="tol_tujuan" required><br>
    Gambar Tujuan: <input type="file" name="gambar_tujuan" required><br>
    Harga: <input type="number" name="harga" required><br>
    <button name="submit">Simpan</button>
</form>