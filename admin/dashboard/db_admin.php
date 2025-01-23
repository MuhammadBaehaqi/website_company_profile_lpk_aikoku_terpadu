<?php
// Include file sidebar dan cek_auth
include '../../cek_auth.php';
include '../sidebar.php';
?>

<head>
    
    <title>Dashboard</title>
<style>
/* General Styling */

.main-content {
    padding: 20px;
    margin-left: 250px; /* Sesuaikan dengan lebar sidebar */
    background-color: #fff;
    color: #333;
    transition: margin-left 0.3s ease;
}
.sidebar {
    width: 250px;
    height: 100vh;
    background-color: #2c3e50;
    color: #ecf0f1;
    position: fixed;
    top: 0;
    left: 0;
    transition: width 0.3s ease;
    overflow-y: auto;
}
/* Dashboard Header */
.dashboard-header {
    margin-bottom: 20px;
    text-align: center;
}
.dashboard-title {
    font-size: 2rem;
    color: #2c3e50;
    margin: 0;
}
.dashboard-header p {
    font-size: 1.2rem;
    color: #7f8c8d;
    margin: 10px 0 0;
}

/* Stats Container */
.stats-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 20px;
    margin-bottom: 20px;
}
.stat-card {
    background-color: #28a745;
    color: #fff;
    padding: 20px;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    position: relative;
}
.stat-card h3 {
    margin: 0 0 10px;
    font-size: 1.2rem;
    font-weight: bold;
}
.stat-card .number {
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 30px;
}
.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}
.stat-card button {
    background-color: #fff;
    color: #28a745;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;
    position: absolute;
    bottom: 10px;
    left: 50%;
    
    transform: translateX(-50%);
    transition: background-color 0.3s;
}
.stat-card button:hover {
    background-color: #d4edda;
}

/* Recent Activity */
.recent-activity {
    background-color: #ecf0f1;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
.recent-activity h2 {
    margin: 0 0 15px;
    font-size: 1.5rem;
    color: #2c3e50;
}
.activity-list {
    list-style: none;
    padding: 0;
    margin: 0;
}
.activity-item {
    padding: 10px;
    background-color: #fff;
    margin-bottom: 10px;
    border-radius: 4px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    font-size: 1rem;
    color: #34495e;
    transition: background-color 0.2s ease, box-shadow 0.2s ease;
}
.activity-item:hover {
    background-color: #dcdde1;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
}

/* Hamburger Menu */
.hamburger {
    display: none;
    position: fixed;
    top: 15px;
    left: 15px;
    background-color: #2c3e50;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    z-index: 1000;
}
.hamburger span {
    display: block;
    width: 25px;
    height: 3px;
    background-color: #fff;
    margin: 5px 0;
}

@media screen and (max-width: 768px) {
    .sidebar {
        width: 0;
        overflow: hidden;
    }
    .main-content {
        margin-left: 0;
    }
    .hamburger {
        display: block;
    }
}
</style>
</head>

<body>
    <button class="hamburger" onclick="toggleSidebar()">
        <span></span>
        <span></span>
        <span></span>
    </button>

    <div class="main-content">
        <div class="dashboard-header">
            <h1 class="dashboard-title">Dashboard</h1>
            <p>Welcome back, Admin!</p>
        </div>
    
        <div class="stats-container">
            <div class="stat-card">
                <h3>Jumlah Pendaftaran</h3>
                <div class="number">1,234</div>
                <button onclick="location.href='/BCK/admin/registrasi/data_regis.php'">Lihat Info</button>
            </div>
            <div class="stat-card">
                <h3>Siswa Diterima</h3>
                <div class="number">1,234</div>
                <button onclick="location.href='/BCK/admin/registrasi/data_regis.php'">Lihat Info</button>
            </div>
            <div class="stat-card">
                <h3>Pengguna</h3>
                <div class="number">4</div>
                <button onclick="location.href='/BCK/admin/pengguna/data_pengguna.php'">Lihat Info</button>
            </div>
            <div class="stat-card">
                <h3>Pesan</h3>
                <div class="number">100</div>
                <button onclick="location.href='/BCK/admin/pesan/data_contact.php'">Lihat Info</button>
            </div>
            <div class="stat-card">
                <h3>Notifikasi</h3>
                <div class="number">100</div>
                <button onclick="location.href='/BCK/admin/registrasi/data_regis.php'">Lihat Info</button>
            </div>
            <div class="stat-card">
                <h3>Galeri</h3>
                <div class="number">15</div>
                <button onclick="location.href='/BCK/admin/galeri/galeri_admin.php'">Lihat Info</button>
            </div>
        </div>
    
        <div class="recent-activity">
            <h2>Aktivitas Terbaru</h2>
            <ul class="activity-list">
                <li class="activity-item">Pendaftaran Terbaru: Haki</li>
                <li class="activity-item">Pendaftaran Terbaru: Haki</li>
                <li class="activity-item">Pendaftaran Terbaru: Haki</li>
                <li class="activity-item">Pendaftaran Terbaru: Haki</li>
                <li class="activity-item">Pendaftaran Terbaru: Haki</li>
            </ul>
        </div>
    </div>

<script>
function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar');
    const mainContent = document.querySelector('.main-content');

      if (window.innerWidth <= 768) { // Perangkat kecil
        if (sidebar.style.width === '250px') {
            sidebar.style.width = '0';
            mainContent.style.marginLeft = '0';
        } else {
            sidebar.style.width = '250px';
            mainContent.style.marginLeft = '250px';
        }
    }
}
</script>
</body>
