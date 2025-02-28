<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program</title>
    <link rel="stylesheet" href="style.css">
    <link rel="Icon" href="img/logo.png" type="image/x-Icon">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
    html {
        scroll-behavior: smooth;
    }
    </style>
</head>

<body>
    <div id="program">
        <!-- Navbar -->
  <?php include('navbar.php'); ?>

    <div class="program-text">
        <h1>Program LPK Aikoku Terpadu</h1> 
    </div>
    </div>
    <div class="container">
        <div class="services">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fa-regular fa-handshake"></i>
                </div>
                <h2 class="service-title">Magang</h2>
                <p class="service-description">Program Magang ke Jepang bagi yang baru pertama kali ingin bekerja di Jepang.</p>
                <a href="magang.php" class="service-button">INFO LEBIH LANJUT</a>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class="fa-regular fa-handshake"></i>
                </div>
                <h2 class="service-title">Engineering</h2>
                <p class="service-description">Program Engineering bagi lulusan D3/S1 yang igin bekerja di Jepang.</p>
                <a href="engineering.php" class="service-button">INFO LEBIH LANJUT</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fa-regular fa-handshake"></i>
                </div>
                <h2 class="service-title">Tokutei Ginou(TG)</h2>
                <p class="service-description">Program Tokutei Ginou bagi yang baru ke Jepang bagi yang baru pertama kali ingin bekerja di Jepang.</p>
                <a href="Tg.php" class="service-button">INFO LEBIH LANJUT</a>
            </div>
        </div>
    </div>
<div class="services">
    <?php
    include 'config.php';
    $result = $mysqli->query("SELECT * FROM program");
    while ($row = $result->fetch_assoc()):
    ?>
        <div class="service-card">
            <div class="service-icon">
                <i class="<?= $row['icon'] ?>"></i>
            </div>
            <h2 class="service-title"><?= $row['title'] ?></h2>
            <p class="service-description"><?= $row['description'] ?></p>
            <a href="<?= $row['link'] ?>" class="service-button">INFO LEBIH LANJUT</a>
        </div>
    <?php endwhile; ?>
</div>

   <?php include 'footer.php'; ?>
</body>

</html>