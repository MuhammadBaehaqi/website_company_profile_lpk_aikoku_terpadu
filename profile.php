<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
    <link rel="Icon" href="img/logo.png" type="image/x-Icon">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        
/* Styling Legalitas */
.header {
  text-align: center;
  margin-bottom: 60px;
}

.header h1 {
  font-size: 2.5em;
  color: #333;
  margin-bottom: 20px;
}

.legal-documents {
  display: flex;
  justify-content: center;
  gap: 40px;
  flex-wrap: wrap;
}

.legal-item {
  flex: 1;
  min-width: 300px;
  max-width: 500px;
  text-align: center;
  padding: 30px;
  border-radius: 10px;
  background: #fff;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
}

.legal-item:hover {
  transform: translateY(-5px);
}

.legal-icon {
  width: 80px;
  height: 80px;
  margin: 0 auto 20px;
  background: transparent;
  display: flex;
  align-items: center;
  justify-content: center;
}

.legal-icon img {
  width: 100%;
  height: auto;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Menambahkan shadow pada logo */
  border-radius: 50%; /* Tambahan opsional jika ingin sudutnya melengkung */
}

.legal-item h3 {
  font-size: 1.1em;
  color: #333;
  margin-bottom: 15px;
  line-height: 1.4;
}

.legal-item p {
  color: #00937b;
  font-weight: bold;
  font-size: 1.1em;
  margin-top: 15px;
}
@media (max-width: 768px) {
  .container {
    padding: 20px; /* Pada layar dengan lebar 768px atau lebih kecil (misalnya perangkat mobile), menambahkan padding 20px pada .container. */
  }

  .header h1 {
    font-size: 2em; /* Mengatur ukuran font judul (h1) menjadi 2em di perangkat dengan layar kecil. */
  }

  .legal-documents {
    gap: 20px;
  }

  .legal-item {
    min-width: 100%; /* Membuat setiap item mengambil 100% lebar kontainer */
  }
}
/* end styling legalitas */

        .image-content img {
  width: 100%;
  height: auto; /* Menjaga rasio aspek gambar */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); /* Bayangan gambar */
  border-radius: 8px;
}
    .headmaster-section {
    margin-top: 30px;
}

.headmaster-title {
    font-size: 24px;
    font-weight: bold;
    color: #00b300;
    margin-bottom: 15px;
    text-align: center;
}

.headmaster-content {
    display: flex;
    align-items: center;
    justify-content: start;
    gap: 20px;
}

.headmaster-image img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); /* Bayangan gambar kepala sekolah */
}

.headmaster-text p {
    font-size: 16px;
    line-height: 1.5;
}

