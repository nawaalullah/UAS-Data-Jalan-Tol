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

    $gambar_asal = $_FILES['gambar_asal']['name'] ?: $data['gambar_asal'];
    $gambar_tujuan = $_FILES['gambar_tujuan']['name'] ?: $data['gambar_tujuan'];

    if ($_FILES['gambar_asal']['name']) {
        move_uploaded_file($_FILES['gambar_asal']['tmp_name'], "uploads/$gambar_asal");
    }
    if ($_FILES['gambar_tujuan']['name']) {
        move_uploaded_file($_FILES['gambar_tujuan']['tmp_name'], "uploads/$gambar_tujuan");
    }

    updateTol($id, $asal, $gambar_asal, $tujuan, $gambar_tujuan, $harga);
    header("Location: index.php");
}
?>

<form method="POST" enctype="multipart/form-data">
    Tol Asal: <input type="text" name="tol_asal" value="<?= $data['tol_asal'] ?>" required><br>
    Gambar Asal: <input type="file" name="gambar_asal"><br>
    Tol Tujuan: <input type="text" name="tol_tujuan" value="<?= $data['tol_tujuan'] ?>" required><br>
    Gambar Tujuan: <input type="file" name="gambar_tujuan"><br>
    Harga: <input type="number" name="harga" value="<?= $data['harga'] ?>" required><br>
    <button name="submit">Update</button>
</form>