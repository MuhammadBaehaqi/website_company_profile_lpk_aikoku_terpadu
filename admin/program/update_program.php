<style>
    /* Reset some default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 300px;
    display: flex;
    flex-direction: column;
    gap: 15px;
}

input, textarea, button {
    padding: 10px;
    font-size: 16px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

input[type="text"], textarea {
    width: 100%;
}

textarea {
    resize: vertical;
}

button {
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

    .cancel-button {
        display: inline-block;
        text-align: center;
        background-color: #f44336;
        color: white;
        padding: 10px 15px;
        border-radius: 4px;
        text-decoration: none;
        margin-top: 10px;
       width: auto; /* Adjust width to content */
        text-align: center;
    }

    .cancel-button:hover {
        background-color: #d32f2f;
    }
    .form-container {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.form-container .form-buttons {
    display: flex;
    justify-content: space-between;
    gap: 10px;
}

button[type="submit"], .cancel-button {
    display: inline-block;
        text-align: center;
        color: white;
        padding: 10px 15px;
        border-radius: 4px;
        text-decoration: none;
        margin-top: 10px;
       width: auto; /* Adjust width to content */
        text-align: center;
}
</style>

<?php
include '../../config.php';

// Check if the 'id_program' is passed via the URL
if (!isset($_GET['id_program']) || empty($_GET['id_program'])) {
    die("Program ID is missing or invalid.");
}

// Fetch the program data based on ID
$id_program = $_GET['id_program'];
$result = $mysqli->query("SELECT * FROM program WHERE id_program = $id_program");

if ($result->num_rows === 0) {
    die("Program not found.");
}

// Check if the form is submitted to update the program
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id_program'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $link = $_POST['link'];
    $icon = $_POST['icon'];

    // Update program details
    if ($mysqli->query("UPDATE program SET title='$title', description='$description', link='$link', icon='$icon' WHERE id_program=$id")) {
        header("Location: program_admin.php");  // Redirect to the admin page after update
        exit();
    } else {
        die("Error updating program: " . $mysqli->error);
    }
}

// Fetch the existing data for the program
$program = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Program</title>
</head>

<body>
    <div class="form-container">
        <h1>Update Program</h1>

        <form method="POST">
            <input type="hidden" name="id_program" value="<?= $program['id_program'] ?>">
            <input type="text" name="title" value="<?= htmlspecialchars($program['title']) ?>" placeholder="Title" required>
            <textarea name="description" placeholder="Description" required><?= htmlspecialchars($program['description']) ?></textarea>
            <input type="text" name="link" value="<?= htmlspecialchars($program['link']) ?>" placeholder="Link" required>
            <input type="text" name="icon" value="<?= htmlspecialchars($program['icon']) ?>" placeholder="Icon" required>
              <div class="form-buttons">
        <button type="submit">Update Program</button>
        <a href="program_admin.php" class="cancel-button">Cancel</a>
    </div>
        </form>
          
    </div>
</body>


</html>
