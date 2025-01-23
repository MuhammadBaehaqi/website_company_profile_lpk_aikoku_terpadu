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
    <!-- <link rel="stylesheet" href="style_login.css"> -->
    <link rel="Icon" href="img/logo.png" type="image/x-Icon">
    <style>
          * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url('img/foto_login.jpg'); 
            /* backrgound ini belum kebaca */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

    .back-button {
    display: block; 
    text-decoration: none;/* Menghilangkan garis bawah link */
    color: #666;
    background-color: #00ff37;  
    padding: 8px 16px; /* Jarak untuk tombol */
    border-radius: 4px; 
    margin-bottom: 20px; /* Jarak bawah tombol */
    display: flex;
    align-items: center; /* Posisi vertikal tengah */
    transition: all 0.3s ease;
    border: 1px solid #ddd; /* Garis tepi tombol */
    width: fit-content; /* Lebar sesuai konten */
}

.back-button:hover {
    background-color: #00b300;
}

.back-button::before {
    content: '←';
    margin-right: 8px;  /* Jarak kanan panah */
    font-size: 16px;
}

.login-container {
     background: rgba(255, 255, 255, 0.6); /* Lebih transparan */
    padding: 40px; /* Jarak dalam container */
    border-radius: 10px; 
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
    width: 100%;
    max-width: 400px;
    backdrop-filter: blur(10px); /* Efek blur background */
}

        .logo-container {
            text-align: center;
            margin-bottom: 20px; /* Jarak bawah */
        }

        .logo {
            width: 120px;
            height: 120px;
            margin-bottom: 15px; /* Jarak bawah */
            background: #f0f0f0;
            border-radius: 50%;
            display: inline-flex;  /* Tampilan flex inline */
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #666;
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px; /* Jarak bawah */
        }

        .login-header h1 {
            color: #000;
            font-size: 2em;
            margin-bottom: 10px;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-group {
            position: relative;
            margin-bottom:5px;
        }

        .form-group input {
            width: 100%;
            padding: 15px 10px ; /* Tambahkan ruang di atas */
            border: 1px solid #ccc; /* Garis tepi */
            border-radius: 5px;
            font-size: 16px;
            outline: none;
            transition: border-color 0.3s ease;
            background: rgba(255, 255, 255, 0.9);
        }

        /* Mengatur label input */
        .form-group label {
            position: absolute; /* Posisi absolut */
            left: 15px;
            top: 50%;
            transform: translateY(-50%); /* Transformasi posisi */
            color: #666;
            transition: all 0.3s ease;
            pointer-events: none;  /* Menonaktifkan interaksi mouse */
            font-size: 16px;
            padding: 0 5px; /* Tambahkan padding agar label tidak menempel */
        }
.form-group input:focus {
    border-color: #007bff; /* Warna biru saat fokus */
    box-shadow: 0 0 8px rgba(0, 123, 255, 0.8); /* Efek glow biru */
    color: #000; /* Menjaga warna teks tetap hitam */
}
.form-group input::placeholder {
    color: transparent; /* Menyembunyikan placeholder agar tidak berubah warna */
}
.form-group label {
    color: #666; /* Warna label default */
}
        /* Efek label  */
        .form-group input:focus + label,
        .form-group input:not(:placeholder-shown) + label {
            top: -10px; /* Geser lebih ke atas */
            font-size: 12px;
            background:;
             color: #666; /* Tetap warna abu-abu agar tidak berubah menjadi biru */
            padding: 0 5px;
        }

        .login-button {
            background: #00ff37;
            color: white;
            padding: 15px;
            border: none;/* Tanpa border */
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .login-button:hover {
            background:  #00b300;
        }

        .forgot-password {
            text-align: center;
            margin-top: 20px;
        }

        .forgot-password a {
            color: #00ff37;
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        /* Pengaturan responsive untuk layar kecil */
@media (max-width: 480px) {
    .login-container {
        padding: 20px; /* mengkurangi padding */
        margin: 20px; /* menambah margin */
    }
    
    .login-header h1 {
        font-size: 1.5em; /* Ukuran font lebih kecil */
    }

    .logo {
        width: 100px;
        height: 100px;
    }
}
        
</style
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