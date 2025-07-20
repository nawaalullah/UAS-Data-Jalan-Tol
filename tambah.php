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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jalan Tol</title>
    <link rel="Icon" type="png" href="img/logo.png">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #efeff0;" class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="container">
        <div class="bg-white rounded-4 d-flex align-items-center p-4  ">
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <h1>Tambah Data Jalan Tol </h1>
                    </div>
                    <div class="col-6">
                        <div class="col-12 d-flex justify-content-end ">
                            <a href="index.php" class="bi bi-arrow-right"></a>
                        </div>
                    </div>
                </div>
<form method="POST" enctype="multipart/form-data" >
<div class="col-4">
    <!-- Tol Asal -->
    <div class="mb-3">
        <label for="asal" class="form-label">Tol Asal:</label>
        <input type="text" class="form-control fs-6" name="asal" id="asal" required>
    </div>

    <!-- Gambar Asal -->
    <div class="mb-3">
        <label for="gambar_asal" class="form-label">Gambar Asal:</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-image"></i></span>
            <input class="form-control" type="file" id="gambar_asal" name="gambar_asal" required>
        </div>
    </div>

    <!-- Tol Tujuan -->
    <div class="mb-3">
        <label for="tujuan" class="form-label">Tol Tujuan:</label>
        <input type="text" class="form-control fs-6" name="tujuan" id="tujuan" required>
    </div>

    <!-- Gambar Tujuan -->
    <div class="mb-3">
        <label for="gambar_tujuan" class="form-label">Gambar Tujuan:</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-image"></i></span>
            <input class="form-control" type="file" id="gambar_tujuan" name="gambar_tujuan" required>
        </div>
    </div>

    <!-- Harga -->
    <div class="mb-3">
        <label for="harga" class="form-label">Harga:</label>
        <input type="number" class="form-control pe-5 fs-6" name="harga" id="harga" required>
    </div>

    <!-- Tombol Submit -->
    <button type="submit" name="submit" class="btn btn-primary px-3 py-2">
        <i class="bi bi-plus-circle me-2"></i>Tambah Data
    </button>

</form>

