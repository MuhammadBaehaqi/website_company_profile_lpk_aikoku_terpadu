<?php
include '../../config.php';
include '../sidebar.php';
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $link = $_POST['link'];
        $icon = $_POST['icon'];
        if ($mysqli->query("INSERT INTO program (title, description, link, icon) VALUES ('$title', '$description', '$link', '$icon')")) {
            // Redirect dengan status sukses
            header("Location: program_admin.php?status=success");
            exit;
        } else {
            // Redirect dengan status gagal
            header("Location: program_admin.php?status=error");
            exit;
        }
    } 
}
// Handle search
$search = isset($_GET['search']) ? $_GET['search'] : '';
$query = "SELECT * FROM program";
if (!empty($search)) {
    $query .= " WHERE title LIKE '%$search%' OR description LIKE '%$search%'";
}
// Fetch filtered programs
$result = $mysqli->query($query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Admin</title>
  
    <link rel="Icon" href="img/logo.png" type="image/x-Icon">
    <style>
    /* Global Styles */
        /* body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        } */

        .main-content {
            margin-left: 250px; /* Sesuaikan dengan lebar sidebar */
            padding: 20px;
        }

        h1, h2 {
            text-align: center;
            color: #4CAF50;
        }

        h1 {
            margin-top: 20px;
        }

        h2 {
            margin-top: 30px;
        }

        /* Form Styles */
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        input[type="text"], textarea {
    width: 95%; /* Sedikit kurang dari 100% */
    padding: 10px;
    margin: 10px auto; /* Tambahkan jarak */
    border-radius: 4px;
    border: 1px solid #ccc;
    
}

        textarea {
            height: 100px;
            resize: none;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Table Styles */
        table {
            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;  /* Ubah dari collapse ke separate */
            border-spacing: 0; /* Tambahkan untuk jarak antar garis */
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border: 1px solid #ddd; /* Garis luar tabel */
        }

        table th, table td {
            padding: 15px;
            text-align: left;
            border: 1px solid #ddd; /* Garis setiap kolom */
            vertical-align: top; /* Pastikan konten di sel atas */
        }

        table th {
            background-color: #4CAF50;
            color: white;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }
/* Input and Textarea Styles in Table */
table input[type="text"], table textarea {
     width: 95%; /* Kurangi sedikit dari 100% agar tidak menempel ke tepi */
    padding: 8px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box; /* Pastikan padding masuk dalam width */
}

table textarea {
    resize: none;
    height: 80px;
}
        /* Action Button Styles */
        a button.update-btn {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
        }

        a button.update-btn:hover {
            background-color: #0056b3;
        }

        a button.delete-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
        }

        a button.delete-btn:hover {
            background-color: #c82333;
        }

        /* Confirmation Dialog Button */
        button:active {
            transform: scale(0.98);
        }
        /* Action Buttons in the Same Line */
        .actions {
        display: flex;
        gap: 8px; /* Jarak antar tombol */
        }

        .actions a {
            text-decoration: none; /* Menghapus garis bawah link */
        }

    </style>
</head>

<body>
   <div class="main-content">
        <h1>Manage Programs</h1>
        <h2>Add New Program</h2>
        <form method="POST">
            <input type="text" name="title" placeholder="Title" required>
            <textarea name="description" placeholder="Description" required></textarea>
            <input type="text" name="link" placeholder="Link" required>
            <input type="text" name="icon" placeholder="Icon (e.g., fa-handshake)" required>
            <button type="submit" name="add">Add Program</button>
        </form>
<h2>Search Programs</h2>
        <form method="GET">
            <input type="text" name="search" placeholder="Search by title or description" value="<?= htmlspecialchars($search) ?>">
            <button type="submit">Search</button>
        </form>
        <h2>Existing Programs</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Link</th>
                    <th>Icon</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php  $no = 1; // Inisialisasi nomor urut
    while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $no++; ?></td> <!-- Menampilkan nomor urut -->
                            <td><input type="text" name="title" value="<?= $row['title'] ?>"></td>
                            <td><textarea name="description"><?= $row['description'] ?></textarea></td>
                            <td><input type="text" name="link" value="<?= $row['link'] ?>"></td>
                            <td><input type="text" name="icon" value="<?= $row['icon'] ?>"></td>
                            <td>
                                <div class="actions">
                                    <a href="update_program.php?id_program=<?= $row['id_program'] ?>" 
                                    onclick="return confirm('Are you sure you want to update this program?')">
                                    <button type="button" class="update-btn">Update</button>
                                    </a>
                                    <a href="hapus_program.php?id_program=<?= $row['id_program'] ?>" 
                                    onclick="return confirm('Are you sure you want to delete this program?')">
                                    <button type="button" class="delete-btn">Delete</button>
                                    </a>
                                </div>
                            </td>

                        </form>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
<script>
    alert('Program berhasil ditambahkan!');
</script>
<?php elseif (isset($_GET['status']) && $_GET['status'] === 'error'): ?>
<script>
    alert('Terjadi kesalahan saat menambahkan program.');
</script>
<?php endif; ?>

</body>

</html>
