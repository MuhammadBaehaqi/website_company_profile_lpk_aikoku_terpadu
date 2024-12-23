<?php
include '../../config.php';

$id_regis = $_GET['id_regis'];
$sql = "delete from tb_pelajar where id_regis = '$id_regis'";

$delete = $mysqli->query($sql);
if($delete === TRUE){
    header('Location: data_regis.php');
}else{
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}