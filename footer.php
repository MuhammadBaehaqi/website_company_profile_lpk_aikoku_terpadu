<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="Icon" href="img/logo.png" type="image/x-Icon">
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    /* style footer */
.footer {
  background-color: #1a1a1a;
  color: #ffffff;
  padding: 60px 0 30px; /* Jarak antara konten dan tepi footer diatur menjadi 60 piksel di atas dan 30 piksel di bawah. */
  font-family: Arial, sans-serif;
  width: 100%;
  margin: 0;
  position: relative;
}

.footer-content {
  max-width: 1400px;
  margin: 0 auto; /* diatur menjadi 0 auto,sehingga konten berada ditengah */
  display: grid; /* menggunakan grid layout dengan 4 kolom */
  grid-template-columns: repeat( 4, 1fr); /* Mengatur kolom pada grid dengan menggunakan fungsi repeat. dengan jumlah 4 kolom dan 1fr untuk membagi ruang secara merata   */
  gap: 40px;
  padding: 0 40px; /* Padding kiri dan kanan konten footer diatur menjadi 40 piksel */
}

.footer-section {
  margin-bottom: 30px; /* Margin bawah setiap bagian footer diatur menjadi 30 piksel. */
}

.footer-logo img {
  width: 150px;
  margin-bottom: 20px; /* Padding kiri dan kanan konten footer diatur menjadi 20 piksel */
}

.footer-heading {
  color: #00ff37;
  font-size: 20px;
  margin-bottom: 20px; /* Margin bawah judul diatur menjadi 20 piksel. */
  font-weight: bold;
}

.footer-info p {
  margin: 12px 0; /* Margin atas dan bawah paragraf diatur menjadi 12 piksel. */
  line-height: 1.6; /* Tinggi baris paragraf diatur menjadi 1.6. */
  display: flex; /* Agar sejajar dengan ikon disampingnya */
  align-items: center; /* Mengatur agar posisi berada ditengah secara vertikal, sehingga ikon akan sejajar dengan teks ditengah baris. */
  gap: 10px;
}

.footer-info i {
  color: #00ff37;
  width: 20px;
}

/* Quick Links Styling */
.footer-links {
  list-style: none; /* Menghilangkan bullet atau tanda list pada elemen menu */
  padding: 0; /* Menghapus padding default pada elemen daftar, membuat elemen di dalamnya menempel langsung ke tepi elemen pembungkus */
  margin: 0; /* Menghapus margin default pada elemen daftar, sehingga tidak ada jarak tambahan di luar elemen daftar. */
}

.footer-links li {
  margin-bottom: 12px; /* Menambahkan jarak bawah (margin) sebesar 12 piksel pada setiap item daftar */
}

.footer-links a {
  color: #ffffff;
  text-decoration: none; /* untuk menghilangkan underline atau garis bawah */
  transition: color 0.3s ease;
  display: inline-block;
}

.footer-links a:hover {
  color: #00ff37;
}

.daftar-link {
  display: inline-block; /* Mengatur elemen .daftar-link agar memiliki sifat seperti elemen blok */
  background-color: #00ff37;
  color: #000000;
  padding: 12px 25px; /* Padding antara konten dan tepi tombol diatur menjadi 12 piksel atas-bawah dan 25 piksel kiri-kanan. */
  border-radius: 25px;
  text-decoration: none; /* Menghilangkan underline */
  font-weight: bold;
  text-transform: uppercase;
  font-size: 14px;
  margin-top: 15px;
  transition: all 0.3s ease;
  border: 2px solid #00ff37; /* Menambahkan garis tepi hijau terang dengan ketebalan 2 piksel */
}

.daftar-button:hover {
  background-color: transparent; /* mengatur warna latar belakang menjadi transparan */
  color: #00ff37;
  transform: translateY(-3px); /*  Menggeser elemen ke atas sebesar 3 piksel */
  box-shadow: 0 5px 15px rgba(0, 255, 55, 0.3); /* Menambahkan bayangan di bawah elemen dengan efek warna hijau */
}

.footer-links li:last-child {
  /* Padding kiri dan kanan konten footer diatur menjadi 40 piksel */
  margin-top: 20px; /* Menambahkan jarak (margin) atas sebesar 20 piksel pada item terakhir daftar footer */
}

.footer-links .daftar-link {
  display: inline-block; /* Padding kiri dan kanan konten footer diatur menjadi 40 piksel */
  background-color: #00ff37;
  color: #000000 !important; /* !important untuk memberi prioritas tinggi pada suatu aturan gaya,  */
  padding: 12px 25px; /* Menambahkan padding 12px atas/bawah dan 25px kiri/kanan */
  border-radius: 25px;
  text-decoration: none; /* Menghilangkan garis bawah pada teks */
  font-weight: bold;
  text-transform: uppercase;
  font-size: 14px;
  transition: all 0.3s ease;
  border: 2px solid #00ff37; /* Menambahkan garis tepi hijau dengan ketebalan 2 piksel */
}

