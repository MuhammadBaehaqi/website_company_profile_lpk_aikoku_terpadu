<style>
table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
</style>

<h1>Daftar Pelajar</h1>

    <table>
        <thead>
            <tr>
                <th>Nama Lengkap</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>Agama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
            // Koneksi ke database (menggunakan kode dari sebelumnya)
            include_once("config.php");
            $koneksi = mysqli_connect(hostname: "localhost", username: "root", password: "", database: "db_lpkaikoku");

            // Ambil data dari database
            $query = "SELECT * FROM tb_pelajar";
            $hasil = mysqli_query(mysql: $koneksi, query: $query);

            // Tampilkan data dalam tabel 
            while ($row = mysqli_fetch_assoc($hasil)) {
                echo "<tr>";
                echo "<td>" . $row['Nama_lengkap'] . "</td>";
                echo "<td>" . $row['TTL'] . "</td>";
                echo "<td>" . $row['Agama'] . "</td>";
                echo "<td>";
                echo "<a href='edit.php?id=" . $row['id'] . "'>Edit</a> | ";
                echo "<a href='delete.php?id=" . $row['id'] . "'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }

            // Tutup koneksi database
            mysqli_close(mysql: $koneksi);
            ?> 
        </tbody>
    </table>