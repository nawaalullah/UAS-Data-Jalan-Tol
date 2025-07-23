<?php
session_start();
include 'db.php';

// Cek apakah user baru saja datang dari registrasi
$from_register = isset($_SESSION['from_register']);
if ($from_register) {
    unset($_SESSION['from_register']); // hanya sekali pakai
} else {
    // Jika sudah login, langsung arahkan ke halaman utama
    if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
        header("Location: datajalantol.php");
        exit();
    }

    // Jika ada cookie, langsung login otomatis
    if (isset($_COOKIE['username'])) {
        $_SESSION['login'] = true;
        $_SESSION['username'] = $_COOKIE['username'];
        header("Location: datajalantol.php");
        exit();
    }
}
 
// Proses login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $user['username'];

            if (isset($_POST['remember'])) {
                setcookie("username", $user['username'], time() + (86400 * 7), "/");
            }

            header("Location: datajalantol.php");
            exit();
        } else {
            echo "<script>alert('Password salah!'); window.location.href='login.php';</script>";
            exit();
        }
    } else {
        echo "<script>alert('Username tidak ditemukan!'); window.location.href='login.php';</script>";
        exit();
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="png" href="img/jasamarga.png">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
        rel="stylesheet">
</head>

<body style="background-color: #efeff0;" class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="container">
        <div class="row bg-white rounded-4 d-flex align-items-center">
            <div class="col-6">
                <img src="img/login.svg" alt="Login Image" class="col-10 d-flex mx-auto">
            </div>
            <div class="col-6 align-content-center">
                <form action="" method="post" class="col-10 mx-auto">
                    <h1 class="text-center">Login</h1>
                    <div class="mb-3 mt-5">
                        <label for="username" class="form-label fs-6 text-secondary">Username</label>
                        <input type="text" class="form-control" id="username" name="username"
                            placeholder="Masukkan Username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fs-6 text-secondary">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Masukkan Password" required>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="1" id="rememberme" name="remember">
                        <label class="form-check-label fs-6" for="rememberme">Remember Me</label>
                    </div>
                    <button type="submit" name="login"
                        class="btn button1 px-5 rounded-5 d-flex mx-auto fs-5">Login</button>
                    <p class="fs-6 mt-3 text-center">
                        <span class="text-secondary">Belum Memiliki Akun?</span>
                        <a href="register.php">Registrasi</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
