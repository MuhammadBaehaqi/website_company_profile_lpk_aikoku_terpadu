
<?php
include '../../cek_auth.php';
include '../sidebar.php';
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
        label {
        font-weight: bold;
        margin-bottom: 8px;
        display: block;
        color: #555;
        font-size: 0.9rem;
    }
    input[type="file"],
    textarea,
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 0.9rem;
        color: #333;
        box-sizing: border-box;
    }
    textarea {
        resize: none;
    }
    @media (max-width: 768px) {
        form {
            padding: 15px;
        }
        h1 {
            font-size: 1.5rem;
        }
        button {
            font-size: 0.9rem;
        }
    }

    #notification {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 9999;
            background-color: #28a745; /* Warna hijau */
            color: white;
            padding: 15px 20px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            font-size: 16px;
            text-align: center;
            display: none; /* Default disembunyikan */
        }
        #notification.error {
            background-color: #dc3545; /* Warna merah */
        }
    </style>
</head>
<body>
<!-- Notification Area -->
    <div id="notification" class="<?= strpos($message, 'Success') !== false ? '' : 'error'; ?>">
        <?= htmlspecialchars($message); ?>
    </div>
    <h1>Form Upload Foto</h1>
    <!-- proses form di galeri_admin.php -->
     

    <form action="tambah_galleri.php" method="POST" enctype="multipart/form-data">
        <label for="foto">Upload Foto:</label>
        <input type="file" id="foto" name="foto_galeri" accept="image/*" required>

        <label for="keterangan">Keterangan:</label>
        <textarea id="keterangan" name="keterangan" rows="4" cols="50" placeholder="Tambahkan keterangan..." ></textarea>
<select id="foto" name="kirim_foto">
        <option value="Album">Album</option>
        <option value="Keberangkatan">Keberangkatan</option>
        <option value="Kelulusan">Kelulusan</option>
        <option value="Fasilitas">Fasilitas</option>
        <option value="Pendidikan">Pendidikan</option>
      </select>
        <button type="submit">Upload</button>
    </form>
   
<?php
$message = ''; // Variabel untuk menyimpan pesan notifikasi
// Include file config.php
require '../../config.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $targetDir = "../../uploads/";
    $fileName = basename($_FILES["foto_galeri"]["name"]);
    $targetFile = $targetDir . $fileName;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Allowed file types
    $allowedFileTypes = ["jpg", "jpeg", "png", "gif"];

    // Check if image file is an actual image or fake image
    $check = getimagesize($_FILES["foto_galeri"]["tmp_name"]);
    if ($check === false) {
        $message = "Error: File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        $message = "Error: File already exists.";
        $uploadOk = 0;
    }

    // Check file size (limit to 2MB)
    if ($_FILES["foto_galeri"]["size"] > 2 * 1024 * 1024) {
        $message = "Error: File size exceeds 2MB.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (!in_array($imageFileType, $allowedFileTypes)) {
        $message = "Error: Only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $message = "Error: Your file was not uploaded.";
    } else {
        // Try to upload file
        if (move_uploaded_file($_FILES["foto_galeri"]["tmp_name"], $targetFile)) {
    $keterangan = $_POST['keterangan'];
    $uploadDate = date("Y-m-d H:i:s");
    $detail = $_POST['kirim_foto'];

    // Menggunakan $fileName saja untuk database
    $sql = "INSERT INTO tb_galeri (foto_galeri, upload_date, keterangan, detail) VALUES (?, ?, ?, ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ssss", $fileName, $uploadDate, $keterangan, $detail);

            if ($stmt->execute()) {
                $message = "Success: The file " . htmlspecialchars($fileName) . " has been uploaded and saved to the database.";
            } else {
                $message = "Error: Could not save file information to the database. " . $mysqli->error;
            }
        } else {
            $message = "Error: There was an error uploading your file.";
        }
    }
    if (!empty($message)) {
        echo "<div style='position:fixed;top:20px;left:50%;transform:translateX(-50%);background:#28a745;color:white;padding:10px 20px;border-radius:5px;'>"
            . htmlspecialchars($message) .
            "</div>";
    }
}
?>
</body>
</html>
