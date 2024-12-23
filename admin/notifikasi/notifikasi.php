<?php
// ..itu untuk mencari atau mengambil file diluar folder ini(admin)
include '../../cek_auth.php';
include '../sidebar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notifikasi</title>
<style>body {
    font-family: Arial, sans-serif;
    margin: 20px;
    background-color: #f9f9f9;
}

h2 {
    color: #2c3e50;
}

form {
    margin-bottom: 20px;
}

input, textarea, button {
    margin: 5px 0;
    padding: 8px;
    width: 300px;
    display: block;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

table, th, td {
    border: 1px solid #ccc;
    text-align: center;
}

th {
    background-color: #2c3e50;
    color: white;
}

td {
    background-color: #ecf0f1;
}

button {
    background-color: #2980b9;
    color: white;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #3498db;
}
</style>
</head>
<body>
    <h2>Notifikasi</h2>
    <div>
        <h3 style="color: red;">Ada 5 Pendaftaran Baru</h3>
        <ul>
            <li>Pendaftaran dari Ahmad - 01/06/2024</li>
            <li>Pendaftaran dari Budi - 02/06/2024</li>
            <li>Pendaftaran dari Siti - 03/06/2024</li>
        </ul>
    </div>
</body>
</html>
