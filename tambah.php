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
    <title>Tambah Data Jalan Tol</title>
    <link rel="Icon" type="png" href="img/jasamarga.png">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>
 
<body style="background-color: #d9d9daff;" class="">
    <nav class="navbar navbar-expand-lg m-0 p-0 " style="background-color: #1F4A84;">
        <div class="container-fluid ">
            <a class="navbar-brand col-2 p-0" href="#">
                <img src="img/putih.svg" alt="" class="col-10 ps-4 ms-3">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
            </div>
        </div>
        <div class=" d-flex justify-content-end ms-5 ps-5 me-5 ">
            <a href="logout.php" class="btn rounded-5  ms-5  px-3 py-2 fw-semibold button3"
                onclick="return confirm('Apakah anda yakin ingin keluar ?')">
                <i class="bi bi-box-arrow-right fs-5 text-white"></i>
            </a>
        </div>
    </nav>
    <div class="col-8 mt-5 mx-auto">
        <div class="bg-white rounded-4 d-flex align-items-center p-4  ">
            <div class="col-11 mx-auto">
                <a type="button" href="index.php" class="btn button2 px-3 py-1 me-3 rounded-5">
                    <i class="bi bi-arrow-left "></i>
                </a>

                <div class="row">
                    <div class="col-12 text-center mb-3">
                        <h1 style="margin-bottom: -6px;">Tambah Data Jalan Tol </h1>
                        <small class="text-secondary fw-light">Jasamarga Tollroad Operator 2025 </small>
                    </div>
                </div>
                <form method="POST" enctype="multipart/form-data">
                    <div class="col-5">
                        <!-- Tol Asal -->
                        <div class="mb-3">
                            <label for="asal" class="form-label fs-6">Asal Gerbang Tol</label>
                            <input type="text" class="form-control " name="asal" id="asal"
                                placeholder="Masukkan Nama GT Asal" required>
                        </div>

                        <!-- Gambar Asal -->
                        <div class="mb-3">
                            <label for="gambar_asal" class="form-label fs-6">Gambar GT Asal</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-image"></i></span>
                                <input class="form-control" type="file" id="gambar_asal" name="gambar_asal" required>
                            </div>
                        </div>

                        <!-- Tol Tujuan -->
                        <div class="mb-3">
                            <label for="tujuan" class="form-label fs-6">Tujuan Gerbang Tol</label>
                            <input type="text" class="form-control" name="tujuan" id="tujuan"
                                placeholder="Masukkan Nama GT Tujuan" required>
                        </div>

                        <!-- Gambar Tujuan -->
                        <div class="mb-3">
                            <label for="gambar_tujuan" class="form-label fs-6">Gambar GT Tujuan</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-image"></i></span>
                                <input class="form-control" type="file" id="gambar_tujuan" name="gambar_tujuan"
                                    required>
                            </div>
                        </div>

                        <!-- Harga -->
                        <div class="mb-3">
                            <label for="harga" class="form-label fs-6">Tarif Tol</label>
                            <input type="number" class="form-control " name="harga" id="harga"
                                placeholder="Masukkan Tarif Tol" required>
                        </div>
                    </div>

                    <!-- Tombol Submit -->
                    <div class="d-flex justify-content-end">

                        <button type="submit" name="submit" class="btn button1 px-3 py-1 ">
                            <i class="bi bi-plus me-2"></i>Tambah Data
                        </button>
                    </div>
                </form>
</body>
</html>