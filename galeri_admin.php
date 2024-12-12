
<?php
include 'cek_auth.php';
include 'sidebar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Upload Foto</title>
    <style>
        body {
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
             justify-content: center; /* Memastikan form berada di tengah */
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            max-width: 600px; /* Menambahkan lebar maksimum untuk form */
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            box-sizing: border-box; /* Agar padding dihitung dalam ukuran form */
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #555;
        }
        input[type="file"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
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
    </style>
</head>
<body>
    <h1>Form Upload Foto</h1>
    <!-- proses form di galeri_admin.php -->
     
    <form action="galeri_admin.php" method="POST" enctype="multipart/form-data">
        <label for="foto">Upload Foto:</label>
        <input type="file" id="foto" name="foto_galeri" accept="image/*" required>

        <label for="keterangan">Keterangan:</label>
        <textarea id="keterangan" name="keterangan" rows="4" cols="50" placeholder="Tambahkan keterangan..." ></textarea>

        <button type="submit">Upload</button>
    </form>
   
<?php
// Include file config.php
require 'config.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $targetDir = "uploads/";
    $fileName = basename($_FILES["foto_galeri"]["name"]);
    $targetFile = $targetDir . $fileName;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is an actual image or fake image
    $check = getimagesize($_FILES["foto_galeri"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["foto_galeri"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // Try to upload file
        if (move_uploaded_file($_FILES["foto_galeri"]["tmp_name"], $targetFile)) {
            // Prepare data for database insertion
            $filePath = $targetFile;
            $keterangan = $_POST['keterangan']; // Mengambil nilai dari form POST
            $uploadDate = date("Y-m-d H:i:s");

            // Insert into database
            $sql = "INSERT INTO tb_galeri (foto_galeri, upload_date, keterangan) VALUES (?, ?, ?)";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("sss", $filePath, $uploadDate, $keterangan );

            if ($stmt->execute()) {
                echo "The file " . htmlspecialchars($fileName) . " has been uploaded and saved to the database.";
            } else {
                echo "Error: Could not save file information to the database. " . $mysqli->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>


</body>
</html>
