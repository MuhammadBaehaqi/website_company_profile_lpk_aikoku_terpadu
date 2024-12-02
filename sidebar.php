<?php
// Pastikan sesi atau autentikasi pengguna sudah disiapkan di file utama.
?>
<div class="sidebar">
    <div class="sidebar-header">
        <h3>Dashboard</h3>
    </div>
    <ul class="sidebar-menu">
        <li><a href="db_admin.php"><i class="fas fa-home"></i>Dashboard</a></li>
        <li><a href="data_pengguna.php"><i class="fas fa-user"></i> Data Pengguna</a></li>
        <li><a href="data_regis.php"><i class="fas fa-user"></i> Registrasi</a></li>
        <li><a href="settings.php"><i class="fas fa-users"></i> Settings</a></li>
        <li><a href="log_out.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </ul>
</div>

<!-- Tambahkan CSS untuk Sidebar -->
<style>
.sidebar {
    width: 250px;
    height: 100vh;
    background-color: #2c3e50;
    color: #ecf0f1;
    position: fixed;
    padding-top: 20px;
}
.sidebar-header {
    text-align: center;
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 20px;
}
.sidebar-menu {
    list-style: none;
    padding: 0;
}
.sidebar-menu li {
    padding: 15px 20px;
    border-bottom: 1px solid #34495e;
}
.sidebar-menu li a {
    color: #ecf0f1;
    text-decoration: none;
    display: flex;
    align-items: center;
}
.sidebar-menu li a:hover {
    background-color: #34495e;
    color: #1abc9c;
}
.sidebar-menu li a i {
    margin-right: 10px;
}
</style>
