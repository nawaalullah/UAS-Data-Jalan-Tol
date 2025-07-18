<?php
session_start();
include 'db.php';

// Cek jika sudah login, arahkan ke index
if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit();
}

// Cek cookie jika ada
if (isset($_COOKIE['username'])) {
    $_SESSION['login'] = true;
    $_SESSION['username'] = $_COOKIE['username'];
    header("Location: index.php");
    exit();
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;

        // Jika centang remember me, simpan ke cookie selama 7 hari
        if (isset($_POST['remember'])) {
            setcookie("username", $username, time() + (7 * 24 * 60 * 60), "/"); // 7 hari
        }

        header("Location: index.php");
        exit();
    } else {
        echo "Login gagal!";
    }
}
?>

<form method="POST">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <label>
        <input type="checkbox" name="remember"> Remember Me
    </label><br>
    <button name="login">Login</button>
</form>
