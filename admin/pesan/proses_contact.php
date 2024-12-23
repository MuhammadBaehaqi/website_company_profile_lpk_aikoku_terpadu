
<?php
// ini database myphpadmin
include_once("../../config.php");


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
        // Jika berhasil, tampilkan alert menggunakan JavaScript dan redirect
        echo "<script>
                alert('Pesan Anda berhasil dikirim!');
                window.location.href = 'http://localhost/BCK/index.php';
              </script>";
        exit;
    } else {
        // Jika gagal, tampilkan alert error menggunakan JavaScript
        $error_message = mysqli_error($koneksi); // Ambil pesan error dari database
        echo "<script>
                alert('Pesan gagal dikirim. Error: $error_message');
                window.history.back(); // Kembali ke halaman sebelumnya
              </script>";
        exit;
    }
}
?>