.footer-links .daftar-link:hover {
  background-color: transparent;
  color: #00ff37 !important; /* Mengubah warna teks menjadi hijau cerah saat di-hover */
  transform: translateY(-3px); /* Menggeser elemen ke atas sebesar 3 piksel saat di-hover */
  box-shadow: 0 5px 15px rgba(0, 255, 55, 0.3);
}

/* Social Links Styling */
.social-links {
  display: flex; /* Menampilkan elemen sebagai flexbox untuk pengaturan tata letak */
  gap: 15px;
  margin-top: 20px; /* Menambahkan jarak (margin) atas sebesar 20 piksel */
}

.social-links a {
  color: #ffffff;
  font-size: 20px;
  transition: color 0.3s ease;
  width: 35px;
  height: 35px;
  display: flex; /* Menampilkan elemen sebagai flexbox */
  align-items: center; /* Menyelaraskan konten secara vertikal di tengah */
  justify-content: center; /* Menyelaraskan konten secara horizontal di tengah */
  border-radius: 50%;
  background-color: #333;
}

.social-links a:hover {
  color: #00ff37;
  background-color: #444;
}

/* Operating Hours Styling */
.operating-hours {
  margin-top: 15px; /* Menambahkan jarak (margin) atas sebesar 15 piksel */
}

.operating-hours p {
  margin: 8px 0; /* Menambahkan jarak atas dan bawah pada paragraf sebesar 8 piksel */
}

.closed {
  color: #ff4444;
}

/* Maps Container Styling */
.maps-container {
  width: 100%;
  border-radius: 8px;
  overflow: hidden; /* Memotong konten yang melampaui batas elemen */
}

.maps-container iframe {
  width: 100%;
  height: 200px;
  border: none; /* Menghilangkan garis tepi pada elemen iframe */
}

/* Copyright Section */
.copyright {
  text-align: center; /* Menyelaraskan teks ke tengah */
  padding-top: 30px; /* Menambahkan padding atas sebesar 30 piksel */
  margin-top: 30px; /* Menambahkan margin atas sebesar 30 piksel */
  border-top: 1px solid #333;
}

/* Responsive Design */
@media (max-width: 1200px) {
  .footer-content {
    grid-template-columns: repeat(2, 1fr); /* Mengatur tata letak grid dengan dua kolom saat lebar layar kurang dari 1200px */
  }
}

@media (max-width: 768px) {
  .footer-content {
    grid-template-columns: 1fr; /* Mengatur tata letak grid menjadi satu kolom saat lebar layar kurang dari 768px */
    padding: 0 20px; /* Menambahkan padding kiri dan kanan sebesar 20 piksel */
  }

  .footer {
    padding: 40px 0 20px; /* Menambahkan padding atas sebesar 40 piksel dan bawah 20 piksel */
  }

  .maps-container iframe {
    height: 180px; /* Mengurangi tinggi peta menjadi 180 piksel saat lebar layar kurang dari 768px */
  }
}
/* end styling footer */
</style>
</head>
<body>

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
                    <a href="https://wa.me/+6285725221265" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://www.youtube.com/@lpkaikokuterpadu3616" title="YouTube"><i
                            class="fab fa-youtube"></i></a>
                    <a href="lpkaikokuterpadu@gmail.com" title="Email"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
    
            <!-- Bagian Tautan Navbar -->
            <div class="footer-section">
                <h3 class="footer-heading">Menu</h3>
                <ul class="footer-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="program.php">Program</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="form.php" class="daftar-link">Daftar Online</a></li>
                    <li><a href="login.php" class="daftar-link">Login</a></li>
                </ul>
            </div>
    
            <!-- Bagian Info Kontak -->
            <div class="footer-section">
                <h3 class="footer-heading">Kontak & Jam Operasional</h3>
                <div class="footer-info">
                    <p><i class="fas fa-map-marker-alt"></i> Petunjungan, Jl. Raya Petunjungan, Petunjungan, Kec.
                        Bulakamba, Kabupaten Brebes, Jawa Tengah 52253</p>
                    <p><i class="fas fa-envelope"></i> lpkaikokuterpadu@gmail.com</p>
                    <p><i class="fas fa-phone"></i>+62 857-2522-1265</p>
                    <div class="operating-hours">
                        <p><i class="far fa-clock"></i> Senin - Jumat: 08:00 - 17:00<br>Sabtu: 08:00 - 14:00</p>
                        <p class="closed">Minggu: Jadwalkan Terlebih Dahulu Jam Pertemuan</p>
                    </div>
                </div>
            </div>
    
            <!-- Bagian Maps -->
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
        <!-- &copy;: menghasilkan simbol hak cipta (©). -->
        <div class="copyright">
            <p>&copy; 2024 LPK Aikoku Terpadu. All rights reserved.</p>
        </div>
    </footer>
    </body>
    </html>