<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    <link rel="Icon" type="png" href="img/jasamarga.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div class="container py-5">
        <div class="row">
            <!-- Form Kontak -->
            <div class="col-md-6 mb-4">
                <h1 class="text-dark mb-4">Contact Us</h1>
                <form onsubmit="sendMessage(); return false;">
                    <div class="mb-3">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" placeholder="Your Name" class="form-control shadow-none" required>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="email" class="form-control shadow-none" required>
                    </div>

                    <div class="mb-3">
                        <label for="message">Your Message</label>
                        <textarea id="message" cols="30" rows="3" class="form-control shadow-none" required></textarea>
                    </div>

                    <button class="btn btn-primary px-4" type="submit">Send Message</button>
                </form>
            </div>

            <!-- Maps -->
            <div class="col-md-6">
                <h2 class="text-dark mb-4">Lokasi Perusahaan</h2>
                <div class="ratio ratio-4x3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d507266.9497508056!2d106.92826474027962!3d-6.644059906546047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e67c27dd4c51%3A0x17a4ecf4d1cfb49c!2sPT%20Jasa%20Marga%20RO3%20JMT%20Ruas%20Purbaleunyi!5e0!3m2!1sid!2sid!4v1753014505904!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
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
