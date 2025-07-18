<?php
session_start();
include 'db.php';
include 'auth.php';
include 'functions.php';

$tols = getAllTol();

echo "Halo, " . $_SESSION['username'] . "!";
echo " | <a href='logout.php'>Logout</a> | <a href='tambah.php'>Tambah Data</a>";
echo "<hr>";
while ($data = mysqli_fetch_assoc($tols)) {
    echo "<p>
        <strong>Asal:</strong> {$data['tol_asal']}<br>
        <img src='uploads/{$data['gambar_asal']}' width='100'><br>
        <strong>Tujuan:</strong> {$data['tol_tujuan']}<br>
        <img src='uploads/{$data['gambar_tujuan']}' width='100'><br>
        <strong>Harga:</strong> Rp {$data['harga']}<br>
        <a href='edit.php?id={$data['id']}'>Edit</a> | 
        <a href='hapus.php?id={$data['id']}'>Hapus</a>
    </p><hr>";
}
?>