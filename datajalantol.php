<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include 'db.php';
include 'functions.php';

if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header('Location: index.php');
    exit;
}

// Ambil filter pencarian jika ada
$asal = isset($_GET['asal']) ? $_GET['asal'] : '';
$tujuan = isset($_GET['tujuan']) ? $_GET['tujuan'] : '';
$tols = getFilteredTol($asal, $tujuan);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jalan Tol</title>
    <link rel="Icon" type="png" href="img/jasamarga.png">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body style="background-color: #d9d9daff;">

<!-- ✅ ALERT JIKA BERHASIL -->
<?php if (isset($_GET['success'])): ?>
<script>
    <?php if ($_GET['success'] === 'update'): ?>
        alert("Data berhasil diubah!");
    <?php elseif ($_GET['success'] === 'tambah'): ?>
        alert("Data berhasil ditambahkan!");
    <?php elseif ($_GET['success'] === 'hapus'): ?>
        alert("Data berhasil dihapus!");
    <?php endif; ?>
</script>
<?php endif; ?>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg sticky-top" style="background-color: #1F4A84; z-index: 1030;">
    <div class="container-fluid">
        <a class="navbar-brand col-2" href="datajalantol.php">
            <img src="img/putih.svg" alt="" class="col-10 ps-4 ms-3">
        </a>
    </div>
    <div class="d-flex justify-content-end ms-5 ps-5 me-5">
        <a href="logout.php" class="btn rounded-5 ms-5 px-3 py-2 fw-semibold button3"
            onclick="return confirm('Apakah anda yakin ingin keluar ?')">
            <i class="bi bi-box-arrow-right fs-5 text-white"></i>
        </a>
    </div>
</nav>

<!-- KONTEN -->
<div class="container mt-5">
    <div class="bg-white rounded-4 d-flex align-items-center p-4">
        <form method="get" class="col-12">
            <div class="row">
                <div class="col-12 text-center mt-3 mb-3">
                    <h1 style="margin-bottom: -6px;">Data Jalan Tol</h1>
                    <small class="text-secondary fw-light">Jasamarga Tollroad Operator 2025</small>
                </div>
            </div>

            <div class="row mt-4 col-12">
                <div class="col-3 align-self-center">
                    <p class="form-label fs-6">Asal Gerbang Tol</p>
                    <input type="text" class="form-control" name="asal" placeholder="Masukan Tol Asal" value="<?= $asal ?>">
                </div>
                <div class="col-3 align-self-center">
                    <p class="form-label fs-6">Tujuan Gerbang Tol</p>
                    <input type="text" class="form-control" name="tujuan" placeholder="Masukan Tol Tujuan" value="<?= $tujuan ?>">
                </div>
                <div class="col-3 align-self-end mb-1">
                    <button type="submit" class="btn button1 px-4 py-1">
                        <i class="bi bi-search me-2"></i>Cari
                    </button>
                    <a href="datajalantol.php" class="btn button2 px-3 py-1 ms-2">
                        <i class="bi bi-x-circle me-2"></i>Reset
                    </a>
                </div>
                <div class="col-3 align-self-end mb-1 d-flex justify-content-end">
                    <a href="tambah.php" class="btn btn-success px-3 py-1">
                        <i class="bi bi-plus me-2"></i>Tambah Data
                    </a>
                </div>
            </div>

            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th class="fs-5 fw-semibold text-center">GT Asal</th>
                        <th class="fs-5 fw-semibold text-center">Gambar GT Asal</th>
                        <th class="fs-5 fw-semibold text-center">GT Tujuan</th>
                        <th class="fs-5 fw-semibold text-center">Gambar GT Tujuan</th>
                        <th class="fs-5 fw-semibold text-center">Tarif</th>
                        <th class="fs-5 fw-semibold text-center"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tols as $data): ?>
                    <tr>
                        <td class="fs-6 fw-light text-center"><?= $data['tol_asal'] ?></td>
                        <td class="fs-6 fw-light text-center">
                            <img src="uploads/<?= $data['gambar_asal']; ?>?t=<?= time(); ?>" width="100">
                        </td>
                        <td class="fs-6 fw-light text-center"><?= $data['tol_tujuan'] ?></td>
                        <td class="fs-6 fw-light text-center">
                            <img src="uploads/<?= $data['gambar_tujuan']; ?>?t=<?= time(); ?>" width="100">
                        </td>
                        <td class="fs-6 fw-light text-center"><?= number_format($data['harga'], 0, ',', '.') ?></td>
                        <td class="text-center">
                            <div class="d-flex justify-content-end">
                                <a href="edit.php?id=<?= $data['id'] ?>" class="btn button1 text-white px-4 py-1 me-2">Edit</a>
                                <a href="hapus.php?id=<?= $data['id'] ?>" class="btn btn-danger py-1"
                                    onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>

                    <?php if (empty($tols)): ?>
                    <tr>
                        <td colspan="6" class="text-center">Tidak ada data ditemukan</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </form>
    </div>
</div>

</body>
</html>
