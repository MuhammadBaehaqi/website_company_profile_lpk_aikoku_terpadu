<?php
include 'config.php';
$id_admin = $_GET['id_admin'];
$dataadmin = $mysqli->query("SELECT * FROM tb_admin1 WHERE id_admin = '$id_admin'");
$hasil = $dataadmin->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="Icon" href="img/logo.png" type="image/x-Icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            font-size: 14px;
            color: #555;
        }
        input[type="text"], input[type="hidden"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background: #007BFF;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #0056b3;
        }
        .error {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Admin</h1>
        <form action="edit.php" method="POST">
            <input type="hidden" name="id1" value="<?php echo $hasil['id_admin']; ?>">
            <label for="username">Username:</label>
            <input type="text" id="username" name="nama1" value="<?php echo $hasil['username']; ?>" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="emailadmin1" value="<?php echo $hasil['email_admin']; ?>" required>

            
            <input type="submit" value="Update">
        </form>
    </div>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_admin = $_POST['id1'];
    $user = $_POST['nama1'];
    $emailadmin = $_POST['emailadmin1'];
    $pw = md5($_POST['password1']); // Hash password sebelum disimpan
    $updt = $mysqli->query("UPDATE tb_admin1 SET username='$user', email_admin='$emailadmin', password='$pw' WHERE id_admin='$id_admin'");
    if ($updt === TRUE) {
        header('Location: data_pengguna.php');
    } else {
        echo "<div class='error'>Error: " . $mysqli->error . "</div>";
    }
}
?>
