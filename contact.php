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















    <footer class="footer">
        <div class="footer-content">
            <!-- Logo & Description Section -->
            <div class="footer-section">
                <div class="footer-logo">
                    <img src="img/logo.png" alt="LPK Aikoku Terpadu Logo" width="150">
                </div>
                <div class="footer-info">
                    <p>Pusat Pelatihan Bahasa Jepang Terbaik untuk Mewujudkan Impian Berkarir Di Jepang</p>
                </div>
                <div class="social-links">
                    <a href="https://www.facebook.com/lpk.aikokuterpadu?locale=id_ID" title="Facebook"><i
                            class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/lpkaikokuterpadu/" title="Instagram"><i
                            class="fab fa-instagram"></i></a>
                    <a href="https://wa.me/+6285875962872" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://www.youtube.com/@lpkaikokuterpadu3616" title="YouTube"><i
                            class="fab fa-youtube"></i></a>
                    <a href="lpkaikokuterpadu@gmail.com" title="Email"><i class="fas fa-envelope"></i></a>
                </div>
            </div>

            <!-- Quick Links Section -->
            <div class="footer-section">
                <h3 class="footer-heading">Menu</h3>
                <ul class="footer-links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="profile.html">Profile</a></li>
                    <li><a href="program.html">Program</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="form.php" class="daftar-link">Daftar Sekarang</a></li>
                    <li><a href="login.php" class="daftar-link">Login</a></li>
                </ul>
            </div>

            <!-- Contact Info Section -->
            <div class="footer-section">
                <h3 class="footer-heading">Kontak & Jam Operasional</h3>
                <div class="footer-info">
                    <p><i class="fas fa-map-marker-alt"></i> Petunjungan, Jl. Raya Petunjungan, Petunjungan, Kec.
                        Bulakamba, Kabupaten Brebes, Jawa Tengah 52253</p>
                    <p><i class="fas fa-envelope"></i> lpkaikokuterpadu@gmail.com</p>
                    <p><i class="fas fa-phone"></i> 081930061985</p>
                    <div class="operating-hours">
                        <p><i class="far fa-clock"></i> Senin - Jumat: 08:00 - 17:00<br>Sabtu: 08:00 - 14:00</p>
                        <p class="closed">Minggu: Jadwalkan Terlebih Dahulu Jam Pertemuan</p>
                    </div>
                </div>
            </div>

            <!-- Maps Section -->
            <div class="footer-section">
                <h3 class="footer-heading">Lokasi Kami</h3>
                <div class="maps-container">
                <!-- border:0; digunakan untuk menghilangkan border di sekitar peta.
                allowfullscreen:memungkinkan peta untuk dibuka dalam mode layar penuh (fullscreen) jika pengguna memilihnya.
                loading="lazy": Memungkinkan pemuatan peta secara "lazy load", artinya peta hanya akan dimuat ketika pengguna
                                menggulirkan halaman hingga elemen iframe ini muncul di layar.
                referrerpolicy: Menentukan bagaimana informasi referer (sumber halaman) dikirim saat membuat permintaan.
                                no-referrer-when-downgrade berarti referer hanya akan dikirim jika protokolnya sama atau lebih aman (misalnya, HTTPS ke
                                HTTPS). -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3357.4110305641657!2d108.97572757419275!3d-6.912507667651758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fa5af84c2ae8d%3A0x6d0eb4890eba578f!2sLPK%20AIKOKU%20TERPADU!5e1!3m2!1sid!2sid!4v1730649739920!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" width="100%" height="200" style="border:0;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>

        <div class="copyright">
            <p>&copy; 2024 LPK Aikoku Terpadu. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>