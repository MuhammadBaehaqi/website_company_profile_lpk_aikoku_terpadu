<?php
// ..itu untuk mencari atau mengambil file diluar folder ini(admin)
include '../../cek_auth.php';
include '../sidebar.php';
?>
<head>
  <title>Settings</title>
<style>
    /* Main Content */
.main-content {
    padding: 20px;
    background-color: #fff;
    color: #333;
    font-family: Arial, sans-serif;
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.main-content {
    padding: 20px;
    background-color: #fff;
    color: #333;
    font-family: Arial, sans-serif;
    margin-left: 250px; /* Sesuaikan dengan lebar sidebar */
}


.container {
    max-width: 900px;
    margin: 20px auto;
    padding: 20px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

}


header h1 {
    text-align: center;
    color: #333;
}

/* Section Styling */
.add-form, .form-list {
    margin-bottom: 40px;
}

h2 {
    text-align: center;
    color: #4CAF50;
}

/* Form Styling */
form {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 15px;
}

input, select {
    width: 80%;
    padding: 8px;
    font-size: 1em;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-top: 5px;
}

button {
    padding: 10px 15px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

/* Table Styling */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    border-radius: 4px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 12px;
    text-align: left;
}

th {
    background-color: #4CAF50;
    color: white;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

button.edit-btn, button.delete-btn {
    padding: 5px 10px;
    font-size: 1em;
    border-radius: 4px;
    cursor: pointer;
}

button.edit-btn {
    background-color:#4CAF50;
    color: white;
    margin-right: 10px;
}

button.edit-btn:hover {
    background-color: #45a049;
}

button.delete-btn {
    background-color: #f44336;
    color: white;
}

button.delete-btn:hover {
    background-color: #d32f2f;
}
@media (max-width: 768px) {
    .sidebar {
        width: 200px; /* Atur ulang ukuran sidebar */
    }
    .main-content, .container {
        margin-left: 100px; /* Sesuaikan dengan sidebar lebih kecil */
    }
}

@media (max-width: 480px) {
    .sidebar {
        width: 100px; /* Sidebar minimal untuk layar kecil */
    }
    .main-content, .container {
        margin-left: 100px; /* Sesuaikan dengan lebar minimal sidebar */
    }
}

</style>
</head>
<body>
   <div class="main-content">
    <div class="container">
        <header>
            <h1>Form Settings</h1>
        </header>

        <!-- Form for adding new field -->
        <section class="add-form">
            <h2>Tambah Form</h2>
            <form>
                <label for="field_name">Nama Bidang :</label>
                <input type="text" id="field_name" name="field_name" required><br>

                <label for="field_type">Type Bidang :</label>
                <select id="field_type" name="field_type" required>
                    <option value="text">Text</option>
                    <option value="select">Select</option>
                    <option value="textarea">Textarea</option>
                </select><br>

                <label for="options">Opsi (jika ada, untuk Pilih):</label>
                <input type="text" id="options" name="options"><br>

                <button type="submit">Tambah</button>
            </form>
        </section>

        <!-- Table yang sudah ada -->
        <section class="form-list">
            <h2>Formulir Sekarang</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nama Bidang</th>
                        <th>Tipe Bidang</th>
                        <th>Opsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>Text</td>
                        <td>-</td>
                        <td>
                            <button class="edit-btn">Edit</button>
                            <button class="delete-btn">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>Select</td>
                        <td>Male, Female</td>
                        <td>
                            <button class="edit-btn">Edit</button>
                            <button class="delete-btn">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>Textarea</td>
                        <td>-</td>
                        <td>
                            <button class="edit-btn">Edit</button>
                            <button class="delete-btn">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
    </div>
</body>
</html>
