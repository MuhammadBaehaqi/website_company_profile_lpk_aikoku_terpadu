<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Jadwal</title>

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
    <h2>Manajemen Jadwal</h2>
    <form>
        <label for="kegiatan">Kegiatan: </label>
        <input type="text" id="kegiatan" placeholder="Masukkan Nama Kegiatan" required>
        <label for="tanggal">Tanggal: </label>
        <input type="date" id="tanggal" required>
        <button type="submit">Tambah</button>
    </form>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Kegiatan</th>
            <th>Tanggal</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Jadwal Tes Bahasa</td>
            <td>2024-06-10</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Simulasi Kerja</td>
            <td>2024-06-15</td>
        </tr>
    </table>
</body>
</html>
