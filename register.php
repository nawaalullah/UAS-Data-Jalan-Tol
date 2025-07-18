<?php
session_start();
include 'db.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $check = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    if (mysqli_num_rows($check) == 0) {
        mysqli_query($conn, "INSERT INTO users (username, password) VALUES ('$username', '$password')");
        header("Location: login.php");
    } else {
        echo "Username sudah ada!";
    }
}
?>

<form method="POST">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <button name="register">Register</button>
</form>