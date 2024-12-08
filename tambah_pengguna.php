<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pengguna</title>
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
        <h1>Tambah Data Pengguna</h1>
        <form action="proses_tambah.php" method="POST">
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
</body>
</html>
