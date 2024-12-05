<?php
include 'sidebar.php';
?>
<head>
    <title>Data Pengguna</title>
<style>
    .main-content {
    margin-left: 250px; /* Adjust based on sidebar width */
    padding: 20px;
    transition: margin-left 0.3s ease;
}

.container {
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

.controls {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.show-search {
    display: flex;
    align-items: center;
    gap: 10px;
}

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

#show {
    padding: 5px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

#search {
    padding: 5px;
    border: 1px solid #ddd;
    border-radius: 4px;
    width: 200px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

table thead {
    background-color: #f2f2f2;
}

table th, table td {
    text-align: left;
    padding: 12px;
    border-bottom: 1px solid #ddd;
}

table tr:nth-child(even) {
    background-color: #f9f9f9;
}

table tr:hover {
    background-color: #f5f5f5;
}

.btn-edit, .btn-delete {
    padding: 6px 10px;
    margin-right: 5px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-edit {
    background-color: #2196F3;
    color: white;
}

.btn-edit:hover {
    background-color: #1976D2;
}

.btn-delete {
    background-color: #f44336;
    color: white;
}

.btn-delete:hover {
    background-color: #d32f2f;
}

/* Responsive adjustments */
@media screen and (max-width: 768px) {
    .main-content {
        margin-left: 0; /* Full width on smaller screens */
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
}

</style>
</head>
<div class="main-content">
        <div class="container">
            <div class="controls">
                <button class="btn-add">Tambah Data Pengguna</button>
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
                    </tr>
                </thead>
                <tbody>
                    <?php
                include 'config.php'; // Pastikan file config.php berisi koneksi ke database
                $result = $mysqli->query("SELECT * FROM tb_admin1"); // Ambil data dari tabel tb_pelajar
                $i = 1;
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $i . '</td>';
                    echo '<td>' .$row['username'] . '</td>';
                    echo '<td>' .$row['password'] . '</td>';
                    echo '<td><a href="edit.php?id_admin=' . $row['id_admin'] . '"class="btn btn-update">Edit</a></td>';
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
