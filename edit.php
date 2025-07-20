<?php
include 'db.php';
include 'auth.php';
include 'functions.php';

$id = $_GET['id'];
$data = mysqli_fetch_assoc(getTolById($id));

if (isset($_POST['submit'])) {
    $asal = $_POST['tol_asal'];
    $tujuan = $_POST['tol_tujuan'];
    $harga = $_POST['harga'];

    // Kirim $_FILES bukan nama string saja
    updateTol($id, $asal, $_FILES['gambar_asal'], $tujuan, $_FILES['gambar_tujuan'], $harga);

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Jalan Tol</title>
    <link rel="Icon" type="png" href="img/logo.png">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #efeff0;" class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="container">
        <div class="bg-white rounded-4 d-flex align-items-center p-4  ">
            <!-- Hapus form GET di sini -->
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <h1>Edit Data Jalan Tol</h1>
                    </div>
                    <div class="col-6">
                        <div class="col-12 d-flex justify-content-end">
                            <a href="index.php" class="bi bi-arrow-right"></a>
                        </div>
                    </div>
                </div>

                <!-- Form POST yang benar -->
                <form method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                    <input type="hidden" name="gambar_asal_lama" value="<?= $data['gambar_asal']; ?>">
                    <input type="hidden" name="gambar_tujuan_lama" value="<?= $data['gambar_tujuan']; ?>">

                    <div class="col-4">
                        <!-- Tol Asal -->
                        <div class="mb-3">
                            <label for="tol_asal" class="form-label">Tol Asal:</label>
                            <input type="text" class="form-control pe-5 fs-6" name="tol_asal" id="tol_asal" value="<?= $data['tol_asal'] ?>" required>
                        </div>

                        <!-- Gambar Asal -->
                        <div class="mb-3">
                            <label class="form-label">Gambar Asal Lama:</label><br>
                            <img src="uploads/<?= $data['gambar_asal'] ?>" width="100" class="rounded shadow mb-2"><br>
                            <label for="gambar_asal" class="form-label">Ganti Gambar Asal:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-image"></i></span>
                                <input class="form-control" type="file" id="gambar_asal" name="gambar_asal">
                            </div>
                        </div>

                        <!-- Tol Tujuan -->
                        <div class="mb-3">
                            <label for="tol_tujuan" class="form-label">Tol Tujuan:</label>
                            <input type="text" class="form-control pe-5 fs-6" name="tol_tujuan" id="tol_tujuan" value="<?= $data['tol_tujuan'] ?>" required>
                        </div>

                        <!-- Gambar Tujuan -->
                        <div class="mb-3">
                            <label class="form-label">Gambar Tujuan Lama:</label><br>
                            <img src="uploads/<?= $data['gambar_tujuan'] ?>" width="100" class="rounded shadow mb-2"><br>
                            <label for="gambar_tujuan" class="form-label">Ganti Gambar Tujuan:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-image"></i></span>
                                <input class="form-control" type="file" id="gambar_tujuan" name="gambar_tujuan">
                            </div>
                        </div>

                        <!-- Harga -->
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga:</label>
                            <input type="number" class="form-control pe-5 fs-6" name="harga" id="harga" value="<?= $data['harga'] ?>" required>
                        </div>

                        <!-- Tombol Submit -->
                        <button class="btn button1 px-3 py-1" name="submit" type="submit">
                            <i class="bi bi-arrow-clockwise me-2"></i>Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
