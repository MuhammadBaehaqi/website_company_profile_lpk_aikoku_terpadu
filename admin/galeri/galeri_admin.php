
<?php
// ..itu untuk mencari atau mengambil file diluar folder ini(admin)
include '../../cek_auth.php';
include '../sidebar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Upload Foto</title>
    <style>
        body {
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
             justify-content: center; /* Memastikan form berada di tengah */
        }
        
        .main-content {
    margin-left: 250px; /* Memberikan margin kiri untuk sesuaikan sidebar */
    padding: 20px; /* Memberikan jarak di dalam konten */
    transition: margin-left 0.3s ease; 
}
        .container {
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 20px; /* Memberikan jarak di dalam container */
}

.controls {
    display: flex; /* Mengatur elemen secara fleksibel */
    justify-content: space-between; /* Membagi ruang antara elemen */
    align-items: center;
    margin-bottom: 20px; /* Memberikan jarak bawah */
}

.show-search {
    display: flex; /* Menata elemen secara fleksibel */
    align-items: center;
    gap: 10px;
}

.btn-add {
    background-color: #4CAF50;
    color: white;
    border: none; /* Menghapus border */
    text-decoration: none;
    padding: 10px 15px; /* Memberikan jarak di dalam tombol */
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-add:hover {
    background-color: #45a049;
}

#show {
    padding: 5px;  /* Memberikan jarak dalam input */
    border: 1px solid #ddd;
    border-radius: 4px;
}

#search {
    padding: 5px;  /* Memberikan jarak dalam input */
    border: 1px solid #ddd;
    border-radius: 4px;
    width: 200px;
}

table {
    width: 100%;
    border-collapse: collapse; /* Menghilangkan jarak antar border */
    margin-top: 10px; /* Memberikan jarak atas */
    
}

table thead {
    background-color:  #28a745;
    color: white;
}

table th, table td {
    text-align: left; /* Menyelaraskan teks ke kiri */
    padding: 12px; /* Memberikan jarak dalam sel tabel */
    border-bottom: 1px solid #ddd; 
}

/* Warna latar untuk baris genap */
table tr:nth-child(even) {
    background-color: #f9f9f9; 
}

table tr:hover{
    background-color: #f5f5f5;

}
table thead tr:hover {
    background-color: #218838 ;
    
}
/* Buttons */
.btn {
    text-decoration: none;
    padding: 8px 12px; /* Memberikan jarak dalam tombol */
    border-radius: 5px;
    font-size: 14px;
    text-align: center;
    display: inline-block; /* Membuat tombol tampil sebagai elemen blok inline */
    color: #fff;
    transition: background-color 0.3s ease-in-out;
}

.btn-edit {
    background-color: #28a745;
}

.btn-edit:hover {
    background-color: #218838;
}

.btn-delete {
    background-color: #dc3545;
}

.btn-delete:hover {
    background-color: #c82333;
}

/* Responsive */
@media screen and (max-width: 768px) {
    .main-content {
        margin-left: 0; /* Konten utama memenuhi lebar penuh pada layar kecil */
    }

    .controls {
        flex-direction: column; /* Menata secara vertikal */
        align-items: stretch; /* Mengatur agar memenuhi lebar container */
        gap: 10px;
    }

    .show-search {
        flex-direction: column; /* Menata filter dan pencarian secara vertikal */
        align-items: stretch; /* Mengatur agar memenuhi lebar container */
    }

    #search, #show {
        width: 100%;
    }

    table {
        font-size: 14px;
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
    <div class="container">
            <div class="controls">
                <a href="tambah_galleri.php" class="btn-add">Tambah Galleri</a>
                <div class="show-search">
                    <!-- Form Pencarian dan Dropdown Show -->
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
            <input type="text" name="search" id="search" placeholder="Cari pengguna..." value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
            <button type="submit" style="display: none;">Cari</button>
        </form>
                </div>
            </div>
            <table>
                
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Keterangan</th>
                        <th>Tanggal Upload</th>
                        <th>Lokasi Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                include '../../config.php'; 

                // Mendapatkan parameter dari URL (GET)
                $search = isset($_GET['search']) ? $_GET['search'] : '';
                $show = isset($_GET['show']) ? (int)$_GET['show'] : 5;

                // Query untuk mencari data dan menampilkan berdasarkan jumlah
                $query = "SELECT * FROM tb_galeri WHERE keterangan LIKE ? LIMIT ?";
                $stmt = $mysqli->prepare($query);
                $searchTerm = '%' . $search . '%';
                $stmt->bind_param('si', $searchTerm, $show);
                $stmt->execute();
                $result = $stmt->get_result();

                $i = 1;
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $i . '</td>';
                    echo '<td><img src="../../uploads/' . $row['foto_galeri'] . '" style="max-width: 100px; max-height: 100px; object-fit: contain;"></td>';
                    echo '<td>' .$row['keterangan'] . '</td>';
                    echo '<td>' .$row['upload_date'] . '</td>';
                    echo '<td>' .$row['detail'] . '</td>';
                    echo '<td>
                    <a href="edit_galeri.php?id_galeri=' . $row['id_galeri'] . '" class="btn btn-edit">Edit</a>
                    <a href="hapus_galeri.php?id_galeri=' . $row['id_galeri'] . '" class="btn btn-delete" onclick="return confirm(\'Yakin ingin menghapus?\');">Hapus</a>
                    </td>';
                    echo '</tr>';
                    $i++;
                }
                ?>
            </tbody>
        </table>
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
</body>
</html>
