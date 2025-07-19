<?php
$conn = mysqli_connect("localhost", "root", "Nawa8246!", "jalan_tol");

// Cek apakah session sudah dimulai
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
