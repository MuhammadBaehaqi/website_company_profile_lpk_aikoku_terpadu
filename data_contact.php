<?php
include 'cek_auth.php';
include 'sidebar.php';
?>
<head>
    <title>Data Contact</title>
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
    </style>
</head>

<div class="main-content">
  <h1>Data Contact</h1>

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
                include 'config.php'; 
                $result = $mysqli->query("SELECT * FROM tb_contact"); // Ambil data dari tabel tb_contact
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