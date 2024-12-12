<?php
// Pastikan sesi atau autentikasi pengguna sudah disiapkan di file utama.
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="Icon" href="img/logo.png" type="image/x-Icon">
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
/* Sidebar Container */
.sidebar {
    width: 250px;
    height: 100vh;
    background-color: #2c3e50;
    color: #ecf0f1;
    position: fixed;
    display: flex;
     left: 0;
  top: 0;
    flex-direction: column;
    align-items: center;
    padding-top: 20px;
    overflow-y: auto;
}

/* Logo Section */
.logo-container {
    text-align: center;
    margin-bottom: 20px;
}
.logo {
    max-width: 80px;
    height: auto;
    margin-bottom: 10px;
}
.logo-text {
    font-size: 18px;
    font-weight: bold;
    color: #00ff37;
}

/* Menu List */
.sidebar-menu {
    list-style: none;
    width: 100%;
    padding: 0;
    margin: 0;
}
.sidebar-menu li {
    width: 100%;
}
.sidebar-menu li a {
    display: flex;
    align-items: center;
    padding: 15px 20px;
    color: #ecf0f1;
    text-decoration: none;
    font-size: 16px;
    border-bottom: 1px solid #34495e;
    transition: background-color 0.3s, color 0.3s;
}
.sidebar-menu li a:hover {
    background-color: #34495e;
    color: #1abc9c;
}
.sidebar-menu li a i {
    margin-right: 10px;
    font-size: 18px;
}
</style>
</head>
<body>
<div class="wrapper">
<div class="sidebar">
    <div class="logo-container">
        <img src="img/logo.png" alt="logo" class="logo">
        <div class="logo-text">LPK Aikoku Terpadu</div>
    </div>
    <ul class="sidebar-menu">
        <li><a href="db_admin.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li><a href="data_akun.php"><i class="fas fa-users"></i> Akun</a></li>
        <li><a href="data_pengguna.php"><i class="fas fa-users"></i> Data Pengguna</a></li>
        <li><a href="data_regis.php"><i class="fas fa-user-plus"></i> Registrasi</a></li>
        <li><a href="data_contact.php"><i class="fa-regular fa-comment-dots"></i> Pesan</a></li>
        <li><a href="galeri_admin.php"><i class="fa-solid fa-image"></i> Galleri</a></li>
        <li><a href="settings.php"><i class="fas fa-cog"></i> Settings</a></li>
        <li><a href="log_out.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </ul>
</div>
</div> 
</body>
</html>

