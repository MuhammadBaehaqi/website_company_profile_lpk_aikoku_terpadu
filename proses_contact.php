<?php
// ini proses pendaftaran yang berkaitan ke database myphpadmin
include_once("config.php");


$koneksi = mysqli_connect("localhost", "root", "", "db_lpkaikoku");
if (isset($_POST['kirim_data'])) {
    $nama = $_POST['kirim_name'];
    $wa = $_POST['kirim_wa'];
    $email2 = $_POST['kirim_email'];
    $alamat2 = $_POST['kirim_alamat'];
    $pesan = $_POST['kirim_pesan'];
    // Menyimpan data ke database
$query = "INSERT INTO tb_contact (nama_contact, no_contact, email_contact, alamat_contact, pesan_contact ) 
VALUES ('$nama', '$wa', '$email2', '$alamat2', '$pesan' )";
    if (mysqli_query($koneksi, $query)) {
        // Redirect ke halaman home setelah berhasil
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

?>