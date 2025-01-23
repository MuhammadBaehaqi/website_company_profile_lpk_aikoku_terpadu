<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="Icon" href="img/logo.png" type="image/x-Icon">
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
      <style>
     #header {
  padding-top: 80px;
  width: 100%; /* Lebar dari layar */
  height: 100vh; /* Tinggi 100% dari layar */
  background: url("img/jepang.jpg");
  background-size: cover; /* Memastikan gambar background menutupi seluruh area */
  background-position: center; /* Mengatur posisi gambar background di tengah */
  position: relative;
}
/* Styling untuk header text */
.header-text {
  text-align: center; /* Teks rata tengah */
  color: #fff;
  position: absolute;
  top: 50%; /* Posisi 50% dari atas */
  left: 50%; /* Posisi 50% dari kiri */
  transform: translate(-50%, -50%); /* Menggeser ke tengah */
  width: 100%;
}

.header-text h1 {
  font-size: 36px;
  font-weight: bold;
  color: #00b300;
  margin-bottom: 20px; /* Memberikan jarak (ruang kosong) sebesar 20 pixel di bagian bawah elemen */
}

/* Styling untuk paragraf deskriptif */
.header-text p {
  font-size: 18px;
  color: #000000;
  margin: 0 20px; /* Nilai(0) mengatur margin atas dan bawah. Nilai kedua (20px) mengatur margin kanan dan kiri*/
  line-height: 1.6; /* Mengatur jarak antar baris dalam sebuah teks */
}

  /* Styling untuk button container */
.button-container {
  text-align: center; /* Teks rata tengah */
  position: absolute; /* mengatur elemen diposisikan dalam layout */
  top: 65%; /* Posisi 65% dari atas */
  left: 50%; /* Posisi 50% dari kiri */
  transform: translate(-50%, -50%); /* Menggeser ke tengah  */
  margin-top: 30px; /* Memberikan jarak (ruang kosong) sebesar 30 pixel di bagian atas elemen */
}

.button-container .btn {
  display: inline-block; /* Membuat tombol inline-block */
  background-color: #00b300;
  color: #ffffff;
  padding: 10px 20px; /* Padding dalam tombol */
  border-radius: 5px;
  text-decoration: none;
  margin: 0 10px;   /* Jarak antar tombol */
  transition: background-color 0.3s ease;
}

/* Hover effect untuk tombol */
.button-container .btn:hover {
  background-color:rgb(7, 16, 7);
}

.menu-icon {
  background-color: black;
  color: white;
  font-size: 24px;
  display: none; /* untuk tampilan "normal" layar besar, sehingga ikon menu tidak akan terlihat. */
}
/* gunanya untuk layar dengan lebar maksimum 768px. media query ini hanya berlaku untuk layar dengan lebar 768px atau kurang.*/
@media only screen and (max-width: 768px) {
  .nav-links {
    display: none; /* Untuk menyembunyikan menu */
  }

  .menu-icon {
    display: flex; /* layar dengan lebar maksimum 768px, sehingga ikon ini muncul dan tata letaknya bisa diatur. */
    align-items: center;
  }
}


.welcome-section {
  padding: 4rem 8%; /* Mengatur ruang di dalam elemen dengan kelas welcome-section. Padding adalah ruang di dalam batas, antara konten dan tepi elemen itu sendiri.  */
  text-align: center;
  /* background-color: #ffffff ; */
}

.welcome-heading {
  font-size: 2.5rem;
  color: #00b300;
  margin-bottom: 1rem;
}

.welcome-line {
  width: 200px; /* Lebar garis */
  height: 3px; /* Tinggi garis */
  background-color: #00b300; /* Warna garis hijau */
  margin: 0 auto 2rem;
}

.welcome-content {
  max-width: 1200px; /* menentukan lebar maksimum untuk elemen dengan kelas. Jika layar lebih sempit dari 1200 piksel, elemen ini akan menyesuaikan lebar untuk mengisi ruang yang tersedia.*/
  margin: 0 auto;
  text-align: center;
}

