<?php
include 'cek_auth.php';
include 'sidebar.php';
?>
<head>
    <title>Data Pengguna</title>
<style>
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
    background-color: #f2f2f2;
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

table tr:hover {
    background-color: #f5f5f5;
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

</style>
</head>
<div class="main-content">
        <?php
        if ($_SESSION['role'] !== 'admin') {
            echo "Anda tidak berhak mengakses halaman ini.";
            exit;
        }
        ?>
        <div class="container">
            <div class="controls">
                <a href="tambah_pengguna.php" class="btn-add">Tambah Data Pengguna</a>
                <div class="show-search">
                    <label for="show">Show: </label>
                    <select id="show">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                    </select>
                    <input type="text" id="search" placeholder="Cari pengguna...">
                </div>
            </div>
            <table>
                
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Aksi</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                include 'config.php'; 
                $result = $mysqli->query("SELECT * FROM tb_admin1"); // Ambil data dari tabel tb_admin1
                $i = 1;
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $i . '</td>';
                    echo '<td>' .$row['username'] . '</td>';
                    echo '<td>' .$row['password'] . '</td>';
                    echo '<td><a href="edit.php?id_admin=' . $row['id_admin'] . '"class="btn btn-edit">Edit</a></td>';
                    echo '<td><a href="hapus_admin.php?id_admin=' . $row['id_admin'] . '"class="btn btn-delete">Hapus</a></td>';
                    echo '</tr>';
                    $i++;
                }
                ?>
                    <!-- <tr>
                        <td>1</td>
                        <td>Imam Joharudin</td>
                        <td>imam123</td>
                        <td>
                            <button class="btn-edit">Edit</button>
                            <button class="btn-delete">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Ali Chamdan</td>
                        <td>ali123</td>
                        <td>
                            <button class="btn-edit">Edit</button>
                            <button class="btn-delete">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Octa Hidayat</td>
                        <td>octa123</td>
                        <td>
                            <button class="btn-edit">Edit</button>
                            <button class="btn-delete">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Muhammad Baehaki</td>
                        <td>haki123</td>
                        <td>
                            <button class="btn-edit">Edit</button>
                            <button class="btn-delete">Hapus</button>
                        </td>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </main>
    </div>
