<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="Icon" href="img/logo.png" type="image/x-Icon">
</head>
<body>
    <div class="login-container">
        <a href="index.html" class="back-button">Kembali</a>
        <div class="logo-container">
    <img src="img/logo.png" alt="Logo" class="logo">
</div>

        <div class="login-header">
            <h1>Selamat Datang</h1>
            <p>Silakan masuk ke akun Anda</p>
        </div>
        <form class="login-form">
            <div class="form-group">
                <input type="text" id="username" placeholder="">
                <label for="username">Username</label>
            </div>
            <div class="form-group">
                <input type="password" id="password" placeholder="">
                <label for="password">Password</label>
            </div>
            <button type="submit" class="login-button">Masuk</button>
        </form>
        <div class="forgot-password">
            <a href="#">Lupa password?</a>
        </div>
    </div>
</body>
</html>