<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="style.css">
  <link rel="Icon" href="img/logo.png" type="image/x-Icon">
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

    <div class="facility-card"> 
      <!-- Bagian ikon -->
      <div class="facility-icon">
        <i class="fas fa-desktop"></i>
      </div>
      <!-- Bagian Judul -->
      <h3 class="facility-title">Ruang Komputer</h3>
      <p class="facility-description">
        Laboratorium komputer modern dengan software pembelajaran bahasa Jepang terkini untuk praktik dan latihan
        mandiri.
      </p>
    </div>
  </div>
</section>

<div class="testimonial-container">
  <div class="title-wrapper">
    <div class="decorative-line"></div>
    <h2 class="title">Testimoni Alumni<br><span class="title-second-line">Lpk Aikoku Terpadu</span></h2>
    <div class="decorative-line"></div>
  </div>

  <div class="testimonial-content">
    <p class="testimonial-text">
      "Alhamdulillah saya sangat bersyukur dan bangga menjadi bagian dari LPK Aikoku Terpadu, salah satu pelatihan untuk
      mewujudkan mimpi teman2 yg ingin kejepang. Pada awal masuk ke lpk aikoku terpadu saya sama sekali tidak tahu
      tentang bahasa dan budaya2 jepang, berkat suasana belajar yg nyaman dan fasilitas yg mendukung serta temen2 dan
      sensei tachi yg sangat luar biasa, saya mendapat banyak ilmu tentang negara jepang, hinga sekarang saya bisa
      sampai dan menerapkan ilmu tersebut untuk bekerja dan tinggal dijepang."
    </p>
    <div class="testimonial-author">
      <img src="img/random.jpg" alt="Anis" class="author-image">
      <div class="author-info">
        <h4 class="author-name">Anis</h4>
        <p class="author-position">Tokutei Ginou Kaigo</p>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
</body>

</html>