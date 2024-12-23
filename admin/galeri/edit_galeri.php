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
    <link rel="Icon" href="img/logo.png" type="image/x-Icon">
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
    <h1>Form Edit Foto</h1>

    <form action="edit_galeri.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_galeri" value="<?php echo $id; ?>">

        <label for="foto">Upload Foto (Optional):</label>
        <input type="file" id="foto" name="foto_galeri" accept="image/*">

        <!-- Display the existing image -->
        <div>
            <img src="<?php echo $existingPhoto; ?>" alt="Existing Photo" width="200">
        </div>

        <label for="keterangan">Keterangan:</label>
        <textarea id="keterangan" name="keterangan" rows="4" cols="50"><?php echo $existingKeterangan; ?></textarea>

        <button type="submit" name="update">Update</button>
    </form>

<?php
$errorMessage = ''; // Variable untuk menyimpan pesan kesalahan
// Handle the form submission for updating the photo
if (isset($_POST['update'])) {
    $id = $_POST['id_galeri'];
    $keterangan = $_POST['keterangan'];

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
                $filePath = $targetFile;
            } else {
                $errorMessage = "Sorry, there was an error uploading your file.";
            }
        }
    }

    // If no error, update the database
    if (empty($errorMessage)) {
        $sql = "UPDATE tb_galeri SET foto_galeri = ?, keterangan = ? WHERE id_galeri = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ssi", $filePath, $keterangan, $id);

        if ($stmt->execute()) {
            // Redirect to galeri.php after success
            header("Location: galeri_admin.php");
            exit;
        } else {
            $errorMessage = "Error: Could not update photo information. " . $mysqli->error;
        }
    }
}
?>


</body>
</html>
