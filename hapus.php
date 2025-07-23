<?php
require 'functions.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("Location: datajalantol.php?error=id_tidak_valid");
    exit;
}

$id = intval($_GET['id']);
$berhasil = deleteTol($id);

if ($berhasil) {
    header("Location: datajalantol.php?success=data_berhasil_dihapus");
    exit;
} else {
    header("Location: datajalantol.php?error=gagal_menghapus_data");
    exit;
}
 