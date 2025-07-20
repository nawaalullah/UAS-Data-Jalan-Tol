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

    if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");

  
    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);


        if (password_verify($password, $user['password'])) {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;

      
            if (isset($_POST['remember'])) {
                setcookie("username", $username, time() + (7 * 24 * 60 * 60), "/");
            }

            header("Location: index.php");
            exit();
        } else {
            echo "<script>alert('Password salah!'); window.location.href = 'login.php';</script>";
        }
    } else {
        echo "<script>alert('Username tidak ditemukan!'); window.location.href = 'login.php';</script>";
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="Icon" type="png" href="img/jasamarga.png">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #efeff0;" class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="container">
        <div class="row bg-white rounded-4 d-flex align-items-center">
            <div class="col-6">
                <img src="img/login.svg" alt="" class="col-10 d-flex mx-auto">
            </div>
            <div class="col-6 align-content-center">
                <form action="" method="post" class="col-10 mx-auto">
                    <h1 class="text-center">Login</h1>
                    <div class="mb-3 mt-5">
                        <label for="username" class="form-label fs-6 text-secondary">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fs-6 text-secondary">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password" required>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="1" id="rememberme" name="remember">
                        <label class="form-check-label fs-6" for="rememberme">Remember Me</label>
                    </div>

                    <div class=" ">
                        <button type="submit" name="login" class="btn button1 px-5 rounded-5 d-flex mx-auto fs-5">Login</button>
                         <p class="fs-6 mt-3 text-center "> <span class="text-secondary">Belum Memiliki Akun?</span> <a href="register.php">Registrasi</a></p>
                    </div>
                    

                    
                       
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

