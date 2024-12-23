<?php
include '../../config.php';

$id_contact = $_GET['id_contact'];
$sql = "delete from tb_contact where id_contact = '$id_contact'";

$delete = $mysqli->query($sql);
if($delete === TRUE){
    header('Location: data_contact.php');
}else{
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}