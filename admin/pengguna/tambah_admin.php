<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Admin</title>
    <link rel="Icon" href="img/logo.png" type="image/x-Icon">
<style>
   /* style.css */
body {
    font-family: Arial, sans-serif;
    background-color: #f7f9fc;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 400px;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #555;
}

input, select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
}

input:focus, select:focus {
    outline: none;
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

.buttons {
    display: flex;
    justify-content: space-between;
}

.btn {
    width: 48%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    color: white;
    cursor: pointer;
}

.btn.tambah {
    background-color: #007bff;
}

.btn.tambah:hover {
    background-color: #0056b3;
}

.btn.batal {
    background-color: #dc3545;
    text-decoration: none;
    text-align: center;
}

.btn.batal:hover {
    background-color: #a71d2a;
}

</style>
</head>
<body>
    <div class="container">
        <h1>Tambah Admin</h1>
        <form action="tambah_admin.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password" required>
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select id="role" name="role" required>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>
            <div class="form-group buttons">
                <button type="submit" class="btn tambah">Tambah</button>
                <a href="data_pengguna.php" class="btn batal">Batal</a>
            </div>
        </form>
    </div>

    <?php
// Konfigurasi koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "db_lpkaikoku";

// Membuat koneksi
$mysqli = mysqli_connect($host, $user, $password, $database);

// Periksa koneksi
if (!$mysqli) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Tangkap data dari form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email_admin = $_POST['email'];
    $password = md5($_POST['password']); // Menggunakan MD5 untuk hashing password
    $role = $_POST['role'];

    // Query untuk menambahkan data ke tabel tb_admin1
    $sql = "INSERT INTO tb_admin1 (username, email_admin, password, roles) 
            VALUES ('$username', '$email_admin', '$password', '$role')";

    if (mysqli_query($mysqli, $sql)) {
        // Jika berhasil, redirect ke halaman data pengguna
        header("Location: data_pengguna.php?status=sukses");
        exit;
    } else {
        // Jika gagal, tampilkan pesan error
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>
</body>
</html>
