<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Statistik Tol</title>
    <link rel="icon" type="image/png" href="img/jasamarga.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100..900&display=swap" rel="stylesheet">
</head>

<body style="background-color: #d9d9daff;">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top m-0 p-0" style="background-color: #1F4A84; z-index: 1030;">
        <div class="container-fluid">
            <a class="navbar-brand col-2 p-0" href="">
                <img src="img/putih.svg" alt="Logo" class="col-10 ps-4 ms-3">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav col-12 justify-content-center">
                    <li class="nav-item fs-5 me-4 py-3 navbarr borderactive">
                        <a class="nav-link text-white active fw-semibold" href="tentangkami.php">Beranda</a>
                    </li>
                    <li class="nav-item fs-5 py-3 me-4 navbarr">
                        <a class="nav-link text-white" href="index.php">Data Jalan Tol</a>
                    </li>
                    <li class="nav-item fs-5 py-3 me-5 navbarr">
                        <a class="nav-link text-white" href="kontak.php">Kontak Kami</a>
                    </li>
                </ul>
            </div>

            <div class="d-flex justify-content-end ms-5 ps-5 me-5">
                <a href="logout.php" class="btn rounded-5 ms-5 px-3 py-2 fw-semibold button3"
                    onclick="return confirm('Apakah anda yakin ingin keluar ?')">
                    <i class="bi bi-box-arrow-right fs-5 text-white"></i>
                </a>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel"
        data-bs-interval="30000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/Jalan Tol Bali Mandara.jpeg" class="d-block w-100" alt="Jalan Tol Bali Mandara"
                    style="height: 650px; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Jalan Tol Bali Mandara</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/Jalan Tol Cipularang.jpeg" class="d-block w-100" alt="Jalan Tol Cipularang"
                    style="height: 650px; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Jalan Tol Cipularang</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/Jalan Tol Semarang-Solo.jpg" class="d-block w-100" alt="Jalan Tol Semarang-Solo"
                    style="height: 650px; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Jalan Tol Semarang-Solo</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- Tentang Kami -->
    < <nav class="mt-5 pt-4 col-12 col-lg-12 col-md-12 col-sm-12 ">
        <div class="nav nav-underline justify-content-center" id="nav-tab" role="tablist">
            <button class="nav-link active " id="nav-home-tab " data-bs-toggle="tab" data-bs-target="#nav-home"
                type="button" role="tab" aria-controls="nav-home" aria-selected="true">Tentang Kami</button>
            <button class="nav-link mx-5" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Kenapa Harus Memilih
                Kami?</button>
            <button class="nav-link " id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Visi & Misi</button>

        </div>
        </nav>

        <div class="container-fluid mb-5 pb-5 tab-content " id="nav-tabContent">

            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                tabindex="0">
                <div class="d-flex justify-content-center">

                    <div class=" col-lg-5 pt-5 col-sm-4 text-end align-items-center">
                        <img src="img/margajasa.jpg" alt="" width="70%" class="gambartentangkami">
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 col-sm-6 d-flex justify-content-left align-items-center">

                        <div class="col-12 col-lg-8 col-md-10 col-sm-10 mt-4 tentangkami ps-5 ms-5 "
                            style="color: #879694;">
                            <h5 class=""><span class="fw-bold">Jasa Marga</span> Jasa Marga merupakan pengembang dan
                                operator jalan tol pertama serta terbesar di Indonesia dengan pangsa pasar sebesar 45%
                                untuk panjang jalan tol komersial yang telah beroperasi (±1.286 km). Dengan pengalaman
                                selama lebih dari 46 tahun, Jasa Marga saat ini mengelola 36 konsesi jalan tol dengan
                                total panjang jalan 1.736 km. <h5 class="
                        py-3 "> <span class="fw"> Sebagai salah satu Badan Usaha Milik Negara, 70% saham Jasa Marga
                                        dimiliki oleh Pemerintah Indonesia. Sejak 2007, Jasa Marga menjadi perusahaan
                                        publik melalui Penawaran Umum Perdana Saham (Initial Public Offering/IPO) dan
                                        mencatatkan sahamnya di Bursa Efek Indonesia.
                        </div>


                    </div>
                </div>
            </div>

            <div class="tab-pane fade " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">

                <div class="container-fluid mt-5 pt-5">
                    <div class="justify-content-center row ">
                        <div class="col-11 col-lg-3 col-md-3 col-sm-12 mb-5 shadow-lg p-3 rounded-3 bg-secondary ">
                            <div class="text-center col-5 col-lg-5 col-md-5 col-sm-5 mx-auto">
                                <img src="img/terpercaya1.svg" alt="">
                            </div>
                            <h1 class="text-white fs-5 mb-4 text-center fw-semibold col-5 col-lg-4 col-md-6 col-sm-12 pb-1 mx-auto "
                                style="border-bottom: 2px solid white;">Pengalaman dan Keahlian</h1>
                            <p class="col-10 col-sm-10 col-md-10 col-lg-10 text-center mx-auto text-white">Jasa Marga
                                memiliki pengalaman panjang dalam industri jalan tol, termasuk dalam perencanaan,
                                pembangunan, pengoperasian, dan pemeliharaan jalan tol.
                            </p>

                        </div>
                        <div class="col-11 col-lg-3 col-md-3 col-sm-12 mb-5 rounded-3 mx-5 py-3"
                            style="background-color: #e2e2e2; color: #879694;">
                            <div class="text-center col-5 col-lg-5 col-md-5 col-sm-5 mx-auto pb-3">
                                <img src="img/terjangkau.svg" alt="">
                            </div>
                            <h1 class="fs-5 mb-4 text-center fw-semibold col-9 col-lg-6 col-md-8 col-sm-12 pb-1 mx-auto "
                                style="border-bottom: 2px solid #879694; color: #879694;">Skala dan Jangkauan</h1>
                            <p class="col-10 col-sm-10 col-md-10 col-lg-10 text-center mx-auto">Sebagai pengembang jalan
                                tol terbesar di Indonesia, Jasa Marga memiliki jangkauan luas dan mampu mengelola
                                proyek-proyek jalan tol skala besar.
                            </p>

                        </div>

                        <div class="col-11 col-lg-3 col-md-3 col-sm-12 mb-5 shadow-lg p-3 rounded-3 "
                            style="background-color: #879694;">
                            <div class="text-center col-5 col-lg-5 col-md-5 col-sm-5 mx-auto pb-1">
                                <img src="img/kreatif.svg" alt="">
                            </div>
                            <h1 class="text-white fs-5 mb-4 text-center fw-semibold col-3 col-lg-3 col-md-5 col-sm-12 pb-1 mx-auto "
                                style="border-bottom: 2px solid white;">Inovasi dan Transformasi</h1>
                            <p class="col-10 col-sm-10 col-md-10 col-lg-10 text-center mx-auto text-white">Jasa Marga
                                terus berupaya untuk berinovasi dan bertransformasi, termasuk dalam penerapan
                                prinsip-prinsip tata kelola perusahaan yang baik (GCG).

                            </p>

                        </div>

                        <div class="col-11 col-lg-3 col-md-3 col-sm-12 mb-5 shadow-lg p-3 rounded-3 "
                            style="background-color: #879694;">
                            <div class="text-center col-7 col-lg-7 col-md-7 col-sm-7 mx-auto">
                                <img src="img/konsep.svg" alt="">
                            </div>
                            <h1 class="text-white fs-5 mb-4 text-center fw-semibold col-11 col-lg-8 col-md-10 col-sm-12 pb-1 mx-auto "
                                style="border-bottom: 2px solid white;">Komitmen Terhadap Pembangunan Nasional</h1>
                            <p class="col-10 col-sm-10 col-md-10 col-lg-10 text-center mx-auto text-white">Jasa Marga
                                memiliki komitmen untuk berkontribusi pada pembangunan infrastruktur jalan tol di
                                seluruh Indonesia, yang pada akhirnya akan mendorong pertumbuhan ekonomi.

                            </p>

                        </div>
 
                        <div class="col-11 col-lg-3 col-md-3 col-sm-12 mb-5  rounded-3 mx-5 py-3"
                            style="background-color: #e2e2e2;">
                            <div class="text-center col-5 col-lg-5 col-md-5 col-sm-5 mx-auto">
                                <img src="img/lokasi.svg" alt="">
                            </div>
                            <h1 class=" fs-5 mb-4 text-center fw-semibold col-9 col-lg-6 col-md-8 col-sm-12 pb-1 mx-auto "
                                style="border-bottom: 2px solid #879694; color: #879694;">Stabilitas dan Reputasi</h1>
                            <p class="col-10 col-sm-10 col-md-10 col-lg-10 text-center mx-auto" style="color: #879694;">
                                Sebagai BUMN, Jasa Marga menawarkan stabilitas pekerjaan dan reputasi yang baik dalam
                                industri.
                            </p>

                        </div>
                        <div class="col-11 col-lg-3 col-md-3 col-sm-12 mb-5 shadow-lg p-3 rounded-3  bg-secondary">
                            <div class="text-center col-5 col-lg-5 col-md-5 col-sm-5 mx-auto">
                                <img src="img/pengalaman.svg" alt="" width="90%">
                            </div>
                            <h1 class="text-white fs-5 mb-4 text-center fw-semibold col-7 col-lg-6 col-md-8 col-sm-12 pb-1 mx-auto "
                                style="border-bottom: 2px solid white;">Good Corporate Governance (GCG)</h1>
                            <p class="col-10 col-sm-10 col-md-10 col-lg-10 text-center mx-auto text-white">Jasa Marga
                                menerapkan prinsip-prinsip GCG dalam pengelolaan perusahaan, memastikan transparansi,
                                akuntabilitas, dan efisiensi.

                            </p>

                        </div>



                        <div class="col-11 col-lg-3 col-md-3 col-sm-12 mb-5 shadow-lg p-3 rounded-3 bg-secondary ">
                            <div class="text-center col-7 col-lg-7 col-md-7 col-sm-7 mx-auto pb-2">
                                <img src="img/prof.svg" alt="">
                            </div>
                            <h1 class="text-white fs-5 mb-4 text-center fw-semibold col-10 col-lg-8 col-md-10 col-sm-12 pb-1 mx-auto "
                                style="border-bottom: 2px solid white;">Didukung oleh Pemerintah</h1>
                            <p class="col-10 col-sm-10 col-md-10 col-lg-10 text-center mx-auto text-white">Jasa Marga
                                didukung oleh pemerintah dalam pengembangan jalan tol, termasuk dalam hal permodalan dan
                                pembebasan lahan.


                            </p>

                        </div>
                        <div class="col-11 col-lg-3 col-md-3 col-sm-12 mb-5 rounded-3 mx-5 py-3"
                            style="background-color: #e2e2e2;">
                            <div class="text-center col-5 col-lg-5 col-md-5 col-sm-5 mx-auto pb-2">
                                <img src="img/ok.svg" alt="">
                            </div>
                            <h1 class=" fs-5 mb-4 text-center fw-semibold col-7 col-lg-5 col-md-7 col-sm-12 pb-1 mx-auto "
                                style="border-bottom: 2px solid #879694; color: #879694;">Mitra Bisnis Strategis</h1>
                            <p class="col-10 col-sm-10 col-md-10 col-lg-10 text-center mx-auto" style="color: #879694;">
                                Jasa Marga menjalin kerja sama dengan mitra bisnis strategis yang memiliki keahlian di
                                bidangnya untuk memastikan kualitas pekerjaan yang optimal.

                            </p>

                        </div>

                        <div class="col-11 col-lg-3 col-md-3 col-sm-12 mb-5 shadow-lg p-3 rounded-3 "
                            style="background-color: #879694;">
                            <div class="text-center col-5 col-lg-5 col-md-5 col-sm-5 mx-auto">
                                <img src="img/24.svg" alt="">
                            </div>
                            <h1 class="text-white fs-5 mb-4 text-center fw-semibold col-7 col-lg-5 col-md-7 col-sm-12 pb-1 mx-auto "
                                style="border-bottom: 2px solid white;"> Peningkatan Konektivitas Nasional</h1>
                            <p class="col-10 col-sm-10 col-md-10 col-lg-10 text-center mx-auto text-white">Jasa Marga
                                berperan penting dalam meningkatkan konektivitas nasional melalui pembangunan jalan tol,
                                yang pada akhirnya akan mendukung mobilitas masyarakat dan distribusi barang.

                            </p>

                        </div>




                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">

                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                    tabindex="0">
                    <div class="d-flex justify-content-center ">

                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab" tabindex="0">
                            <div class="container my-4">
                                <div class="row align-items-center">
                                    <!-- Kolom Gambar -->
                                    <div class="col-lg-6 col-md-12 text-center mb-4 mb-lg-0">
                                        <img src="img/pusat.jpg" alt="Pusat" class="img-fluid rounded shadow"
                                            style="max-width: 100%; height: auto;">
                                    </div>

                                    <!-- Kolom Teks -->
                                    <div class="col-lg-6 col-md-12">
                                        <div style="color: #879694;">
                                            <h5 class="fw-semibold">Inovasi menuju peningkatan nilai yang berkelanjutan
                                            </h5>
                                            <p class="mt-3">
                                                1. Mengembangkan jaringan jalan tol dan menjalankan usaha di rantai
                                                nilai bisnis dalam skala nasional maupun internasional. <br><br>
                                                2. Mengembangkan inovasi untuk memberikan pelayanan unggul, meningkatkan
                                                keselamatan, kenyamanan, dan kemudahan perjalanan, serta menjalankan
                                                operasi dan proses bisnis Perusahaan dengan efisien dan
                                                berkesinambungan. <br><br>
                                                3. Menerapkan prinsip-prinsip lingkungan, sosial, dan tata kelola
                                                Perusahaan yang baik untuk memastikan ketahanan usaha. <br><br>
                                                4. Mendorong peningkatan manfaat yang berkelanjutan bagi masyarakat,
                                                pemegang saham, dan stakeholder lainnya, serta peningkatan nilai
                                                Perusahaan secara menyeluruh.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

        </div>

        </div>



        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
        </script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
</body>

</html>