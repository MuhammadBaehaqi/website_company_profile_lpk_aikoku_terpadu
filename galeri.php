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
.galeri {
  padding-top: 80px;
  width: 100%; /* Lebar dari layar */
  height: 80vh; /* Tinggi 100% dari layar */
  background: url("img/galery.jpg");
  background-size: cover; /* Memastikan gambar background menutupi seluruh area */
  background-position: center; /* Mengatur posisi gambar background di tengah */
  position: relative;
}

.galeri-subjudul h1 {
color: #ffffff ;
text-align: center;
}
.galeri-subjudul h2 {
  text-align: center;
  color: #00b300;
  margin-bottom: 20px;
}

        .nav-buttons {
    width: 100%; 
    background-color: #00b300; 
    padding: 15px 0; /* Padding atas dan bawah untuk memberi ruang. */
    display: flex; /* Flexbox untuk tata letak tombol navigasi. */
    justify-content: center; /* Konten di tengah horizontal. */
    gap: 20px; 
    flex-wrap: wrap; /* Tombol akan membungkus ke baris baru jika tidak cukup ruang. */
}

.nav-button {
    background: none; /* Tidak ada warna latar tombol default. */
    border: 2px solid white; /* Garis tepi putih untuk tombol. */
    color: white;
    padding: 10px 20px; /* Padding untuk memberi ruang di dalam tombol. */
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
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.gallery-item {
    position: relative;
    overflow: hidden;
}

.gallery-item img {
    width: 100%;
    height: auto;
    border-radius: 8px;
    transition: transform 0.3s ease-in-out;
}

/* Efek zoom ketika hover */
.gallery-item img:hover {
    transform: scale(1.05);
}

.description2 {
    position: absolute;
    bottom: 20px;
    left: 10px;
    right: 10px;
    background-color: rgba(0, 0, 0, 0.7);
    color: white;
    padding: 10px;
    font-size: 14px;
    text-align: center;
    border-radius: 5px;
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
}

/* Menampilkan keterangan saat hover */
.gallery-item:hover .description2 {
    opacity: 1;
}

/* Responsif untuk perangkat mobile */
@media (max-width: 768px) {
    .gallery {
        grid-template-columns: 1fr 1fr;
    }
}

@media (max-width: 480px) {
    .gallery {
        grid-template-columns: 1fr;
    }
}

</style>
</head>
<body>
    <div class="galeri">
 <?php include('navbar.php'); ?>
                <div class="galeri-subjudul">
                    <h1>Galeri</h1>
                    <h2>LPK Aikoku Terpadu</h2>
                </div>
                </div>

                <div class="nav-buttons">
                    <a href="galeri.php" class="nav-button active">Keberangkatan</a>
                    <a href="kelulusan.php" class="nav-button">Kelulusan</a>
                    <a href="fasilitas.php" class="nav-button">Fasilitas LPK</a>
                    <a href="pendidikan.php" class="nav-button">Pendidikan LPK</a>
                    <a href="album.php" class="nav-button">Album LPK</a>
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
$sql = "SELECT foto_galeri, keterangan FROM tb_galeri ORDER BY upload_date DESC";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="gallery">';
    while ($row = $result->fetch_assoc()) {
        echo '<div class="gallery-item">';
        echo '<img src="' . htmlspecialchars($row['foto_galeri']) . '" alt="Gallery Image">';
        echo '<p class="description2">' . htmlspecialchars($row['keterangan']) . '</p>'; 
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