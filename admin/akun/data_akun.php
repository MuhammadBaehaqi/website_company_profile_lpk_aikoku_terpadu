<?php
// ..itu untuk mencari atau mengambil file diluar folder ini(admin)
include '../../cek_auth.php';
include '../sidebar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Akun</title>
    <link rel="Icon" href="../img/logo.png" type="image/x-icon">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

       
        .content {
            margin-left: 250px;
            padding: 50px;
        }

        .profile-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: auto;
        }

        .profile-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: block;
            margin: auto;
        }

        .profile-card h2 {
            text-align: center;
            margin: 10px 0;
        }

        .profile-info {
            margin-top: 20px;
        }

        .profile-info table {
            width: 100%;
            border-collapse: collapse;
        }

        .profile-info th, .profile-info td {
            text-align: left;
            padding: 10px;
        }

        .profile-info th {
            width: 30%;
            color: #555;
        }

        .buttons {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }

        .buttons button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px;
        }

        .buttons button:hover {
            background-color: #0056b3;
        }
        /* Hamburger Menu */
.hamburger {
    display: none;
    position: fixed;
    top: 15px;
    left: 15px;
    background-color: #2c3e50;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    z-index: 1000;
}
.hamburger span {
    display: block;
    width: 25px;
    height: 3px;
    background-color: #fff;
    margin: 5px 0;
}

@media screen and (max-width: 768px) {
    .sidebar {
        width: 0;
        overflow: hidden;
    }
    .main-content {
        margin-left: 0;
    }
    .hamburger {
        display: block;
    }
}
    </style>
</head>
<body>
    <button class="hamburger" onclick="toggleSidebar()">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <div class="content">
        <div class="profile-card">
            <img src="../../img/random.jpg" alt="Profile Picture">
            <h2>Profile</h2>
            <div class="profile-info">
                <table>
                    <tr>
                        <th>NIM</th>
                        <td>202257001</td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>Muhammad Baehaqi</td>
                    </tr>
                    <tr>
                        <th>Tempat / Tanggal Lahir</th>
                        <td>Brebes, 14 May 2004</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>Desa PETUNJUNGAN</td>
                    </tr>
                    <tr>
                        <th>Program</th>
                        <td>Magang</td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>Laki-laki</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>muhammadbaehaqi12@gmail.com</td>
                    </tr>
                    <tr>
                        <th>Telepon</th>
                        <td>085875962872</td>
                    </tr>
                </table>
            </div>
            <div class="buttons">
                <button>Ubah Profile</button>
                <button>Ubah Password</button>
            </div>
        </div>
    </div>
    <script>
function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar');
    const mainContent = document.querySelector('.main-content');

    if (sidebar.style.width === '250px') {
        sidebar.style.width = '0';
        mainContent.style.marginLeft = '0';
    } else {
        sidebar.style.width = '250px';
        mainContent.style.marginLeft = '250px';
    }
}
</script>
</body>
</html>
