<?php
include 'config.php';
$id_regis = $_GET['id_regis'];
$dataregis = $mysqli->query("select * from tb_pelajar where id_regis = '$id_regis'");
$hasil = $dataregis->fetch_assoc();
?>
<form action="update.php" method="POST">
<input type="hidden" name="id2" value="<?php echo $hasil['id_regis'] ?>">
Nama Lengkap: <input type="text" name="nama2" value='<?php echo $hasil['Nama_lengkap']?>' ><br>
TTL: <input type="text" name="ttl2" value='<?php echo $hasil['TTL']?>' ><br>
Tanggal Lahir: <input type="date" name="tgl2" value='<?php echo $hasil['tanggal_lahir']?>' ><br>
Usia: <input type="text" name="usia2" value='<?php echo $hasil['usia']?>'><br>
Jenis Kelamin: <input type="text" name="jk2" value='<?php echo $hasil['Jenis_Kelamin']?>'><br>
Agama: <input type="text" name="agama2" value='<?php echo $hasil['Agama']?>'><br>
Alamat KTP: <input type="text" name="alamatktp2" value='<?php echo $hasil['alamat_ktp']?>'><br>
Alamat Email: <input type="email" name="alamatemail2" value='<?php echo $hasil['alamat_email']?>'><br>
No.Telepon/WhatsApp: <input type="text" name="telpon/whatsapp2" value='<?php echo $hasil['no_telepon']?>'><br>
<input type="submit">
</form>
<?php

if(!empty($_POST)){
    $id_regis = $_POST['id2'];
    $a = $_POST['nama2'];
    $b = $_POST['ttl2'];
    $c = $_POST['tgl2'];
    $d = $_POST['usia2'];
    $e = $_POST['jk2'];
    $f = $_POST['agama2'];
    $g = $_POST['alamatktp2']; 
    $h = $_POST['alamatemail2'];
    $i = $_POST['telpon/whatsapp2'];
    $updt = $mysqli->query("update tb_pelajar set Nama_lengkap='$a', TTL='$b', tanggal_lahir='$c',  usia='$d', Jenis_Kelamin='$e', Agama='$f', alamat_ktp='$g', alamat_email='$h', no_telepon='$i' where id_regis='$id_regis'");
    if($updt === TRUE){
        header('Location: data_regis.php');
    }else{
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}
?>