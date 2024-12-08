<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    <link rel="Icon" href="img/logo.png" type="image/x-Icon">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f3f4f6;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    width: 100%;
    max-width: 400px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    border-radius: 8px;
}

.forgot-password-box {
    text-align: center;
}

h2 {
    margin-bottom: 10px;
    color: #333;
}

p {
    margin-bottom: 20px;
    color: #555;
}

.form-group {
    margin-bottom: 15px;
    text-align: left;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #333;
    font-size: 14px;
}

input[type="email"] {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="email"]:focus {
    border-color: #00ff37;
    outline: none;
}

.btn {
    width: 100%;
    padding: 10px;
    background-color: #00ff37;
    border: none;
    border-radius: 4px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    margin-top: 10px;
}

.btn:hover {
    background-color: #00b300;
}

.back-link {
    display: block;
    margin-top: 20px;
    font-size: 14px;
    color: #00ff37;
    text-decoration: none;
}

.back-link:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
    <div class="container">
        <div class="forgot-password-box">
            <h2>Lupa Password</h2>
            <p>Masukkan email Anda untuk mengatur ulang kata sandi</p>
            <form action="proses-lupa-password.php" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan email" required>
                </div>
                <button type="submit" class="btn">Kirim</button>
            </form>
            <a href="login.php" class="back-link">Kembali ke Login</a>
        </div>
    </div>
</body>
</html>
