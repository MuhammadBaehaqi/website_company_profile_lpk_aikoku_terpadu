<?php
ob_start(); // Mengaktifkan output buffering
include '../../cek_auth.php';
include '../sidebar.php';
// Include file config.php
require '../../config.php';

// Fetch photo details by ID if provided
if (isset($_GET['id_galeri'])) {
    $id = $_GET['id_galeri'];

    // Query the database for the existing photo data
    $sql = "SELECT * FROM tb_galeri WHERE id_galeri = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $existingPhoto = $row['foto_galeri'];
        $existingKeterangan = $row['keterangan'];
    } else {
        echo "Photo not found.";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Foto</title>
    <link rel="icon" href="../../img/logo.png" type="image/x-icon">
    <style>
        body {
             margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
           align-items: center;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #555;
        }
        input[type="file"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
            font-family: Arial, sans-serif;
        }
        select {
            appearance: none;
            background-color: #fff;
            cursor: pointer;
            background-color: #fff;
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24"><path fill="%23000000" d="M7 10l5 5 5-5H7z"/></svg>');
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 12px;
        }
        option {
            padding: 10px;
            font-size: 14px;
        }
        textarea {
            resize: vertical;
        }
        /* button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .back-button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #007bff;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
        }
        .back-button:hover {
            background-color: #0056b3;
        } */
         .button-container {
        display: flex;
        justify-content: space-between;
        gap: 10px; /* Jarak antar tombol */
        margin-top: 20px;
    }

    .button-container button,
    .button-container a {
        flex: 1; /* Membuat tombol memiliki lebar yang sama */
        padding: 10px;
        text-align: center;
        font-size: 16px;
        border-radius: 4px;
        text-decoration: none;
        cursor: pointer;
    }

    .button-container button {
        background-color: #28a745;
        color: white;
        border: none;
    }

    .button-container button:hover {
        background-color: #218838;
    }

    .button-container a {
        background-color: #007bff;
        color: white;
    }

    .button-container a:hover {
        background-color: #0056b3;
    }

    </style>
</head>
<body>
    <h1>Form Edit Foto</h1>

    <form action="edit_galeri.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_galeri" value="<?php echo $id; ?>">

        <label for="foto">Upload Foto (Optional):</label>
        <input type="file" id="foto" name="foto_galeri" accept="image/*">

        <!-- Display the existing image -->
        <div>
            <img src="../../uploads/<?php echo $existingPhoto; ?>" alt="Existing Photo" width="200">
        </div>
<label for="detail">Pindah Galeri:</label>
<select id="detail" name="detail">
    <option value="Keberangkatan" <?php echo ($row['detail'] == 'Keberangkatan') ? 'selected' : ''; ?>>Keberangkatan</option>
    <option value="Kelulusan Job" <?php echo ($row['detail'] == 'Kelulusan Job') ? 'selected' : ''; ?>>Kelulusan Job</option>
    <option value="Pendidikan LPK" <?php echo ($row['detail'] == 'Pendidikan LPK') ? 'selected' : ''; ?>>Pendidikan LPK</option>
    <option value="Tanda Tangan Kontrak" <?php echo ($row['detail'] == 'Tanda Tangan Kontrak') ? 'selected' : ''; ?>>Tanda Tangan Kontrak</option>
</select>

        <label for="keterangan">Keterangan:</label>
        <textarea id="keterangan" name="keterangan" rows="4" cols="50"><?php echo $existingKeterangan; ?></textarea>

        <div class="button-container">
    <button type="submit" name="update">Update</button>
    <a href="galeri_admin.php" class="back-button">Kembali</a>
</div>

    </form>

<?php
$errorMessage = ''; // Variable untuk menyimpan pesan kesalahan
// Handle the form submission for updating the photo
if (isset($_POST['update'])) {
    $id = $_POST['id_galeri'];
    $keterangan = $_POST['keterangan'];
    $detail = $_POST['detail'];

    // Default file path if no new upload
    $filePath = isset($_POST['existingPhoto']) ? $_POST['existingPhoto'] : '';

    // Check if a new photo is uploaded
    if ($_FILES['foto_galeri']['name'] != '') {
        $targetDir = "../../uploads/";
        $fileName = basename($_FILES["foto_galeri"]["name"]);
        $targetFile = $targetDir . $fileName;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if image file is an actual image
        $check = getimagesize($_FILES["foto_galeri"]["tmp_name"]);
        if ($check === false) {
            $errorMessage = "File is not an image.";
            $uploadOk = 0;
        }

        // Check file size (increase limit here, e.g., 5MB)
        if ($_FILES["foto_galeri"]["size"] > 5000000) {
            $errorMessage = "Sorry, your file is too large. Maximum allowed size is 5MB.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (!in_array($imageFileType, ["jpg", "jpeg", "png", "gif"])) {
            $errorMessage = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Try to upload file
        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["foto_galeri"]["tmp_name"], $targetFile)) {
    echo "File successfully uploaded to: " . $targetFile; // Tambahkan untuk debugging
    $filePath = $fileName; // Hanya menyimpan nama file, bukan path lengkap
} else {
    echo "Error uploading file.";
}

        }
    }

    // If no error, update the database
    if (empty($errorMessage)) {
        // Update database
    $sql = "UPDATE tb_galeri SET foto_galeri = ?, keterangan = ?, detail = ? WHERE id_galeri = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sssi", $filePath, $keterangan, $detail, $id);

    if ($stmt->execute()) {
        header("Location: galeri_admin.php");
        exit;
    } else {
        echo "Error updating record: " . $mysqli->error;
    }
}
}
?>
</body>
</html>