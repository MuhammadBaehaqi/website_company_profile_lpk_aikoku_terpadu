<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Error - Japanese Style</title>
    <style>
        body {
            margin: 0;
            font-family: 'Noto Serif JP', serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(120deg, #ff9a9e, #fad0c4);
            color: #2c3e50;
            overflow: hidden;
            position: relative;
        }

        .container {
            text-align: center;
            z-index: 2;
        }

        .error {
            font-size: 10rem;
            font-weight: bold;
            color: #e74c3c;
            position: relative;
            text-shadow: 0 0 15px #e74c3c, 0 0 30px #c0392b;
        }

        .error span {
            display: inline-block;
            animation: float 3s ease-in-out infinite;
        }

        .error span:nth-child(2) {
            animation-delay: 0.2s;
        }

        .error span:nth-child(3) {
            animation-delay: 0.4s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        .message {
            font-size: 1.5rem;
            margin-top: 20px;
            color: #34495e;
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        .button {
            margin-top: 30px;
        }

        .button a {
            text-decoration: none;
            padding: 12px 25px;
            background: #e74c3c;
            color: white;
            border-radius: 5px;
            transition: background 0.3s;
            font-weight: bold;
        }

        .button a:hover {
            background: #c0392b;
        }

        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

    .background img.sakura {
        position: absolute;
        width: 80px;
        height: 80px;
        opacity: 0.7;
        animation: sakuraFall var(--duration) linear infinite;
    }

    .background img.sakura:nth-child(odd) {
        animation-duration: calc(var(--duration) + 2s);
    }

    @keyframes sakuraFall {
        0% {
            left: calc(100% * var(--position));
            top: -10%;
            transform: rotate(0deg);
        }
        50% {
            transform: rotate(180deg) scale(1.2);
        }
        100% {
            left: calc(-50% * var(--position));
            top: 110%;
            transform: rotate(360deg) scale(1);
        }
    }


        .branch {
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .branch img {
            position: absolute;
            top: 30%;
            width: 120px;
            height: 120px;
            opacity: 0.8;
        }

        .branch.left img {
            left: -60px;
            transform: rotate(-15deg);
        }

        .branch.right img {
            right: -60px;
            transform: rotate(15deg);
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="background">
        <!-- Sakura falling -->
       <img src="img/sakura.png" style="--position: 0.1; --duration: 8s;" class="sakura">
<img src="img/sakura.png" style="--position: 0.3; --duration: 10s;" class="sakura">
<img src="img/sakura.png" style="--position: 0.5; --duration: 12s;" class="sakura">
<img src="img/sakura.png" style="--position: 0.7; --duration: 9s;" class="sakura">
<img src="img/sakura.png" style="--position: 0.9; --duration: 11s;" class="sakura">

    </div>
    <!-- Ranting kiri dan kanan -->
    <div class="branch left">
        <img src="img/ranting1.png">
    </div>
    <div class="branch right">
        <img src="img/ranting.png">
    </div>
    <div class="container">
        <div class="error">
            <span>4</span>
            <span>0</span>
            <span>4</span>
        </div>
        <div class="message">Maaf! Halaman yang Anda cari tidak ditemukan.</div>
        <div class="button">
            <a href="/">Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>
