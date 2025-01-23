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
      max-height: 100vh; /* Ensure sidebar doesn't exceed the viewport height */
      background-color: #2c3e50;
      color: #ecf0f1;
      position: fixed;
      top: 0;
      left: 0;
      display: flex;
      flex-direction: column;
      overflow-y: auto; /* Enables scrolling if content overflows */
    }

    /* Logo Section */
    .logo-container {
      text-align: center;
      padding: 20px 10px; /* Add padding for breathing room */
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

    .sidebar-menu li a.active {
      background-color: #34495e; /* Warna latar belakang aktif */
      color: #1abc9c; /* Warna teks aktif */
    }

    /* Scrollbar Styling (optional for modern look) */
    .sidebar::-webkit-scrollbar {
      width: 8px;
    }
    .sidebar::-webkit-scrollbar-thumb {
      background-color: #1abc9c;
      border-radius: 4px;
    }
    .sidebar::-webkit-scrollbar-track {
      background-color: #34495e;
    }
    
  </style>
</head>
<body>
<div class="wrapper">
  <div class="sidebar">
    <div class="logo-container">
      <img src="../../img/logo.png" alt="logo" class="logo">
      <div class="logo-text">LPK Aikoku Terpadu</div>
    </div>
    <ul class="sidebar-menu">
      <li><a href="/BCK/admin/dashboard/db_admin.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'db_admin.php') ? 'active' : '' ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
      <li><a href="/BCK/admin/akun/data_akun.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'data_akun.php') ? 'active' : '' ?>"><i class="fas fa-users"></i> Akun</a></li>
      <li><a href="/BCK/admin/pengguna/data_pengguna.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'data_pengguna.php') ? 'active' : '' ?>"><i class="fas fa-users"></i> Data Pengguna</a></li>
      <li><a href="/BCK/admin/registrasi/data_regis.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'data_regis.php') ? 'active' : '' ?>"><i class="fas fa-user-plus"></i> Registrasi</a></li>
      <li><a href="/BCK/admin/pesan/data_contact.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'data_contact.php') ? 'active' : '' ?>"><i class="fa-regular fa-comment-dots"></i> Pesan</a></li>
      <li><a href="/BCK/admin/laporan/laporan.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'laporan.php') ? 'active' : '' ?>"><i class="fa-solid fa-book-open"></i> Laporan</a></li>
      <li><a href="/BCK/admin/notifikasi/notifikasi.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'notifikasi.php') ? 'active' : '' ?>"><i class="fa-solid fa-bell"></i> Notifikasi</a></li>
      <li><a href="/BCK/admin/program/program_admin.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'program_admin.php') ? 'active' : '' ?>"><i class="fa-solid fa-user-gear"></i> Program</a></li>
      <li><a href="/BCK/admin/galeri/galeri_admin.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'galeri_admin.php') ? 'active' : '' ?>"><i class="fa-solid fa-image"></i> Galleri</a></li>
      <li><a href="/BCK/admin/seting/settings.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'settings.php') ? 'active' : '' ?>"><i class="fas fa-cog"></i> Settings</a></li>
      <li><a href="/BCK/admin/logout/log_out.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'log_out.php') ? 'active' : '' ?>"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </ul>
  </div>
</div>
</body>
</html>
