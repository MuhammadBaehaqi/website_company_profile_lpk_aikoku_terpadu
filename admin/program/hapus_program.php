<?php
include '../../config.php';

// Check if the ID is set for deletion
if (isset($_GET['id_program'])) {
    $id_program = $_GET['id_program'];
    
    // Delete program from the database
    $mysqli->query("DELETE FROM program WHERE id_program = $id_program");
    header("Location: program_admin.php");  // Redirect to the admin page after deletion
    exit();
}
?>
