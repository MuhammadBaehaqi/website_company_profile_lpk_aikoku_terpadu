<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: #fff;
            padding: 100px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .form-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
            color: #333;
        }

        .form-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        .form-container input[type="text"],
        .form-container input[type="hidden"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-container input[type="submit"],
        .form-container input[type="button"] {
            width: 48%;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
        }

        .form-container input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
        }

        .form-container input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .form-container input[type="button"] {
            background-color: #ccc;
            color: #333;
            border: none;
            border-radius: 5px;
        }

        .form-container input[type="button"]:hover {
            background-color: #888;
        }

        .form-container .error {
            color: red;
            font-size: 14px;
            margin-top: -10px;
            margin-bottom: 10px;
        }

        .form-container .button-container {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Edit Contact</h2>
    <?php
    include '../../config.php';
    $id_contact = $_GET['id_contact'];
    $datacontact = $mysqli->query("SELECT * FROM tb_contact WHERE id_contact = '$id_contact'");
    $hasil = $datacontact->fetch_assoc();
    ?>

    <form action="" method="POST">
        <input type="hidden" name="idcontact2" value="<?php echo $hasil['id_contact']; ?>">

        <label for="namacontact">Nama Lengkap:</label>
        <input type="text" id="namacontact" name="namacontact" value="<?php echo $hasil['nama_contact']; ?>" required>

        <label for="nocontact">No Contact:</label>
        <input type="text" id="nocontact" name="nocontact" value="<?php echo $hasil['no_contact']; ?>" required>

        <label for="emailcontact">Email Contact:</label>
        <input type="text" id="emailcontact" name="emailcontact" value="<?php echo $hasil['email_contact']; ?>" required>

        <label for="alamatcontact">Alamat Contact:</label>
        <input type="text" id="alamatcontact" name="alamatcontact" value="<?php echo $hasil['alamat_contact']; ?>" required>

        <label for="pesancontact">Pesan Contact:</label>
        <input type="text" id="pesancontact" name="pesancontact" value="<?php echo $hasil['pesan_contact']; ?>" required>

        <div class="button-container">
            <input type="submit" value="Update Contact">
            <input type="button" value="Cancel" onclick="window.location.href='data_contact.php';">
        </div>
    </form>

    <?php
    if (!empty($_POST)) {
        $id_contact = $_POST['idcontact2'];
        $nmcontact = $_POST['namacontact'];
        $nomercontact = $_POST['nocontact'];
        $emlcontact = $_POST['emailcontact'];
        $almtcontact = $_POST['alamatcontact'];
        $psncontact = $_POST['pesancontact'];

        $updt = $mysqli->query("UPDATE tb_contact SET nama_contact='$nmcontact', no_contact='$nomercontact', email_contact='$emlcontact', alamat_contact='$almtcontact', pesan_contact='$psncontact' WHERE id_contact='$id_contact'");

        if ($updt === TRUE) {
            echo "<script>window.location.href='data_contact.php';</script>";
        } else {
            echo "<p class='error'>Error: " . $mysqli->error . "</p>";
        }
    }
    ?>
</div>

</body>
</html>