.welcome-content p {
  margin-bottom: 1.5rem; /* mengatur jarak di bagian bawah setiap paragraf */
  line-height: 1.6;
  font-size: 20px;
  color: #333;
}

/* Container untuk semua kartu */
.cards-container {
  max-width: 1200px; /* Lebar maksimum container */
  margin: 40px auto; /* Margin atas bawah 40px dan auto di kiri kanan untuk centering */
  padding: 0 20px; /* Padding kiri kanan 20px */
  display: flex; /* Menggunakan flexbox untuk layout */
  flex-wrap: wrap; /* Memungkinkan items untuk wrap ke baris baru */
  justify-content: center; /* Memusatkan items secara horizontal */
  gap: 30px; /* Jarak antar kartu 30px */
}

/* Styling untuk setiap kartu individual */
.card {
  background: white;
  border-radius: 8px; /* Sudut kartu melengkung 8px */
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Efek bayangan untuk dimensi diluar kartu */
  padding: 25px; /* Padding dalam kartu 25px */
  width: calc(
    50% - 45px
  ); /* untuk mengatur lebar elemen dengan perhitungan dinamis menggunakan fungsi calc().50%: Elemen akan mengambil setengah dari lebar container-nya (50% dari lebar elemen induknya).
  - 45px: Kemudian dari nilai 50% tersebut, dikurangi sebesar 45 piksel. */
  min-width: 280px; /* Lebar minimum kartu 280px */
  transition: transform 0.3s ease; /* Animasi smooth untuk efek hover */
}

/* Efek hover pada kartu */
.card:hover {
  transform: translateY(-5px); /* Kartu bergerak ke atas 5px saat di-hover */
}

.card-icon {
  background: #0a8270;
  width: 60px; /* Lebar container ikon */
  height: 60px; /* Tinggi container ikon */
  border-radius: 50%; /* Membuat bentuk lingkaran */
  display: flex; /* Flexbox untuk centering ikon */
  align-items: center; /* Memusatkan ikon secara vertikal */
  justify-content: center; /* Memusatkan ikon secara horizontal */
  margin-bottom: 20px; /* Memusatkan ikon secara horizontal */
}

/* Styling untuk ikon */
.card-icon i {
  color: white;
  font-size: 24px;
}

/* Styling untuk judul kartu */
.card-title {
  font-size: 20px;
  font-weight: bold;
  color: #333;
  margin-bottom: 15px; /* Jarak ke elemen di bawahnya */
}

/* Styling untuk deskripsi kartu */
.card-description {
  color: #666;
  line-height: 1.6; /* Jarak antar baris teks */
}

/* Media query untuk layar kecil (tablet/mobile) */
@media (max-width: 768px) {
  .card {
    width: 100%; /* Kartu mengambil lebar penuh pada layar kecil */
  }
}

.facilities-container {
  display: flex; /* Menggunakan flexbox layout */
  flex-wrap: wrap; /* Memungkinkan item untuk pindah ke baris baru jika tidak cukup ruang */
  justify-content: center; /* Memusatkan kartu-kartu secara horizontal */
  gap: 30px; /* Memberikan jarak 30px antara setiap kartu */
  padding: 40px 20px; /* Padding 40px atas-bawah, 20px kiri-kanan */
  max-width: 1200px; /* Lebar maksimal container 1200px */
  margin: 0 auto; /* Memusatkan container di halaman */
}

.facility-card {
  background: #fff;
  border-radius: 8px; /* Sudut kartu melengkung 8px */
  padding: 30px; /* Jarak antara konten dengan tepi kartu */
  text-align: center; /* Teks di dalam kartu diatur di tengah */
  width: 300px; /* Lebar setiap kartu 300px */
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Efek bayangan kartu */
  transition: transform 0.3s ease; /* Animasi saat hover */
}

