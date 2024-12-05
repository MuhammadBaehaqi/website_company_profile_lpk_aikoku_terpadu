<?php
include 'config.php';

$id_admin = $_GET['id_admin'];
$sql = "delete from tb_admin1 where id_admin = '$id_admin'";

$delete = $mysqli->query($sql);
if($delete === TRUE){
    header('Location: data_pengguna.php');
}else{
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}