<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Statistik Tol</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link rel="Icon" type="png" href="img/jasamarga.png">
   <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>
     .carousel-item {
            height: 100vh;
            min-height: 500px;
            background-size: cover;
            background-position: center;
            position: relative;
            color: white;
        }
        .carousel-caption-left {
            position: absolute;
            top: 50%;
            left: 10%;
            transform: translateY(-50%);
            text-align: left;
        }
        .carousel-caption-right {
            position: absolute;
            top: 50%;
            right: 10%;
            transform: translateY(-50%);
            text-align: right;
        }
        .carousel-indicators [data-bs-target] {
            background-color: white;
        }
        .background-color{
            font-family: 'Segoe UI', sans-serif;
        }
     .about-img {
            width: 100%;
            height: auto;
            border-radius: 15px;
            object-fit: cover;
        }
        .about-text {
            color: #6c757d;
            font-size: 16px;
            line-height: 1.8;
        }
        .about-link {
            text-decoration: none;
            font-weight: 500;
            color: #0d6efd;
        }
        .about-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body style="background-color: #d9d9daff;" class="">
    
    <nav class="navbar navbar-expand-lg m-0 p-0 " style="background-color: #1F4A84;">
        <div class="container-fluid ">
            <a class="navbar-brand col-2 p-0" href="#">
            <img src="img/putih.svg" alt="" class="col-10 ps-4 ms-3">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav col-12 justify-content-center " >
                    <li class="nav-item fs-5 me-4 py-3 navbarr borderactive ">
                        <a class="nav-link text-white active fw-semibold" href="tentangkami.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item fs-5 py-3 me-4 navbarr" >
                        <a class="nav-link text-white " aria-current="page" href="index.php">Data Jalan Tol</a>
                    </li>

                    <li class="nav-item fs-5 py-3 me-5 navbarr" >
                        <a class="nav-link text-white " aria-current="page" href="kontak.php">Kontak Kami</a>
                    </li>
                    
                </ul>
            </div>
        </div>
         <div class=" d-flex justify-content-end ms-5 ps-5 me-5 ">
             <a href="logout.php" class="btn rounded-5  ms-5  px-3 py-2 fw-semibold button3" onclick="return confirm('Apakah anda yakin ingin keluar ?')">
                 <i class="bi bi-box-arrow-right fs-5 text-white"></i>
             </a>
         </div>
    </nav>
    <div id="floSlider" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="30000">

    <div id="floSlider" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#floSlider" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#floSlider" data-bs-slide-to="1"></button>
    </div>

    <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url('uploads/Jalan_Tol_Cipularang.jpeg');">
            <div class="carousel-caption-left">
                <h1 class="fw-bold">Sekarang kamu bisa pesan melalui 
                    <br>aplikasi JasaMarga</h1>
                <p class="fs-5"> <span class="text-danger fw-bold"></span> <span style="text-shadow:2px 2px #000;"></span></p>
            </div>
            <div class="carousel-caption-right">
                <h2 class="fw-bold">Jalan Tol Cipularang</h2>
                <p>Cepat, Aman, Tanpa Ribet.</p>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url('uploads/Jalan_Tol_Bali_Mandara.jpeg');">
            <div class="carousel-caption-left">
                <h1 class="fw-bold">Pembayaran Tol Lebih Praktis</h1>
                <p class="fs-5">Tidak perlu buka kaca, cukup pakai Aplikasi JasaMarga!</p>
            </div>
            <div class="carousel-caption-right">
                <h2 class="fw-bold">Jalan Tol Bali Mandara</h2>
                <p>Efisien, Aman, dan Modern.</p>
            </div>
        </div>

    </div>

    <!-- Kontrol -->
    <button class="carousel-control-prev" type="button" data-bs-target="#floSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#floSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-5 mb-4 mb-md-0">
            <img src="uploads/margajasa.jpg" alt="Gedung Jasa Marga" class="about-img">
        </div>
        <div class="col-md-7">
            <h5 class="fw-bold mb-3">Tentang Kami</h5>
            <p class="about-text">
                Jasa Marga merupakan pengembang dan operator jalan tol pertama serta terbesar di Indonesia dengan pangsa pasar sebesar 45% untuk panjang jalan tol komersial yang telah beroperasi (±1.286 km). Dengan pengalaman selama lebih dari 46 tahun, Jasa Marga saat ini mengelola 36 konsesi jalan tol dengan total panjang jalan 1.736 km.
            </p>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</body>
</html>
