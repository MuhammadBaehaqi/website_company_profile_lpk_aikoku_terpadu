<?php
// ..itu untuk mencari atau mengambil file diluar folder ini(admin)
include '../../cek_auth.php';
include '../sidebar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Pendaftaran</title>
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
    <h2>Laporan Pendaftaran</h2>
    <form>
        <label for="from">Dari: </label>
        <input type="date" id="from" required>
        <label for="to">Sampai: </label>
        <input type="date" id="to" required>
        <button type="submit">Filter</button>
    </form>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Status</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Ahmad</td>
            <td>2024-06-01</td>
            <td>Diterima</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Budi</td>
            <td>2024-06-02</td>
            <td>Pending</td>
        </tr>
    </table>
</body>
</html>
