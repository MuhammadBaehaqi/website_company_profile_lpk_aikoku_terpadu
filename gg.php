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
  <style>/* CSS untuk header */
#header {
  padding-top: 80px;
  width: 100%; /* Lebar penuh layar */
  height: 100vh; /* Tinggi 100% dari layar */
  background: url("img/kuil.jpg") no-repeat center center/cover; /* Responsif untuk background */
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
}

/* Gaya teks pada header */
.header-text {
  color: white;
  text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
  margin-bottom: 20px;
}

.header-text h1 {
  font-size: 3rem; /* Ukuran teks besar */
  margin-bottom: 10px;
}

.header-text p {
  font-size: 1.2rem; /* Ukuran teks kecil */
  line-height: 1.5;
}

/* Kontainer tombol */
.button-container {
  text-align: center;
  margin-top: 20px;
}

.button-container .btn {
  display: inline-block;
  background-color: #00b300;
  color: #ffffff;
  padding: 10px 20px;
  border-radius: 5px;
  text-decoration: none;
  margin: 0 10px;
  transition: background-color 0.3s ease;
}

/* Hover effect untuk tombol */
.button-container .btn:hover {
  background-color: #008000;
}

/* Media Query untuk Responsif */
@media (max-width: 768px) {
  #header {
    height: auto; /* Menghilangkan ketinggian tetap */
    padding: 60px 20px;
  }

  .header-text h1 {
    font-size: 2rem; /* Perkecil ukuran font */
  }

  .header-text p {
    font-size: 1rem; /* Sesuaikan ukuran font */
  }

  .button-container .btn {
    padding: 8px 15px; /* Perkecil padding tombol */
    margin: 5px; /* Perkecil jarak antar tombol */
  }
}

@media (max-width: 480px) {
  .header-text h1 {
    font-size: 1.5rem; /* Ukuran lebih kecil untuk layar kecil */
  }

  .header-text p {
    font-size: 0.9rem;
  }

  .button-container {
    flex-direction: column; /* Tombol bertumpuk secara vertikal */
    margin-top: 10px;
  }

  .button-container .btn {
    width: 100%; /* Tombol penuh lebar */
    margin: 10px 0;
  }
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


</body>
</html>