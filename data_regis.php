<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Registration</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="Icon" href="img/logo.png" type="image/x-Icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

    
        .table-container {
    margin-left: 250px; /* Sesuaikan dengan lebar sidebar */
    padding: 20px;
    box-sizing: border-box;
}


        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        table th, table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #4CAF50;
            color: white;
        }

        table tr:hover {
            background-color: #ddd;
        }

        .btn {
    display: inline-block;
    padding: 6px 12px;
    margin: 0 5px;
    border-radius: 4px;
    text-decoration: none;
    font-size: 14px;
    transition: background-color 0.3s ease;
    cursor: pointer;
}

.btn-update {
    background-color: #2196F3;
    color: white;
}

.btn-update:hover {
    background-color: #1976D2;
}

.btn-delete {
    background-color: #f44336;
    color: white;
}

.btn-delete:hover {
    background-color: #d32f2f;
}

    </style>
</head>
<body>
    <div class="sidebar">
        <ul class="sidebar-menu">
            <li>
                <a href="db_admin.html" class="dashboard">Dashboard</a>
            </li>
            <li class="active">
                <a href="data_regis.php" class="registration">Registration</a>
            </li>
            <li>
                <a href="settings.php" class="settings">Settings</a>
            </li>
            <li>
                <a href="" class="logout">Log Out</a>
            </li>
        </ul>
    </div>
    
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
                    echo '<td><a href="update.php?id_regis=' . $row['id_regis'] . '"class="btn btn-update">Update</a></td>';
                    echo '<td><a href="hapus.php?id_regis=' . $row['id_regis'] . '"class="btn btn-delete">Hapus</a></td>';
                    echo '</tr>';
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
