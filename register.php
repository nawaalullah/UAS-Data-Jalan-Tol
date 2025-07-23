<?php
session_start();
include 'db.php';

if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if (empty($username) || empty($email)) {
        echo "<script>alert('Username dan Email wajib diisi!');</script>";
    } else {
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            $stmt_insert = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $stmt_insert->bind_param("sss", $username, $email, $password);
            $stmt_insert->execute();

            // Flag agar login.php tahu user baru saja register
            $_SESSION['from_register'] = true;

            echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location.href = 'login.php';</script>";
            exit;
        } else {
            echo "<script>alert('Username sudah digunakan. Silakan pilih yang lain.');</script>";
        }
    }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="Icon" type="png" href="img/jasamarga.png">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body style="background-color: #efeff0;" class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="container">
        <div class="row bg-white rounded-4 d-flex align-items-center">
            <div class="col-6">
                <img src="img/register.svg" alt="" class="col-11 d-flex mx-auto">
            </div>
            <div class="col-6 align-content-center">
                <form action="" method="post" class="col-10 mx-auto">
                    <h1 class="text-center">Registrasi</h1>

                    <div class="mb-3 mt-5">
                        <label for="username" class="form-label fs-6 text-secondary">Username</label>
                        <input type="text" class="form-control" id="username" name="username"
                            placeholder="Masukkan Username" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label fs-6 text-secondary">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email"
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label fs-6 text-secondary">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Masukan Password" required>
                    </div>

                    <button type="submit" name="register"
                        class="btn button1 px-5 rounded-5 d-flex mx-auto fs-5 ">Registrasi</button>

                    <div class="">
                        <p class="fs-6 mt-3 text-center "> <span class="text-secondary">Sudah Memiliki Akun?</span> <a
                                href="login.php">Login</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>