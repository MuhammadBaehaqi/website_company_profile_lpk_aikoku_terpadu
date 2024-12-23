<?php
include '../../config.php';

$id_galeri = $_GET['id_galeri'];
$sql = "delete from tb_galeri where id_galeri = '$id_galeri'";

$delete = $mysqli->query($sql);
if($delete === TRUE){
    header('Location: galeri_admin.php');
}else{
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}