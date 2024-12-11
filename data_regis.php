<?php
include 'cek_auth.php';
include 'sidebar.php';
?>
<head>
    <title>Data Registrasi</title>
    <style>
/* Main container styling */
.main-content {
    margin-left: 250px; /* Menyesuaikan dengan lebar sidebar */
    padding: 20px; /* Memberikan padding di dalam konten agar tidak menempel ke tepi */
    transition: margin 0.3s ease-in-out;
}

/* Table container */
.table-container h2 {
    text-align: center;
    color: #333;
    margin-bottom: 20px; /* jarak bawah antara judul dan tabel */
}

.table-scroll-wrapper {
    width: 100%;
    overflow-x: auto;  /* Membuat tabel bisa digulir horizontal jika lebar tabel lebih besar dari layar */
    -webkit-overflow-scrolling: touch; /* Mendukung scroll pada perangkat dengan sentuhan (misalnya perangkat mobile) */
}

.table-container table {
    width: 100%;
    border-collapse: collapse; /* Menghilangkan jarak antara border sel tabel */
    background-color: #ffffff;
    border-radius: 8px;
    overflow: hidden; /* Menyembunyikan bagian yang melampaui batas border */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Table header */
.table-container table thead th {
    background-color: #28a745;
    color: #ffffff;
    padding: 12px 15px;  /* Padding di dalam header tabel */
    text-align: left;
    font-size: 14px;
}

/* Table rows */
 /* warna latar belakang abu-abu pada baris genap */
.table-container table tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

.table-container table tbody tr:hover {
    background-color: #e9ecef;
}

.table-container table tbody td {
    padding: 12px 15px; /* Padding pada setiap sel tabel */
    font-size: 14px;
    color: #333;
    text-align: left;
}

/* Buttons */
.btn {
    text-decoration: none;
    padding: 8px 12px; /* Memberikan padding pada tombol */
    border-radius: 5px;
    font-size: 14px;
    text-align: center;
    display: inline-block; /* Menampilkan tombol sebagai elemen blok sejajar dengan elemen lainnya */
    color: #fff;
    transition: background-color 0.3s ease-in-out;
}

.btn-update {
    background-color: #28a745;
}

.btn-update:hover {
    background-color: #218838;
}

.btn-delete {
    background-color: #dc3545;
}

.btn-delete:hover {
    background-color: #c82333;
}

/* Responsive Tabel Style */
@media screen and (max-width: 768px) {
    .table-scroll-wrapper {
        overflow-x: auto; /* scroll horizontal pada layar kecil */
    }

    .table-container table {
        width: 100%; /* tabel memenuhi lebar container */
        font-size: 12px; 
    }

    .table-container table thead th,
    .table-container table tbody td {
        padding: 8px; /* Mengurangi padding untuk tata letak yang lebih kompak */
    }

    .table-container h2 {
        font-size: 18px; /* Mengurangi ukuran font judul pada layar kecil */
        margin-bottom: 15px;
    }

    .btn {
        padding: 6px 10px; /* Ukuran tombol lebih kecil */
        font-size: 12px;
    }
}

/* Layar Kecil (Optional) */
@media screen and (max-width: 480px) {
    .table-container h2 {
        font-size: 16px; /* Ukuran font lebih kecil untuk layar sangat kecil */
    }

    .table-container table {
        font-size: 10px; /* Ukuran font tabel lebih kecil lagi */
    }
}

</style>
</head>
    

<div class="main-content">   
    <?php
if ($_SESSION['role'] === 'user') {
    echo "Anda tidak berhak mengakses halaman ini.";
    exit();
}
    ?>
     <div class="table-container">
        <h2>Data Registration</h2>
        <div class="table-scroll-wrapper">
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
                include 'config.php'; 
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
                    echo '<td><a href="hapus.php?id_regis=' . $row['id_regis'] . '" class="btn btn-delete" onclick="return confirm(\'Yakin ingin menghapus?\');">Hapus</a></td>';
                    echo '</tr>';
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
    </div>
            </div>
