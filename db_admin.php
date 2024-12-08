<?php
include 'cek_auth.php';
include 'sidebar.php';
?>

<head>
    <title>Dashboard</title>
<style>

.main-content {
    padding: 20px; /* Memberikan padding pada konten utama agar tidak menempel ke tepi */
    margin-left: 250px; /* Sesuaikan dengan lebar sidebar */
    background-color: #fff;
    color: #333;
    font-family: Arial, sans-serif;
}

/* Dashboard Header */
.dashboard-header {
    margin-bottom: 20px; /* Memberikan jarak bawah pada header */
    text-align: center;
}
.dashboard-title {
    font-size: 2rem;
    color: #2c3e50;
    margin: 0; /* Menghilangkan margin pada judul */
}
.dashboard-header p {
    font-size: 1.2rem;
    color: #7f8c8d;
    margin: 10px 0 0; /* Margin atas untuk memberi jarak dengan judul */
}

/* Stats Container */
.stats-container {
    display: grid; /* Menggunakan grid layout untuk statistik */
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); /* Kolom grid otomatis dengan ukuran minimum 200px */
    gap: 20px;
    margin-bottom: 20px; /* Margin bawah agar ada ruang dengan elemen berikutnya */
}
.stat-card {
    background-color: #28a745;
    color: #fff;
    padding: 20px; /* Memberikan padding di dalam card */
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.stat-card h3 {
    margin: 0 0 10px; /* Margin bawah untuk jarak antara judul dan angka */
    font-size: 1.2rem;
    font-weight: bold;
}
.stat-card .number {
    font-size: 2rem;
    font-weight: bold;
}
.stat-card:hover {
    transform: translateY(-5px); /* Efek mengangkat card saat di-hover */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

/* Recent Activity */
.recent-activity {
    background-color: #ecf0f1;
    padding: 20px; /* Memberikan padding di dalam aktivitas */
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
.recent-activity h2 {
    margin: 0 0 15px; /* Margin bawah untuk jarak dengan daftar aktivitas */
    font-size: 1.5rem;
    color: #2c3e50;
}
.activity-list {
    list-style: none;
    padding: 0; /* Menghilangkan padding pada daftar */
    margin: 0; /* Menghilangkan margin pada daftar */
}
.activity-item {
    padding: 10px; /* Padding untuk setiap item aktivitas */
    background-color: #fff;
    margin-bottom: 10px; /* Memberikan jarak antar item aktivitas */
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
@media screen and (max-width: 768px) {
    .sidebar {
        width: 0; /* Menyembunyikan sidebar */
    }
    .main-content {
        margin-left: 0; /* Atur ulang margin */
    }
}

</style>
</head>

<div class="main-content">
        <div class="dashboard-header">
            <h1 class="dashboard-title">Dashboard</h1>
            <p>Welcome back, Admin!</p>
        </div>
    
        <div class="stats-container">
            <div class="stat-card">
                <h3>Jumlah Siswa-Siswi</h3>
                <div class="number">1,234</div>
            </div>
            <div class="stat-card">
                <h3>Pendaftaran</h3>
                <div class="number">56</div>
            </div>
            <div class="stat-card">
                <h3>Aktif Siswa-Siswi</h3>
                <div class="number">789</div>
            </div>
            <div class="stat-card">
                <h3>Total Keberangkatan</h3>
                <div class="number">1,000</div>
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
        
