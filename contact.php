<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
    <link rel="Icon" href="img/logo.png" type="image/x-Icon">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div id="contact">
        <?php include('navbar.php'); ?>
    
    <div class="container-contact">
        <!-- <img src="img/contact.png" alt="LPK Aikoku Terpadu Interior" class="hero-image"> -->
        <div class="contact-text">
            <h1>Hubungi Kami</h1>
            <p>Dapatkan infromasi yang sebenar-benarnya tentang Jepang <br>dan program pemagangan kami. Kami siap
                membantu Anda mencapai impian bekerja di Jepang.</p>
        </div>
</div>
</div>
<!-- konten utama contact grid untuk mengelompokkan dan menyusun dua bagian, yaitu formulir pengiriman pesan dan informasi kontak,
dalam layout grid. -->
<!-- Label untuk memberikan petunjuk kepada pengguna mengenai data yang diminta. -->
<!-- <input> dan <textarea>: Elemen input tempat pengguna memasukkan data mereka. -->
<!-- <textarea> digunakan untuk pesan atau kesan yang lebih panjang. -->
<!-- required: Atribut yang memastikan pengguna tidak dapat mengirimkan formulir tanpa mengisi kolom tersebut. -->
        <div class="contact-grid">
            <div class="contact-form">
                <h2>Kirim Pesan</h2>
                <form action="proses_contact.php" method="post">
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" id="name" name="kirim_name" required>
                    </div>
                    <div class="form-group">
                        <label for="whatsapp">Nomor WhatsApp</label>
                        <input type="text" id="no_wa" name="kirim_wa" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input type="email" id="email" name="kirim_email" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <input type="text" id="alamat" name="kirim_alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan/Kesan</label>
                        <textarea id="message" name="kirim_pesan" required></textarea>
                    </div>
                    <button type="submit" name="kirim_data" class="submit-btn">Kirim Pesan</button>
                </form>
            </div>

            <!-- <strong> digunakan untuk menebalkan teks -->
            <div class="contact-info">
                <h3>Informasi Kontak</h3>
                <p><strong>Alamat:</strong><br>
                    Petunjungan, Jl. Raya Petunjungan, Petunjungan, Kec. Bulakamba, Kabupaten Brebes, Jawa Tengah 52253</p>

                <p><strong>Telepon:</strong><br>
                    081930061985</p>

                <p><strong>Email:</strong><br>
                    lpkaikokuterpadu@gmail.com</p>

                <p><strong>Jam Operasional:</strong><br>
                    Senin - Jumat: 08:00 - 17:00<br>Sabtu: 08:00 - 14:00<br>
                    Minggu: Jadwalkan Terlebih Dahulu Jam Pertemuan</p>
            </div>
        </div>

        <div class="map-container">
            <!-- Ganti src dengan URL Google Maps yang sesuai -->
            <!-- allowfullscreen: Mengizinkan peta untuk ditampilkan dalam mode layar penuh. -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3357.4110305641657!2d108.97572757419275!3d-6.912507667651758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fa5af84c2ae8d%3A0x6d0eb4890eba578f!2sLPK%20AIKOKU%20TERPADU!5e1!3m2!1sid!2sid!4v1730649739920!5m2!1sid!2sid" allowfullscreen></iframe>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>