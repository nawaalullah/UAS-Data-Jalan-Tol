<?php
include 'db.php';

function getAllTol() {
    global $conn;
    return mysqli_query($conn, "SELECT * FROM tol");
}

function getTolById($id) {
    global $conn;
    return mysqli_query($conn, "SELECT * FROM tol WHERE id = $id");
}

function uploadGambar($file, $folder = 'uploads') {
    $namaFile = basename($file['name']);
    $targetPath = "$folder/" . time() . "_" . $namaFile;

    if (move_uploaded_file($file['tmp_name'], $targetPath)) {
        return basename($targetPath);
    } else {
        return null;
    }
}

function addTol($asal, $gambarAsalFile, $tujuan, $gambarTujuanFile, $harga) {
    global $conn;

    $gambar_asal = uploadGambar($gambarAsalFile);
    $gambar_tujuan = uploadGambar($gambarTujuanFile);

    if ($gambar_asal && $gambar_tujuan) {
        return mysqli_query($conn, "INSERT INTO tol (tol_asal, gambar_asal, tol_tujuan, gambar_tujuan, harga)
            VALUES ('$asal', '$gambar_asal', '$tujuan', '$gambar_tujuan', '$harga')");
    } else {
        return false;
    }
}

function updateTol($id, $asal, $gambarAsalFile, $tujuan, $gambarTujuanFile, $harga) {
    global $conn;

    $dataLama = mysqli_fetch_assoc(getTolById($id));
    $gambar_asal = $dataLama['gambar_asal'];
    $gambar_tujuan = $dataLama['gambar_tujuan'];

    // Update gambar asal jika diupload
    if ($gambarAsalFile['name']) {
        if (file_exists("uploads/$gambar_asal")) {
            unlink("uploads/$gambar_asal");
        }
        $gambar_asal = uploadGambar($gambarAsalFile);
    }

    // Update gambar tujuan jika diupload
    if ($gambarTujuanFile['name']) {
        if (file_exists("uploads/$gambar_tujuan")) {
            unlink("uploads/$gambar_tujuan");
        }
        $gambar_tujuan = uploadGambar($gambarTujuanFile);
    }

    return mysqli_query($conn, "UPDATE tol SET tol_asal='$asal', gambar_asal='$gambar_asal',
        tol_tujuan='$tujuan', gambar_tujuan='$gambar_tujuan', harga='$harga' WHERE id=$id");
}

function deleteTol($id) {
    global $conn;
    $data = mysqli_fetch_assoc(getTolById($id));

    if ($data) {
        // Hapus file gambar dari folder
        if (file_exists("uploads/{$data['gambar_asal']}")) {
            unlink("uploads/{$data['gambar_asal']}");
        }
        if (file_exists("uploads/{$data['gambar_tujuan']}")) {
            unlink("uploads/{$data['gambar_tujuan']}");
        }
    }

    return mysqli_query($conn, "DELETE FROM tol WHERE id=$id");
}
?>
