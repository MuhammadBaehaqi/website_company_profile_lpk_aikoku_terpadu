<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link rel="stylesheet" href="style.css">
    <link rel="Icon" href="img/logo.png" type="image/x-Icon">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <div class="container">
        <h2>Settings - Manage Form</h2>
        <p>Gunakan halaman ini untuk menambah, mengedit, atau menghapus elemen pada formulir pendaftaran.</p>

        <div class="settings-section">
            <h3>Daftar Elemen Form</h3>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Label</th>
                        <th>Type</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contoh data, bisa diganti dengan looping PHP untuk data dinamis -->
                    <tr>
                        <td>1</td>
                        <td>Nama Lengkap</td>
                        <td>text</td>
                        <td>kirim_nama</td>
                        <td>
                            <button>Edit</button>
                            <button>Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Tempat Lahir</td>
                        <td>text</td>
                        <td>kirim_ttl</td>
                        <td>
                            <button>Edit</button>
                            <button>Hapus</button>
                        </td>
                    </tr>
                    <!-- Tambahkan baris sesuai data elemen formulir -->
                </tbody>
            </table>
        </div>

        <div class="settings-section">
            <h3>Tambah Elemen Baru</h3>
            <form action="/BCK/admin/settings/proses_settings.php" method="post">
                <div class="form-group">
                    <label for="label">Label:</label>
                    <input type="text" id="label" name="label" required>
                </div>

                <div class="form-group">
                    <label for="type">Type:</label>
                    <select id="type" name="type" required>
                        <option value="text">Text</option>
                        <option value="date">Date</option>
                        <option value="email">Email</option>
                        <option value="textarea">Textarea</option>
                        <option value="select">Select</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="options">Options (untuk Select):</label>
                    <textarea id="options" name="options" placeholder="Pisahkan opsi dengan koma, contoh: Option1,Option2"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Tambah Elemen</button>
            </form>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
