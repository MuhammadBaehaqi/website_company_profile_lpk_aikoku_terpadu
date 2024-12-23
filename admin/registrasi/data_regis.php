<?php
// ..itu untuk mencari atau mengambil file diluar folder ini(admin)
include '../../cek_auth.php';
include '../sidebar.php';
?>
<head>
    <link rel="Icon" href="img/logo.png" type="image/x-Icon">
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
/* Table container */
.table-container table {
    width: 100%;
    border-collapse: collapse; /* Menghilangkan jarak antar border sel */
    border: 1px solid #ddd; /* Border di sekitar tabel */
    background-color: #ffffff;
    border-radius: 8px;
    overflow: hidden; /* Menyembunyikan bagian yang melampaui batas border */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Table header */
.table-container table thead th {
    background-color: #28a745;
    color: #ffffff;
    padding: 12px 15px;
    text-align: left;
    font-size: 14px;
    border: 1px solid #ddd; /* Border antara header */
}

/* Table rows */
.table-container table tbody td {
    padding: 12px 15px;
    font-size: 14px;
    color: #333;
    text-align: left;
    border: 1px solid #ddd; /* Border antara sel */
}

/* Hover effect untuk baris */
.table-container table tbody tr:hover {
    background-color: #f9f9f9; /* Warna latar saat di-hover */
}

.show-search {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        #show, #search {
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
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
 .show-search {
        flex-direction: column;
        align-items: stretch;
    }

    #search, #show {
        width: 100%;
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
    <button class="hamburger" onclick="toggleSidebar()">
        <span></span>
        <span></span>
        <span></span>
    </button>
<div class="main-content">   
    <?php
if ($_SESSION['role'] === 'user') {
    echo "Anda tidak berhak mengakses halaman ini.";
    exit();
}
    ?>
     <div class="table-container">
        <h2>Data Registration</h2>

        <!-- Form Pencarian dan Show Dropdown -->
        <div class="show-search">
            <form method="GET">
                <label for="show">Show: </label>
                <select name="show" id="show">
                    <option value="5" <?php echo (isset($_GET['show']) && $_GET['show'] == 5) ? 'selected' : ''; ?>>5</option>
                    <option value="10" <?php echo (isset($_GET['show']) && $_GET['show'] == 10) ? 'selected' : ''; ?>>10</option>
                    <option value="15" <?php echo (isset($_GET['show']) && $_GET['show'] == 15) ? 'selected' : ''; ?>>15</option>
                    <option value="30" <?php echo (isset($_GET['show']) && $_GET['show'] == 30) ? 'selected' : ''; ?>>30</option>
                    <option value="50" <?php echo (isset($_GET['show']) && $_GET['show'] == 50) ? 'selected' : ''; ?>>50</option>
                    <option value="100" <?php echo (isset($_GET['show']) && $_GET['show'] == 100) ? 'selected' : ''; ?>>100</option>
                </select>
                <input type="text" name="search" id="search" placeholder="Cari registrasi..." value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
                <button type="submit" style="display: none;">Cari</button>
            </form>
        </div>

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
                    <th>Telepon Keluarga</th>
                    <th>Bidang</th>
                    <th>Pendidikan Terakhir</th>
                    <th>Pengalaman Kerja</th>
                    <th>Status Pernikahan</th>
                    <th>Tinggi Badan</th>
                    <th>Berat Badan</th>
                    <th>Buta warna</th>
                    <th>Kesehatan</th>
                    <th>Penyakit Kronis</th>
                    <th>Golongan Darah</th>
                    <th>Kewarganegaraan</th>
                    <th>Update</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include '../../config.php';

                    // Mendapatkan parameter dari URL
                    $search = isset($_GET['search']) ? $_GET['search'] : '';
                    $show = isset($_GET['show']) ? (int)$_GET['show'] : 5;

                    // Query dengan pencarian dan limit jumlah data
                    $query = "SELECT * FROM tb_pelajar WHERE Nama_lengkap LIKE ? OR alamat_email LIKE ? LIMIT ?";
                    $stmt = $mysqli->prepare($query);
                    $searchTerm = '%' . $search . '%';
                    $stmt->bind_param('ssi', $searchTerm, $searchTerm, $show);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    $i = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>' . $i . '</td>';
                        echo '<td>' . $row['Nama_lengkap'] . '</td>';
                        echo '<td>' . $row['TTL'] . '</td>';
                        echo '<td>' . date("d F Y", strtotime($row['tanggal_lahir'])) . '</td>';
                        echo '<td>' . $row['usia'] . '</td>';
                        echo '<td>' . $row['Jenis_Kelamin'] . '</td>';
                        echo '<td>' . $row['Agama'] . '</td>';
                        echo '<td>' . $row['alamat_ktp'] . '</td>';
                        echo '<td>' . $row['alamat_email'] . '</td>';
                        echo '<td>' . $row['no_telepon'] . '</td>';
                        echo '<td>' . $row['alamat'] . '</td>';
                        echo '<td>' . $row['alamat_keluarga'] . '</td>';
                        echo '<td>' . $row['telepon_keluarga'] . '</td>';
                        echo '<td>' . $row['bidang'] . '</td>';
                        echo '<td>' . $row['pendidikan_terakhir'] . '</td>';
                        echo '<td>' . $row['pengalaman_kerja'] . '</td>';
                        echo '<td>' . $row['status_pernikahan'] . '</td>';
                        echo '<td>' . $row['tinggi_badan'] . '</td>';
                        echo '<td>' . $row['berat_badan'] . '</td>';
                        echo '<td>' . $row['buta_warna'] . '</td>';
                        echo '<td>' . $row['kesehatan'] . '</td>';
                        echo '<td>' . $row['penyakit_kronis'] . '</td>';
                        echo '<td>' . $row['golongan_darah'] . '</td>';
                        echo '<td>' . $row['kewarganegaraan'] . '</td>';
                        echo '<td><a href="update.php?id_regis=' . $row['id_regis'] . '" class="btn btn-update">Update</a></td>';
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

<script>
    let debounceTimer;
    
    // Kirim form secara otomatis saat dropdown 'show' diubah
    document.getElementById('show').addEventListener('change', function() {
        this.form.submit();
    });

    // Kirim form dengan debouncing saat mengetik di kolom pencarian
    document.getElementById('search').addEventListener('input', function() {
        clearTimeout(debounceTimer);  // Hapus timer sebelumnya
        debounceTimer = setTimeout(() => {
            this.form.submit();  // Kirim form setelah 500ms (atau sesuai kebutuhan)
        }, 500);
    });
</script>

<script>
function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar');
    const mainContent = document.querySelector('.main-content');

    if (sidebar.style.width === '250px') {
        sidebar.style.width = '0';
        mainContent.style.marginLeft = '0';
    } else {
        sidebar.style.width = '250px';
        mainContent.style.marginLeft = '250px';
    }
}
</script>
