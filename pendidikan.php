<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri</title>
    <link rel="Icon" href="img/logo.png" type="image/x-Icon">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
/* Galeri */
#galeri {
  padding-top: 80px;
  width: 100%; 
  height: 80vh; 
  background: url("img/sejarah.jpg") no-repeat center center / cover; 
  position: relative;
}

.galeri-subjudul h1 {
  color: #ffffff;
  text-align: center;
  font-size: 2.5em;
}

.galeri-subjudul h2 {
  text-align: center;
  color: #00b300;
  margin-bottom: 20px;
  font-size: 1.5em;
}

.nav-buttons {
  width: 100%; 
  background-color: #00b300; 
  padding: 15px 0;
  display: flex; 
  justify-content: center; 
  gap: 20px; 
  flex-wrap: wrap; 
}

.nav-button {
  background: none; 
  border: 2px solid white; 
  color: white;
  padding: 10px 20px; 
  font-size: 1em;
  cursor: pointer; 
  transition: all 0.3s ease; 
  text-transform: uppercase; 
  font-weight: bold; 
}

.nav-button:hover {
  background-color: white; 
  color: #00ff37; 
}

.nav-button.active {
  background-color: white; 
  color: #00b300; 
}

.gallery {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  gap: 20px;
  max-width: 1200px;
  margin: 20px auto; /* Agar selalu di tengah */
  padding: 0 10px; /* Tambahkan padding untuk layar kecil */
}

.gallery-item {
  position: relative;
  overflow: hidden;
  text-align: center; /* Untuk memastikan teks di tengah */
}

.gallery-item img {
  width: 100%;
  height: auto;
  border-radius: 8px;
  transition: transform 0.3s ease-in-out;
}

.gallery-item img:hover {
  transform: scale(1.05);
}

.description2 {
  background-color: rgba(0, 0, 0, 0.7); /* Warna latar belakang */
  color: white; /* Warna teks */
  padding: 10px;
  font-size: 14px;
  text-align: center;
  border-radius: 5px;
  margin-top: 8px; /* Jarak antara gambar dan keterangan */
}

.gallery-item:hover .description2 {
  opacity: 1;
}

@media (max-width: 768px) {
  .gallery {
    grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
  }

  .galeri-subjudul h1 {
    font-size: 2em; 
  }

  .galeri-subjudul h2 {
    font-size: 1.2em; 
  }
}

@media (max-width: 480px) {
  .gallery {
    grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
  }

  .nav-buttons {
    gap: 10px; 
    padding: 10px; 
  }

  .nav-button {
    font-size: 0.9em; 
    padding: 8px 15px; 
  }
}

html {
  scroll-behavior: smooth;
}

</style>
</head>
<body>
    <div id="galeri">
 <?php include('navbar.php'); ?>
                <div class="galeri-subjudul">
                    <h1>Album</h1>
                    <h2>LPK Aikoku Terpadu</h2>
                </div>
                </div>

                <div class="nav-buttons">
                    <a href="Album.php" class="nav-button">Keberangkatan</a>
                    <a href="kelulusan_job.php" class="nav-button">Kelulusan Job</a>
                    <a href="pendidikan.php" class="nav-button active">Pendidikan LPK</a>
                    <a href="Tanda_Tangan_Kontrak.php" class="nav-button">Tanda Tangan Kontrak</a>
                </div>
                
                <!-- <div class="gallery">
                    <div class="gallery-item">
                        <img src="img/rm.jpg"
                            alt="Gallery Image 1">
                    </div>
                    <div class="gallery-item">
                        <img src="img/rm.jpg"
                            alt="Gallery Image 2">
                    </div>
                    <div class="gallery-item">
                        <img src="img/rm.jpg"
                            alt="Gallery Image 3">
                    </div>
                    <div class="gallery-item">
                        <img src="img/rm.jpg"
                            alt="Gallery Image 4">
                    </div>
                    <div class="gallery-item">
                        <img src="img/rm.jpg"
                            alt="Gallery Image 5">
                    </div>
                    <div class="gallery-item">
                        <img src="img/rm.jpg"
                            alt="Gallery Image 6">
                    </div>
                </div> -->
            <?php
// Include file config.php
require 'config.php';

// Display gallery items
// orderby urutan berdasarkan upload date
$sql = "SELECT foto_galeri, keterangan 
        FROM tb_galeri 
        WHERE detail = 'Pendidikan LPK' 
        ORDER BY upload_date DESC";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="gallery">';
    while ($row = $result->fetch_assoc()) {
        echo '<div class="gallery-item">';
        echo '<img src="uploads/' . $row['foto_galeri'] . '" alt="Gallery Image">';
        // Cek apakah keterangan tidak kosong sebelum menampilkan elemen <p>
        if (!empty($row['keterangan'])) {
            echo '<p class="description2">' . htmlspecialchars($row['keterangan']) . '</p>';
        }
        echo '</div>';
    }
    echo '</div>';
} else {
    echo "No images found in the gallery.";
}
?>

            <?php include 'footer.php'; ?>
</body>
</html>