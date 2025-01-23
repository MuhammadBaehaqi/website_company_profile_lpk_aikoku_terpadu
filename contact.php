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
    <style>/* Contact Container */#contact {
  padding-top: 80px;
  width: 100%; /* Lebar dari layar */
  height: 100vh; /* Tinggi 100% dari layar */
  background: url("img/tamu.png");
  background-size: cover; /* Memastikan gambar background menutupi seluruh area */
  background-position: center; /* Mengatur posisi gambar background di tengah */
  position: relative;
}
 html {
        scroll-behavior: smooth;
    }
    /* styling contact */
.container-contact {
  max-width: 1200px;
  margin: 0 auto;
   padding: 20px 30px; /* Menambahkan padding kiri dan kanan 30px */
}
.contact-text {
  text-align: center; /* Teks rata tengah */
  color: #fff;
  position: absolute;
  top: 50%; /* Posisi 50% dari atas */
  left: 50%; /* Posisi 50% dari kiri */
  transform: translate(-50%, -50%); /* Menggeser ke tengah */
  width: 100%;
}

.contact-text h1 {
  font-size: 36px;
  font-weight: bold;
  color: #00b300;
  margin-bottom: 20px; /* Memberikan jarak (ruang kosong) sebesar 20 pixel di bagian bawah elemen */
}

.contact-text p {
  font-size: 18px;
  color: #ffffff;
  margin: 0 20px; /* Nilai(0) mengatur margin atas dan bawah. Nilai kedua (20px) mengatur margin kanan dan kiri*/
  line-height: 1.6; /* Mengatur jarak antar baris dalam sebuah teks */
}

.info-text {
  font-size: 1.1rem;
  line-height: 1.6; /* jarak antar baris  */
  color: #555;
  margin-bottom: 2rem;
  text-align: center;
}

.contact-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 2rem;
  margin: 2rem 0; /* Memberikan margin atas dan bawah */
  padding: 0 20px; /* Memberikan padding kiri dan kanan 20px */
}


.contact-form, .contact-info {
  background: white;
  padding: 2rem;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Menambahkan shadow yang lebih lembut */
}

.form-group {
  margin-bottom: 1.5rem;
}

.form-group label {
  display: block;
  margin-bottom: 0.5rem;
  color: #333;
}

/* input dan textarea Menyediakan padding dan border ringan untuk elemen input.
textarea: Memberikan kemampuan untuk merubah ukuran vertikal */
.form-group input,
.form-group textarea {
  width: 100%;
  padding: 0.8rem; /* mengatur jarak antara konten dengan tepi elemen. */
  border: 1px solid #ddd;
  border-radius: 4px;
  font-size: 1rem;
}

.form-group textarea {
  height: 150px;
  resize: vertical; /*  dapat mengubah ukuran textarea secara vertikal (atas-bawah) saja */
}

.submit-btn {
  background-color: #00ff00;
  color: white;
  padding: 1rem 2rem; /* Jarak antara konten dan tepi tombol diatur menjadi 1 rem dan 2 rem di kiri-kanan. */
  border: none; /* Tidak ada garis batas pada tombol. */
  border-radius: 4px;
  cursor: pointer;
  font-size: 1rem;
  transition: background-color 0.3s;
}

.submit-btn:hover {
  background-color: #00b300;
}

.contact-info {
  background: white;
  padding: 2rem; /* Jarak antara konten dan tepi elemen akan menjadi 2 rem  */
  border-radius: 8px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.contact-info h3 {
  color: #333;
  margin-bottom: 1rem; /* Jarak bawah 1 rem */
}

.contact-info p {
  margin-bottom: 0.5rem; /* Jarak bawah 0.5 rem */
  color: #555;
}

.map-container {
  height: 400px;
  margin-top: 2rem; /* Jarak atas 2 rem */
   padding: 10px; /* Menambahkan padding agar map tidak menempel dengan sisi kontainer */
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2); /* Menambahkan shadow */
  border-radius: 8px; /* Agar sudut map menjadi lebih lembut */
}

.map-container iframe {
  width: 100%;
  height: 100%;
  border: none; /* Tidak ada garis batas pada iframe. */
  border-radius: 8px;
}

/* ukuran layar kurang dari atau sama dengan 768px (perangkat mobile), grid layout berubah menjadi satu kolom untuk elemen */
@media (max-width: 768px) {
  .contact-grid {
    grid-template-columns: 1fr; /* Pada ukuran layar ini, grid-template-columns diatur menjadi 1fr, untuk tata letak yang lebih baik pada layar kecil */
     padding: 0 15px; /* Padding untuk layar kecil */
  }

    .container-contact h1 {
        font-size: 2em;
    }

    .container-contact p {
        font-size: 1em;
    }
}
/* end styling contact */
/* Warna default tombol */
/* .btn-submit {
    background-color: #007BFF;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-submit:hover {
    background-color: #0056b3; 
}

.btn-submit:active {
    background-color: #004085; 
} */

</style>
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
                <form action="/BCK/admin/pesan/proses_contact.php" method="post">

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
                    +62 857-2522-1265</p>

                <p><strong>Email:</strong><br>
                    lpkaikokuterpadu@gmail.com</p>

                <p><strong>Jam Operasional:</strong><br>
                    Senin - Jumat: 08:00 - 17:00<br>Sabtu: 08:00 - 14:00<br>
                    Minggu: Jadwalkan Terlebih Dahulu Jam Pertemuan</p>
            </div>
        </div>

        <div class="map-container">
            <!-- allowfullscreen: untuk ditampilkan dalam mode layar penuh. -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3357.4110305641657!2d108.97572757419275!3d-6.912507667651758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fa5af84c2ae8d%3A0x6d0eb4890eba578f!2sLPK%20AIKOKU%20TERPADU!5e1!3m2!1sid!2sid!4v1730649739920!5m2!1sid!2sid" allowfullscreen></iframe>
        </div>


    <?php include 'footer.php'; ?>
</body>

</html>