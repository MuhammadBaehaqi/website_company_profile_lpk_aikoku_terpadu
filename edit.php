<?php
include 'config.php';
$id_admin = $_GET['id_admin'];
$dataadmin = $mysqli->query("select * from tb_admin1 where id_admin = '$id_admin'");
$hasil = $dataadmin->fetch_assoc();
?>
<form action="edit.php" method="POST">
    <input type="hidden" name="id1" value="<?php echo $hasil['id_admin'] ?>">
    Username: <input type="text" name="nama1" value='<?php echo $hasil['username']?>' ><br>
    Password: <input type="text" name="password1" value='<?php echo $hasil['password']?>' ><br>
    <input type="submit">
</form>

<?php
if(!empty($_POST)){
    $id_admin = $_POST['id1'];
    $user = $_POST['nama1'];
    $pw = md5($_POST['password1']); // Hash password sebelum disimpan
    $updt = $mysqli->query("update tb_admin1 set username='$user', password='$pw' where id_admin='$id_admin'");
    if($updt === TRUE){
        header('Location: data_pengguna.php');
    }else{
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}
?>