.facility-card:hover {
  transform: translateY(
    -5px
  ); /* Kartu bergerak ke atas 5px saat cursor di atasnya */
}

.facility-icon {
  width: 60px; /* Lebar lingkaran ikon */
  height: 60px; /* Tinggi lingkaran ikon */
  background: #009879; 
  border-radius: 50%; 
  display: flex; /* Menggunakan flexbox */
  align-items: center; /* Memusatkan ikon secara vertikal */
  justify-content: center; /* Memusatkan ikon secara horizontal */
  margin: 0 auto 20px; /* Margin bawah 20px dan otomatis di kiri-kanan */
}

.facility-icon i {
  color: white;
  font-size: 24px; /* Ukuran ikon */
}

.facility-title {
  font-size: 20px; 
  font-weight: bold;
  color: #333; 
  margin-bottom: 15px; /* Jarak ke bawah 15px */
}

.facility-description {
  color: #666;
  line-height: 1.6; /* Jarak antar baris */
  font-size: 14px;
}

/* Container utama testimonial */


/* Media untuk layar kecil */

/* end styling index */
    html {
        scroll-behavior: smooth;
    }
    .button-container .btn {
  display: inline-block;
  background: linear-gradient(to bottom, #00b300, #006600); /* Gradasi warna */
  color: #ffffff;
  padding: 12px 24px; /* Ukuran tombol */
  border-radius: 8px;
  text-decoration: none;
  font-weight: bold;
  font-size: 16px;
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2); /* Efek bayangan */
  transition: all 0.3s ease; /* Efek transisi */
  transform: translateY(0); /* Posisi awal */
}

.button-container .btn:hover {
  background: linear-gradient(to bottom, #008000, #004d00); /* Gradasi warna saat hover */
  box-shadow: 0px 6px 8px rgba(0, 0, 0, 0.3); /* Memperbesar bayangan */
  transform: translateY(-3px); /* Tombol naik sedikit */
}

.button-container .btn:active {
  transform: translateY(1px); /* Tombol sedikit turun saat ditekan */
  box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2); /* Bayangan lebih kecil */
}

    </style>
</head>
<body>
  <div id="header">
  <!-- Navbar -->
  <?php include('navbar.php'); ?>
  <div class="header-text">
    <h1>LPK AIKOKU TERPADU <br>愛国テレパデｳ</h1> 
    <p>Pusat Pelatihan Bahasa Jepang Terbaik untuk Mewujudkan </p> 
    <p>Impian Berkarir Di Jepang Bersama LPK Aikoku Terpadu</p> 
  </div>
  <div class="button-container">
    <a href="program.php" class="btn">Program</a>
    <a href="form.php" class="btn">Daftar Sekarang</a>
  </div>
</div>

