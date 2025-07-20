<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Jalan Tol</title>
    <link rel="Icon" type="png" href="img/jasamarga.png">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: #d9d9daff;">
    <nav class="navbar navbar-expand-lg m-0 p-0" style="background-color: #1F4A84;">
        <div class="container-fluid">
            <a class="navbar-brand col-2 p-0" href="#">
                <img src="img/putih.svg" alt="" class="col-10 ps-4 ms-3">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav col-12 justify-content-center">
                    <li class="nav-item fs-5 me-4 py-3 navbarr">
                        <a class="nav-link text-white" href="tentangkami.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item fs-5 py-3 me-4 navbarr">
                        <a class="nav-link text-white" aria-current="page" href="index.php">Data Jalan Tol</a>
                    </li>
                    <li class="nav-item fs-5  py-3 me-5 borderactive navbarr">
                        <a class="nav-link active fw-semibold text-white" href="kontak.php">Kontak Kami</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="d-flex justify-content-end ms-5 ps-5 me-5">
            <a href="logout.php" class="btn rounded-5 ms-5 px-3 py-2 fw-semibold button3" onclick="return confirm('Apakah anda yakin ingin keluar ?')">
                <i class="bi bi-box-arrow-right fs-5 text-white"></i>
            </a>
        </div>
    </nav>

    <div class="col-8 mt-5 mx-auto">
        <div class="bg-white rounded-4 d-flex align-items-center p-4 mb-5">
            <div class="col-11 mx-auto">
                <div class="row">
                    <div class="col-12 text-center mb-3">
                        <h1 style="margin-bottom: -6px;">Kontak Kami</h1>
                        <small class="text-secondary fw-light">Jasamarga Tollroad Operator 2025</small>
                    </div>
                </div>

                <div class="container py-5">
                    <div class="row">
                        <!-- Form Kontak -->
                        <div class="col-md-6 mb-4">
                            <form onsubmit="sendMessage(); return false;">
                                <div class="mb-3">
                                    <label for="name">Nama Anda</label>
                                    <input type="text" id="name" placeholder="Masukkan Nama Anda" class="form-control shadow-none" required>
                                </div>

                                <div class="mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" placeholder="Masukkan Email Anda" class="form-control shadow-none" required>
                                </div>

                                <div class="mb-3">
                                    <label for="message">Pesan Anda</label>
                                    <textarea id="message" placeholder="Masukkan Pesan Anda" cols="30" rows="3" class="form-control shadow-none" required></textarea>
                                </div>

                                <button class="btn button1 px-4 py-1 mt-3" type="submit">Kirim Pesan</button>
                            </form>
                        </div>

                        <!-- Maps -->
                        <div class="col-md-6">
                            
                            <div class="ratio ratio-4x3">
                                <iframe 
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.5689873989136!2d106.87621537475114!3d-6.290898693698114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f29c898a114b%3A0xbdc38eee360b6262!2sPT%20Jasa%20Marga%20(Persero)%20Tbk!5e1!3m2!1sid!2sid!4v1753024038467!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" 
                                    width="100%" 
                                    height="100%" 
                                    style="border:0;" 
                                    allowfullscreen="" 
                                    loading="lazy" 
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Script WhatsApp -->
    <script>
        function sendMessage() {
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            const url = "https://api.whatsapp.com/send?phone=6288218532964&text=Halo%20Admin.%0ASaya%20*" 
                        + encodeURIComponent(name) + "*%0AEmail%20saya:%20" 
                        + encodeURIComponent(email) + "%0A%0A" 
                        + encodeURIComponent(message);

            window.open(url);
        }
    </script>
</body>
</html>