@media screen and (max-width: 768px) {
    .headmaster-content {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .headmaster-image img {
        margin-bottom: 15px;
    }

    .headmaster-title {
        font-size: 20px;
    }

    .headmaster-text p {
        font-size: 14px;
    }
}


    html {
        scroll-behavior: smooth;
    }
    </style>
</head>

<body>
    <div id="profile">
         <!-- Navbar -->
  <?php include('navbar.php'); ?>

        <div class="container-profile">
            <div class="content-box">
                <div class="title-profile">
                    LPK Aikoku Terpadu<br>
                    Wujudkan Mimpimu Kerja Di Jepang.
                </div>
                <div class="description">
                    Lembaga Pelatihan Kerja "AIKOKU TERPADU" Adalah Sebuah Lembaga Pelatihan Yang Mendidik Dan Melatih
                    Siswanya Guna Membentuk Peserta Sesuai Dengan Yang Diharapkan Oleh Perusahaan Di Jepang.
                </div>
            </div>
        </div>
        </div>
        
    <div class="header-profile">
        <h1>SEJARAH<br>LPK AIKOKU TERPADU</h1>
    </div>

    <div class="container"> <!-- pembungkus utama yang digunakan untuk mengelompokkan semua elemen dalam satu wadah -->
        <div class="content"> <!-- mengelompokkan konten yang berisi teks dan gambar. -->
            <div class="text-content"> <!-- berisi teks yang menjelaskan tentang LPK Aikoku Terpadu. -->
                <h2 class="section-title">Lpk Aikoku Terpadu</h2> <!-- Judul utama -->
                <p>LPK Aikoku Terpadu adalah lembaga pelatihan kerja yang berdedikasi untuk mengembangkan sumber daya
                    manusia yang berkualitas. Didirikan pada 10 Mei 2018, lembaga kami telah berkomitmen untuk
                    memberikan pelatihan terbaik bagi para peserta didik.</p>
                <p>Selama bertahun-tahun, kami telah sukses melatih ribuan peserta yang kini telah bekerja di berbagai
                    perusahaan terkemuka, baik di dalam maupun luar negeri. Komitmen kami terhadap kualitas pendidikan
                    dan pelatihan telah menjadikan LPK Aikoku Terpadu sebagai salah satu lembaga pelatihan terpercaya.
                </p>
            </div>
            <div class="image-content">
                <img src="img/sejarah.jpg" alt="Gambar LPK Aikoku Terpadu">
            </div>
        </div>
<!-- Bagian Kepala Sekolah -->
    <div class="headmaster-section">
        <h3 class="headmaster-title">Kata Sambutan Kepala LPK Aikoku Terpadu</h3>
        <div class="headmaster-content">
            <div class="headmaster-image">
                <img src="img/random.jpg" alt="Kepala Sekolah">
            </div>
            <div class="headmaster-text">
                <p>Selamat datang di LPK Aikoku Terpadu. Sebagai Kepala LPK Aikoku Terpadu, saya sangat bangga atas pencapaian kami dalam mencetak tenaga kerja terampil yang siap berkompetisi di dunia internasional. Kami berkomitmen untuk terus memberikan pelatihan yang berkualitas dan relevan dengan kebutuhan industri. Terima kasih telah memilih kami sebagai mitra dalam mencapai impian karir Anda.</p>
                <p>- Contoh, Kepala LPK Aikoku Terpadu</p>
            </div>
        </div>
    </div>

        <div class="vision-mission"> <!-- bagian untuk menampilkan visi dan misi lembaga. -->
            <h2>Visi & Misi</h2>
            <h3>Visi</h3>
            <p>Menjadi lembaga pelatihan kerja terdepan yang menghasilkan sumber daya manusia berkualitas, profesional,
                dan berdaya saing global.</p>

            <h3>Misi</h3>
            <ul>
                <li>Menyelenggarakan program pelatihan berkualitas sesuai dengan kebutuhan industri</li>
                <li>Membangun kerjasama dengan berbagai industri untuk meningkatkan peluang kerja peserta</li>
                <li>Memberikan pelayanan prima dalam setiap aspek pelatihan</li>
                <li>Menciptakan lingkungan belajar yang kondusif dan modern</li>
            </ul>
        </div>
    </div>

    <div class="container-team">
        <div class="team-header"> <!-- berisi informasi tentang tim pengurus dengan judul dan deskripsi. -->
            <h1>Tim Pengurus LPK Aikoku Terpadu</h1>
            <p>Kami adalah tim profesional yang berdedikasi untuk memberikan pelatihan berkualitas dan menciptakan
                sumber daya manusia yang unggul.</p>
        </div>

        <div class="team-grid"> <!--  berisi daftar anggota tim pengurus lembaga, dengan setiap anggota ditempatkan dalam tag -->
            <!-- Direktur -->
            <div class="team-member"> 
                <div class="member-image">
                    <img src="https://png.pngtree.com/thumb_back/fh260/background/20230518/pngtree-japanese-businessman-in-a-suit-poses-with-his-hands-crossed-image_2532633.jpg"
                        alt="Nama Direktur">
                </div>
                <div class="member-info"> <!-- berisi informasi tentang tim pengurus dengan judul dan deskripsi. -->
                    <h3>Direktur</h3>
                    <div class="position">Imam Joharudin</div>
                    <div class="description">
                        Memimpin dan mengembangkan visi LPK Aikoku Terpadu menuju excellence dalam pelatihan kerja.
                    </div>
                </div>
            </div>

            <!-- Wakil Direktur -->
            <div class="team-member">
                <div class="member-image">
                    <img src="https://png.pngtree.com/thumb_back/fh260/background/20230518/pngtree-japanese-businessman-in-a-suit-poses-with-his-hands-crossed-image_2532633.jpg"
                        alt="Nama Wakil Direktur">
                </div>
                <div class="member-info">
                    <h3>Wakil Direktur</h3>
                    <div class="position">Ali Chamdan</div>
                    <div class="description">
                        Mendukung implementasi visi dan misi lembaga serta mengkoordinasi operasional harian.
                    </div>
                </div>
            </div>

            <!-- Kepala Bagian Pelatihan -->
            <div class="team-member">
                <div class="member-image">
                    <img src="https://png.pngtree.com/thumb_back/fh260/background/20230518/pngtree-japanese-businessman-in-a-suit-poses-with-his-hands-crossed-image_2532633.jpg"
                        alt="Nama Kabag Pelatihan">
                </div>
                <div class="member-info">
                    <h3>Bendahara</h3>
                    <div class="position">Nurul Aeni</div>
                    <div class="description">
                        Mengelola administrasi dan keuangan lembaga secara efektif dan transparan.
                    </div>
                </div>
            </div>

            <!-- Kepala Bagian Kerjasama -->
            <div class="team-member">
                <div class="member-image">
                    <img src="https://png.pngtree.com/thumb_back/fh260/background/20230518/pngtree-japanese-businessman-in-a-suit-poses-with-his-hands-crossed-image_2532633.jpg"
                        alt="Nama Kabag Kerjasama">
                </div>
                <div class="member-info">
                    <h3>Nama Kabag Kerjasama</h3>
                    <div class="position">Kepala Bagian Kerjasama</div>
                    <div class="description">
                        Membangun dan mengelola hubungan dengan mitra industri dan stakeholder.
                    </div>
                </div>
            </div>

            <!-- Kepala Administrasi -->
            <div class="team-member">
                <div class="member-image">
                    <img src="https://png.pngtree.com/thumb_back/fh260/background/20230518/pngtree-japanese-businessman-in-a-suit-poses-with-his-hands-crossed-image_2532633.jpg"
                        alt="Nama Kabag Administrasi">
                </div>
                <div class="member-info">
                    <h3>Nama Kabag Administrasi</h3>
                    <div class="position">Kepala Administrasi</div>
                    <div class="description">
                        Mengelola administrasi dan keuangan lembaga secara efektif dan transparan.
                    </div>
                </div>
            </div>

            <!-- Staff Pengajar -->
            <div class="team-member">
                <div class="member-image">
                    <img src="https://png.pngtree.com/thumb_back/fh260/background/20230518/pngtree-japanese-businessman-in-a-suit-poses-with-his-hands-crossed-image_2532633.jpg"
                        alt="Nama Pengajar">
                </div>
                <div class="member-info">
                    <h3>Tim Pengajar</h3>
                    <div class="position">Staff Pengajar</div>
                    <div class="description">
                        Tim profesional yang berpengalaman dalam memberikan pelatihan berkualitas.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
    <div class="header">
        <h1>Legalitas Pendirian</h1>
    </div>

    <div class="legal-documents">
        <div class="legal-item">
            <div class="legal-icon">
                <img src="img/logo.png" alt="Logo LPK" />
            </div>
            <h3>Surat Izin Menkumham Dinperinaker Brebes Nomor</h3>
            <p>KEP 563/548/V/2019</p>
        </div>
        <!-- <div class="legal-item">
            <div class="legal-icon">
                <span class="icon-check"></span>
            </div>
            <h3>Surat Izin Menkumham</h3>
            <p>Tangga 01 Juli 2019<br>Nomor AHU-005499</p>
        </div> -->
    </div>
</div>


    <?php include 'footer.php'; ?>
</body>

</html>