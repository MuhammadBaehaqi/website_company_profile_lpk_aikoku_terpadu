<?php
include 'config.php';
$id_contact = $_GET['id_contact'];
$datacontact = $mysqli->query("select * from tb_contact where id_contact = '$id_contact'");
$hasil = $datacontact->fetch_assoc();
?>
<form action="update_contact.php" method="POST">
    <input type="hidden" name="idcontact2" value="<?php echo $hasil['id_contact'] ?>">
    Nama Lengkap: <input type="text" name="namacontact" value='<?php echo $hasil['nama_contact']?>' ><br>
    No Contact: <input type="text" name="nocontact" value='<?php echo $hasil['no_contact']?>' ><br>
    Email Contact: <input type="text" name="emailcontact" value='<?php echo $hasil['email_contact']?>' ><br>
    Alamat Contact: <input type="text" name="alamatcontact" value='<?php echo $hasil['alamat_contact']?>' ><br>
    Pesan Contact: <input type="text" name="pesancontact" value='<?php echo $hasil['pesan_contact']?>' ><br>
    <input type="submit">
</form>

<?php
if(!empty($_POST)){
    $id_contact = $_POST['idcontact2'];
    $nmcontact = $_POST['namacontact'];
    $nomercontact = $_POST['nocontact'];
    $emlcontact = $_POST['emailcontact'];
    $almtcontact = $_POST['alamatcontact'];
    $psncontact = $_POST['pesancontact'];
    $updt = $mysqli->query("update tb_contact set nama_contact='$nmcontact', no_contact='$nomercontact', email_contact='$emlcontact',  alamat_contact='$almtcontact', pesan_contact='$psncontact' where id_contact='$id_contact'");
    if($updt === TRUE){
        header('Location: data_contact.php');
    }else{
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}
?>
