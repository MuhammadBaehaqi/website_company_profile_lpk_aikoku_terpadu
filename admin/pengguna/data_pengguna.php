<?php
// ..itu untuk mencari atau mengambil file diluar folder ini(admin)
include '../../cek_auth.php';
include '../sidebar.php';
?>
<head>
    <link rel="Icon" href="img/logo.png" type="image/x-Icon">
    <title>Data Pengguna</title>
<style>
    /* Main Content Styling */
.main-content {
    margin-left: 250px; /* Align with sidebar */
    padding: 20px; /* Space within the content */
    transition: margin-left 0.3s ease;
}

/* Container for the page */
.container {
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

/* Controls section (Add button and Search) */
.controls {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

/* Search and Show dropdown container */
.show-search {
    display: flex;
    align-items: center;
    gap: 10px;
}

/* Button styling for "Add" action */
.btn-add {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-add:hover {
    background-color: #45a049;
}

/* Search input and Show dropdown styling */
#show, #search {
    padding: 5px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

/* Table Styling */
table {
    width: 100%;
    border-collapse: collapse; /* Collapse borders into one */
    margin-top: 10px;
}

/* Table Header Styling */
table thead {
    background-color: #28a745;
    color: white;
}

/* Table Cells Styling */
table th, table td {
    text-align: left;
    padding: 12px;
    border: 1px solid #ddd; /* Add border to each cell */
}

/* Table Row Styling for Even Rows */
table tr:nth-child(even) {
    background-color: #f9f9f9;
}

/* Table Row Hover Effect */
table tr:hover {
    background-color: #f5f5f5;
    border-bottom: 2px solid #ddd; /* Highlight row on hover */
}

table thead tr:hover {
    background-color: #218838;
}

/* Buttons */
.btn {
    text-decoration: none;
    padding: 8px 12px;
    border-radius: 5px;
    font-size: 14px;
    text-align: center;
    display: inline-block;
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

/* Responsive Styling for smaller screens */
@media screen and (max-width: 768px) {
    .main-content {
        margin-left: 0;
    }

    .controls {
        flex-direction: column;
        align-items: stretch;
        gap: 10px;
    }

    .show-search {
        flex-direction: column;
        align-items: stretch;
    }

    #search, #show {
        width: 100%;
    }

    table {
        font-size: 14px;
    }

    table thead {
        border-bottom: none;
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
    if ($_SESSION['role'] === 'staff') {
    echo "Anda tidak berhak mengakses halaman ini.";
    exit();
}
?>
        <?php
if ($_SESSION['role'] === 'user') {
    echo "Anda tidak berhak mengakses halaman ini.";
    exit();
}
        ?>
        <div class="container">
    <div class="controls">
    <a href="tambah_admin.php" class="btn-add">Tambah Admin</a>
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
                <th>Id</th>
                <th>Username</th>
                <th>Email</th>
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
            $query = "SELECT * FROM tb_admin1 WHERE username LIKE ? OR email_admin LIKE ? LIMIT ?";
            $stmt = $mysqli->prepare($query);
            $searchTerm = '%' . $search . '%';
            $stmt->bind_param('ssi', $searchTerm, $searchTerm, $show);
            $stmt->execute();
            $result = $stmt->get_result();

            $i = 1;
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $i . '</td>';
                echo '<td>' . $row['username'] . '</td>';
                echo '<td>' . $row['email_admin'] . '</td>';
                echo '<td>
                        <a href="edit.php?id_admin=' . $row['id_admin'] . '" class="btn btn-edit">Edit</a>
                        <a href="hapus_admin.php?id_admin=' . $row['id_admin'] . '" class="btn btn-delete" onclick="return confirm(\'Yakin ingin menghapus?\');">Hapus</a>
                    </td>';
                echo '</tr>';
                $i++;
            }
            ?>
        </tbody>
    </table>
</div>

    </main>
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