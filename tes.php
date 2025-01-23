<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Icon" href="img/logo.png" type="image/x-Icon">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #000000;
           padding: 10px 20px; /* Membuat navbar lebih besar */
            color: white;
            position: relative;
            z-index: 1000;
              box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow pada navbar */
        }

        .navbar-logo a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: white;
                margin-left: 20px; /* Geser logo dan teks ke kanan */
        }

        .navbar-logo img {
            height: 50px;
            margin-right: 10px;
        }

        .navbar-menu {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-right: 20px; /* Geser menu ke kiri */
    flex-grow: 1; /* Isi ruang kosong di antara logo dan menu */
    justify-content: flex-end; /* Pastikan menu tetap di kanan */
        }

        .navbar-menu a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s, box-shadow 0.3s;
        }

        .navbar-menu a.active {
            font-weight: bold;
            color: #00b300;
        }

       .navbar-menu a:hover {
    color: rgb(244, 244, 244) !important;
    text-shadow: 0 2px 5px rgba(0, 0, 0, 0.3) !important;
}


        .dropdown {
            position: relative;
        }

        .dropdown input {
            display: none;
        }

        .dropdown-label {
            cursor: pointer;
            color: white;
            text-decoration: none;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #000000;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.3);
            z-index: 1;
            width: 150px;
                display: none;

        }
.dropdown:hover .dropdown-content {
    display: block;
}
        .dropdown-content a {
            display: block;
            padding: 10px 20px;
            color: white;
            text-decoration: none;
        }

        .dropdown-content a:hover {
            background-color: #00b300;
        }

        .dropdown input:checked ~ .dropdown-content {
            display: block;
        }

        .navbar-buttons a {
            margin: 0 10px;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 25px;
            text-decoration: none;
            color: white;
            background-color: #00b300;
            transition: background-color 0.3s, color 0.3s;
        }

        .navbar-buttons a:hover {
            background-color: #008000;
        }

        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            z-index: 2000;
        }

        .hamburger div {
            background-color: white;
            height: 4px;
            margin: 4px 0;
            width: 25px;
            transition: transform 0.3s ease;
        }
.dropdown-label {
    position: relative;
    display: inline-block;
    padding-right: 20px;
}

.dropdown-label::after {
    content: "▼"; /* Panah ke bawah */
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    font-size: 12px;
    pointer-events: none; /* Agar klik tidak memengaruhi panah */
    transition: transform 0.3s ease;
}

.dropdown input:checked ~ .dropdown-label::after {
    transform: translateY(-50%) rotate(180deg); /* Putar panah ke atas saat dropdown dibuka */
}

        @media screen and (max-width: 768px) {
            .navbar-menu {
                display: none;
                flex-direction: column;
                background-color: #000000;
                position: absolute;
                top: 60px;
                left: 0;
                width: 100%;
            }

            .navbar-menu.active {
                display: flex;
            }
 .navbar-menu a {
            text-align: center;
            margin: 5px 0;
        }

        .dropdown-content {
            position: static;
            box-shadow: none;
        }

        .dropdown-content a {
            padding: 10px;
            text-align: center;
        }

        .navbar-buttons {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 10px;
        }

        .navbar-buttons a {
            margin: 5px 0;
            width: 90%; /* Tombol memenuhi lebar layar */
            text-align: center;
        }
            .hamburger {
                display: flex;
            }
        }
    </style>
</head>
<body id="top">
    <div class="navbar">
        <div class="navbar-logo">
            <a href="index.php">
                <img src="img/logo.png" alt="Logo">
                <span>LPK AIKOKU TERPADU</span>
            </a>
        </div>

        <div class="hamburger" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>

        <div class="navbar-menu">
            <a href="index.php" class="<?= $currentPage === 'index.php' ? 'active' : '' ?>">Home</a>
            <a href="profile.php" class="<?= $currentPage === 'profile.php' ? 'active' : '' ?>">Profile</a>
            <div class="dropdown">
                <input type="checkbox" id="dropdown-toggle">
                <label for="dropdown-toggle" class="dropdown-label <?= in_array($currentPage, ['program.php', 'magang.php', 'Tg.php', 'engineering.php']) ? 'active' : '' ?>">Jurusan</label>
                <div class="dropdown-content">
                    <a href="program.php" class="<?= $currentPage === 'program.php' ? 'active' : '' ?>">Program</a>
                    <a href="magang.php" class="<?= $currentPage === 'magang.php' ? 'active' : '' ?>">Magang</a>
                    <a href="Tg.php" class="<?= $currentPage === 'Tg.php' ? 'active' : '' ?>">Tokutei Ginou</a>
                    <a href="engineering.php" class="<?= $currentPage === 'engineering.php' ? 'active' : '' ?>">Engineering</a>
                </div>
            </div>
            <a href="galeri.php" class="<?= $currentPage === 'galeri.php' ? 'active' : '' ?>">Gallery</a>
            <a href="contact.php" class="<?= $currentPage === 'contact.php' ? 'active' : '' ?>">Contact</a>
            <div class="navbar-buttons">
                <a href="form.php" class="btn-register">Daftar Online</a>
                <a href="login.php" class="btn-login">Login</a>
            </div>
        </div>
    </div>

    <script>
        function toggleMenu() {
            const menu = document.querySelector('.navbar-menu');
            menu.classList.toggle('active');
        }
    </script>
</body>
</html>
