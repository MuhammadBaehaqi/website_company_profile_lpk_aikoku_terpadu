<?php
include 'sidebar.php';
?>
<style>
    /* Main Content */
.main-content {
    padding: 20px;
    background-color: #fff;
    color: #333;
    font-family: Arial, sans-serif;
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
    background-color: #3498db;
    color: #fff;
    padding: 20px;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.stat-card h3 {
    margin: 0 0 10px;
    font-size: 1.2rem;
    font-weight: bold;
}
.stat-card .number {
    font-size: 2rem;
    font-weight: bold;
}
.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
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

</style>
<div class="main-content">
     <div class="table-container">
        <h2>Data Registration</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>TTL</th>
                    <th>Tanggal Lahir</th>
                    <th>Usia</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Alamat KTP</th>
                    <th>Alamat Email</th>
                    <th>No Telepon/Whatsapp</th>
                    <th>Alamat</th>
                    <th>Alamat Keluarga</th>
                    <th>Update</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config.php'; // Pastikan file config.php berisi koneksi ke database
                $result = $mysqli->query("SELECT * FROM tb_pelajar"); // Ambil data dari tabel tb_pelajar
                $i = 1;
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $i . '</td>';
                    echo '<td>' .$row['Nama_lengkap'] . '</td>';
                    echo '<td>' .$row['TTL'] . '</td>';
                    echo '<td>' . date("d F Y", strtotime($row['tanggal_lahir'])) . '</td>'; 
                    // dokumentasi php
                    echo '<td>' .$row['usia'] . '</td>';
                    echo '<td>' .$row['Jenis_Kelamin'] . '</td>';
                    echo '<td>' .$row['Agama'] . '</td>';
                    echo '<td>' .$row['alamat_ktp'] . '</td>';
                    echo '<td>' .$row['alamat_email'] . '</td>';
                    echo '<td>' .$row['no_telepon'] . '</td>';
                    echo '<td>' .$row['alamat'] . '</td>';
                    echo '<td>' .$row['alamat_keluarga'] . '</td>';
                    echo '<td><a href="update.php?id_regis=' . $row['id_regis'] . '"class="btn btn-update">Update</a></td>';
                    echo '<td><a href="hapus.php?id_regis=' . $row['id_regis'] . '"class="btn btn-delete">Hapus</a></td>';
                    echo '</tr>';
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
            </div>
