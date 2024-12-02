<?php
include 'sidebar.php';
?>
<style>
    /* Main Content */
.main-content {
    padding: 20px;
    background-color: #fff;
    color: #333;
    font-family: Arial, sans-serif;
}

/* Dashboard Header */
.dashboard-header {
    margin-bottom: 20px;
    text-align: center;
}
.dashboard-title {
    font-size: 2rem;
    color: #2c3e50;
    margin: 0;
}
.dashboard-header p {
    font-size: 1.2rem;
    color: #7f8c8d;
    margin: 10px 0 0;
}

/* Stats Container */
.stats-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 20px;
    margin-bottom: 20px;
}
.stat-card {
    background-color: #3498db;
    color: #fff;
    padding: 20px;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.stat-card h3 {
    margin: 0 0 10px;
    font-size: 1.2rem;
    font-weight: bold;
}
.stat-card .number {
    font-size: 2rem;
    font-weight: bold;
}
.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

/* Recent Activity */
.recent-activity {
    background-color: #ecf0f1;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
.recent-activity h2 {
    margin: 0 0 15px;
    font-size: 1.5rem;
    color: #2c3e50;
}
.activity-list {
    list-style: none;
    padding: 0;
    margin: 0;
}
.activity-item {
    padding: 10px;
    background-color: #fff;
    margin-bottom: 10px;
    border-radius: 4px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    font-size: 1rem;
    color: #34495e;
    transition: background-color 0.2s ease, box-shadow 0.2s ease;
}
.activity-item:hover {
    background-color: #dcdde1;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
}

</style>
<div class="main-content">
        <div class="container">
            <div class="controls">
                <button class="btn-add">Tambah Data Pengguna</button>
                <div class="show-search">
                    <label for="show">Show: </label>
                    <select id="show">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                    </select>
                    <input type="text" id="search" placeholder="Cari pengguna...">
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Imam Joharudin</td>
                        <td>imamjoharudin12@gmail.com</td>
                        <td>123</td>
                        <td>admin</td>
                        <td>
                            <button class="btn-edit">Edit</button>
                            <button class="btn-delete">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Ali Chamdan</td>
                        <td>alichamdan@gmail.com</td>
                        <td>123</td>
                        <td>admin</td>
                        <td>
                            <button class="btn-edit">Edit</button>
                            <button class="btn-delete">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Okta Hidayat</td>
                        <td>oktahidayat@gmail.com</td>
                        <td>123</td>
                        <td>admin</td>
                        <td>
                            <button class="btn-edit">Edit</button>
                            <button class="btn-delete">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Muhammad Baehaki</td>
                        <td>muhammadbaehaqi12@gmail.com</td>
                        <td>123</td>
                        <td>admin</td>
                        <td>
                            <button class="btn-edit">Edit</button>
                            <button class="btn-delete">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
