<?php
session_start();
require 'config.php';

if (isset($_SESSION['username'])) {
    header("Location: admin/dashboard/db_admin.php");
    exit();
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['get_username'];
    $password = md5($_POST['get_password']); // Hashing password dengan MD5

    // Query menggunakan prepared statement
    $stmt = $mysqli->prepare("SELECT * FROM tb_admin1 WHERE username = ? AND password = ?");
    $stmt->bind_param('ss', $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $data_session = $result->fetch_assoc();
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $data_session['roles'];

        // Pengalihan ke halaman dashboard yang benar
        header("Location: admin/dashboard/db_admin.php");
        exit();
    } else {
        $error = "Username atau password salah.";
    }
    $stmt->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style_login.css">
    <link rel="Icon" href="img/logo.png" type="image/x-Icon">
</head>
<body>
    <div class="login-container">
        <a href="index.php" class="back-button">Kembali</a>
        <div class="logo-container">
    <img src="img/logo.png" alt="Logo" class="logo">
</div>

        <div class="login-header">
            <h1>Selamat Datang</h1>
            <p>Silakan masuk ke akun Anda</p>
            <?php if ($error): ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>
        </div>
        
        <form action="login.php" method="post" class="login-form">
            <div class="form-group">
                <input name="get_username" type="text" id="username" placeholder="">
                <label for="username">Username</label>
            </div>
            <div class="form-group">
                <input name="get_password" type="password" id="password" placeholder="">
                <label for="password">Password</label>
            </div>
            <button type="submit" class="login-button">Masuk</button>
        </form>
        <div class="forgot-password">
            <a href="lupa_pw.php">Lupa password?</a>
        </div>
    </div>
</body>
</html>