<section class="welcome-section">
  <h2 class="welcome-heading">SELAMAT DATANG</h2> 
  <div class="welcome-line"></div> <!--  garis di bawah heading "SELAMAT DATANG". -->
  <div class="welcome-content"> 
    <p>LPK Aikoku Terpadu adalah lembaga pelatihan bahasa Jepang yang siap membantumu mewujudkan impian berkarir di
      Jepang dengan program pelatihan berkualitas dan pembelajaran intensif.</p>
  </div>

  <h2 class="why-heading">Mengapa Memilih Kami</h2>
  <!-- card -->
  <div class="cards-container">
    <div class="card">
      <div class="card-icon">
        <i class="fas fa-graduation-cap"></i> 
      </div>
      <h3 class="card-title">Pengajar Berpengalaman</h3>
      <p class="card-description">
        Tim pengajar profesional yang terdiri dari native speaker dan instruktur tersertifikasi, LPK Aikoku Terpadu
        memastikan setiap siswa mendapat pembelajaran berkualitas tinggi. Pengajar kami memiliki pengalaman dalam
        mengajar bahasa Jepang dan siap membantu Anda mencapai kemahiran yang diinginkan.
      </p>
    </div>

    <div class="card">
      <div class="card-icon">
        <i class="fas fa-book"></i> <!-- untuk menampilkan ikon -->
      </div>
      <h3 class="card-title">Pelatihan Yang Singkat</h3> 
      <p class="card-description"> 
        Kami menawarkan program pelatihan yang efektif dan singkat, dirancang untuk mempersiapkan Anda dalam waktu
        singkat. Kurikulum kami mengikuti standar JLPT (Japanese Language Proficiency Test), dengan fokus pada
        kemampuan praktis yang mendukung kesiapan kerja.
      </p>
    </div>

    <div class="card">
      <div class="card-icon">
        <i class="fas fa-users"></i> <!-- untuk menampilkan ikon -->
      </div>
      <h3 class="card-title">Lembaga Terpecaya</h3>
      <p class="card-description">
        Sebagai lembaga pelatihan bahasa Jepang yang berkomitmen pada kualitas, LPK Aikoku Terpadu membatasi jumlah
        siswa di setiap kelas untuk memastikan perhatian penuh dan pembelajaran yang optimal bagi setiap peserta.
      </p>
    </div>

    <div class="card">
      <div class="card-icon">
        <i class="fa-regular fa-money-bill-1"></i> <!-- untuk menampilkan ikon -->
      </div>
      <h3 class="card-title">Biaya Terjangkau</h3> 
      <p class="card-description">
        Kami percaya bahwa pendidikan berkualitas tidak harus mahal. LPK Aikoku Terpadu menawarkan program berkualitas
        dengan biaya yang kompetitif dan pelatihan yang terjangkau.Biaya sudah termasuk materi pembelajaran,
        konsultasi karir, dan akses ke fasilitas belajar. Kami juga menyediakan opsi pembayaran cicilan untuk
        memudahkan Anda.
      </p>
    </div>
  </div>

  <!-- Fasilitas -->
  <h2 class="fasilitas-heading">Fasilitas</h2> 
  <div class="facilities-container"> 
    <div class="facility-card"> 
      <!-- Bagian ikon -->
      <div class="facility-icon">
        <i class="fas fa-home"></i>
      </div>
      <!-- Bagian Judul -->
      <h3 class="facility-title">Asrama</h3>
      <p class="facility-description">
        Asrama nyaman dan bersih dengan fasilitas lengkap untuk mendukung proses belajar. Lokasi strategis dan
        lingkungan yang kondusif untuk belajar bahasa Jepang.
      </p>
    </div>

    <div class="facility-card"> 
      <!-- Bagian ikon -->
      <div class="facility-icon">
        <i class="fas fa-wifi"></i>
      </div>
      <!-- Bagian Judul -->
      <h3 class="facility-title">Wifi</h3>
      <p class="facility-description">
        Koneksi internet cepat dan stabil tersedia 24 jam untuk mendukung pembelajaran online dan akses materi digital.
      </p>
    </div>

    <div class="facility-card"> 
      <!-- Bagian ikon -->
      <div class="facility-icon">
        <i class="fas fa-book"></i>
      </div>
      <!-- Bagian Judul -->
      <h3 class="facility-title">Modul</h3>
      <p class="facility-description">
        Modul pembelajaran komprehensif dan terstruktur sesuai standar JLPT, dilengkapi dengan latihan dan evaluasi
        berkala.
      </p>
    </div>

    <div class="facility-card"> 
      <!-- Bagian ikon -->
      <div class="facility-icon">
        <i class="fas fa-tshirt"></i>
      </div>
      <!-- Bagian Judul -->
      <h3 class="facility-title">Kaos</h3>
      <p class="facility-description">
        Seragam kaos dengan desain eksklusif untuk menciptakan identitas dan kebersamaan dalam komunitas belajar.
      </p>
    </div>
  </div>
</section>

<?php include 'testimoni.php';?>

<?php include 'footer.php'; ?>
</body>

</html>