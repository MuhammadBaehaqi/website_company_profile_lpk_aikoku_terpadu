<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
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
            padding: 10px 20px;
            color: white;
        }
 .navbar-logo a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: white;
        }
        .navbar-logo {
            display: flex;
            align-items: center;
        }

        .navbar-logo img {
            height: 40px;
            margin-right: 10px;
        }

        .navbar-menu {
  display: flex;
  flex-direction: row;
  align-items: center;
  background-color: transparent;
  position: static;
  top: auto;
  left: auto;
  width: auto;
}

        .navbar-menu a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s, background-color 0.3s;
        }

      .navbar-menu a.active {
        font-weight: bold; /* Tambahkan ketebalan teks jika diinginkan */
            color: #00b300;
        }

        .navbar-menu a:hover {
            color: #00b300;
        }

        .dropdown {
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #000000;
            box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            display: block;
            padding: 10px 20px;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .navbar-buttons {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-left: 10px;
        }

       .navbar-buttons button {
    margin: 0 10px; /* Beri sedikit spasi antar tombol */
    padding: 10px 20px; /* Ukuran padding lebih besar */
    font-size: 16px; /* Ukuran font lebih jelas */
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}
.btn-register, .btn-login {
  margin: 0 10px;
  padding: 10px 20px;
  font-size: 16px;
  border-radius: 25px;
  color: white; /* Explicitly set text color */
  transition: background-color 0.3s, color 0.3s; /* Add color transition */
}

.btn-register {
  background-color: #00b300;
}

.btn-login {
  background-color: #00b300;
}

.btn-register:hover {
  background-color: #008000;
}

.btn-login:hover {
  background-color: #008000;

}

        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            margin-left: auto;
        }

        .hamburger div {
            background-color: white;
            height: 4px;
            margin: 4px 0;
            width: 25px;
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

            .navbar-menu a {
                margin: 10px 0;
                padding: 10px;
                text-align: center;
            }

            .hamburger {
                display: flex;
            }

            .navbar-menu.active {
                display: flex;
            }

            .navbar-buttons {
                flex-direction: column;
                align-items: center;
                margin-top: 10px;
            }

            .navbar-buttons button {
                margin: 5px 0; /* Reduce vertical spacing */
            }
        }
    </style>
</head>
<body id="top">
    <div class="navbar">
        <div class="navbar-logo">
            <a href="index.php">
            <img src="img/logo.png" alt="Logo">
            <span>LPK Aikoku Terpadu</span>
            </a>
        </div>

        <div class="hamburger" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>

        <div class="navbar-menu">
    <a href="index.php#header" class="<?= $currentPage === 'index.php' ? 'active' : '' ?>">Home</a>
    <a href="profile.php#profile" class="<?= $currentPage === 'profile.php' ? 'active' : '' ?>">Profile</a>
    <div class="dropdown">
        <a href="#" class="<?= in_array($currentPage, ['program.php', 'magang.php', 'Tg.php', 'engineering.php']) ? 'active' : '' ?>">Jurusan</a>
        <div class="dropdown-content">
            <a href="program.php" class="<?= $currentPage === 'program.php' ? 'active' : '' ?>">Program</a>
            <a href="magang.php" class="<?= $currentPage === 'magang.php' ? 'active' : '' ?>">Magang</a>
            <a href="Tg.php" class="<?= $currentPage === 'Tg.php' ? 'active' : '' ?>">Tokutei Ginou</a>
            <a href="engineering.php" class="<?= $currentPage === 'engineering.php' ? 'active' : '' ?>">Engineering</a>
        </div>
    </div>
    <a href="galeri.php#galeri" class="<?= $currentPage === 'galeri.php' ? 'active' : '' ?>">Gallery</a>
    <a href="contact.php#contact" class="<?= $currentPage === 'contact.php' ? 'active' : '' ?>">Contact</a>
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

    <?php if ($currentPage === 'index.php'): ?>
    <script>
        // Scroll ke atas hanya di halaman index.php
        document.querySelector('.navbar-logo a').addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah navigasi default
            document.getElementById('top').scrollIntoView({ behavior: 'smooth' });
        });
    </script>
    <?php endif; ?>
    
</body>
</html>
