<?php
// ..itu untuk mencari atau mengambil file diluar folder ini(admin)
include '../../cek_auth.php';
include '../sidebar.php';
?>

<head>
    <title>Data Contact</title>
    <link rel="Icon" href="img/logo.png" type="image/x-Icon">
    <style>
           
    .main-content {
    margin-left: 250px; /* Memberikan margin kiri untuk sesuaikan sidebar */
    padding: 20px; /* Memberikan jarak di dalam konten */
    transition: margin-left 0.3s ease; 
}
        h1 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #28a745;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
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
  <h1>Data Contact</h1>
<div class="controls">
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
                <input type="text" name="search" id="search" placeholder="Cari Contact..." value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
                <button type="submit" style="display: none;">Cari</button>
            </form>
        </div>
    </div>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>No Wa</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Pesan</th>
                    <th>Update</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                 <?php
            include '../../config.php';

            // Mendapatkan parameter dari URL (GET)
            $search = isset($_GET['search']) ? $_GET['search'] : '';
            $show = isset($_GET['show']) ? (int)$_GET['show'] : 5;

            // Query untuk mencari data dan menampilkan berdasarkan jumlah
            $query = "SELECT * FROM tb_contact WHERE nama_contact LIKE ? OR no_contact LIKE ? OR email_contact LIKE ? LIMIT ?";
            $stmt = $mysqli->prepare($query);
            $searchTerm = '%' . $search . '%';
            $stmt->bind_param('sssi', $searchTerm, $searchTerm, $searchTerm, $show);
            $stmt->execute();
            $result = $stmt->get_result();

            $i = 1;
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $i . '</td>';
                echo '<td>' .$row['nama_contact'] . '</td>';
                echo '<td>' .$row['no_contact'] . '</td>';
                echo '<td>' .$row['email_contact'] . '</td>';
                echo '<td>' .$row['alamat_contact'] . '</td>';
                echo '<td>' .$row['pesan_contact'] . '</td>';
                echo '<td><a href="update_contact.php?id_contact=' . $row['id_contact'] . '"class="btn btn-update">Update</a></td>';
                echo '<td><a href="hapus_contact.php?id_contact=' . $row['id_contact'] . '" class="btn btn-delete" onclick="return confirm(\'Yakin ingin menghapus?\');">Hapus</a></td>';
                echo '</tr>';
                $i++;
            }
            ?>
        </tbody>
    </table>
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