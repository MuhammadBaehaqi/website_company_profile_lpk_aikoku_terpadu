<?php
include 'cek_auth.php';
include 'sidebar.php';
?>
<head>
  <title>Settings</title>
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
</head>
<div class="main-content">


</div>
     <!-- <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
    }

   .main-content {
            flex-grow: 1;
            padding: 20px;
        }
    h1 {
      text-align: center;
      margin-bottom: 30px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 30px;
    }

    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    .btn-container {
      text-align: right;
      margin-bottom: 20px;
    }

    .btn {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #45a049;
    }
  </style>

 <div class="main-content">
            <h1>Admin Settings</h1>
    <div class="btn-container">
      <button class="btn">Tambah Registrasi</button>
    </div>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Registration Date</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>john.doe@example.com</td>
          <td>2023-04-15</td>
          <td>
            <a href="#">Edit</a>
            <a href="#">Delete</a>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>jane.smith@example.com</td>
          <td>2023-05-01</td>
          <td>
            <a href="#">Edit</a>
            <a href="#">Delete</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div> -->
