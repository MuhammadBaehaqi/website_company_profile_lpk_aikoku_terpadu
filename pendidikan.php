<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendidikan</title>
    <link rel="stylesheet" href="style.css">
    <link rel="Icon" href="img/logo.png" type="image/x-Icon">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
        <a href="galeri.php" class="nav-button">Keberangkatan</a>
        <a href="kelulusan.php" class="nav-button">Kelulusan</a>
        <a href="fasilitas.php" class="nav-button">Fasilitas LPK</a>
        <a href="pendidikan.php" class="nav-button active">Pendidikan LPK</a>
        <a href="album.php" class="nav-button">Album LPK</a>
    </div>

    <div class="gallery">
        <div class="gallery-item">
            <img src="img/rm.jpg" alt="Gallery Image 1">
        </div>
        <div class="gallery-item">
            <img src="img/rm.jpg" alt="Gallery Image 2">
        </div>
        <div class="gallery-item">
            <img src="img/rm.jpg" alt="Gallery Image 3">
        </div>
        <div class="gallery-item">
            <img src="img/rm.jpg" alt="Gallery Image 4">
        </div>
        <div class="gallery-item">
            <img src="img/rm.jpg" alt="Gallery Image 5">
        </div>
        <div class="gallery-item">
            <img src="img/rm.jpg" alt="Gallery Image 6">
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>