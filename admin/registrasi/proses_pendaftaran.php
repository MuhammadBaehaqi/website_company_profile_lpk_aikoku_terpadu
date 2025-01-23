<?php
// ini database myphpadmin
include_once("../../config.php");


$koneksi = mysqli_connect("localhost", "root", "", "db_lpkaikoku");
if (isset($_POST['kirimdata'])) {
    
    $Nama = $_POST['kirim_nama'];
    $TTL = $_POST['kirim_ttl'];
    $tanggal_lahir = $_POST['kirim_tanggal_lahir'];
    $usia = $_POST ['kirim_usia'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $Agama = $_POST['kirim_agama'];
    $alamat_ktp = $_POST['kirim_alamat_ktp'];
    $alamat_email = $_POST ['alamat_email'];
    $no_telepon = $_POST ['telepon'];
    $alamat = $_POST ['kirim_alamat'];
    $alamat_keluarga = $_POST ['kirim_alamat_keluarga'];
    $telepon_keluarga = $_POST ['kirim_no_telepon_keluarga'];
    $bidang = $_POST ['kirim_bidang'];
    $pendidikan_terakhir = $_POST ['kirim_pendidikan_terakhir'];
    $pengalaman_kerja = $_POST ['kirim_pengalaman_kerja'];
    $status_pernikahan = $_POST ['kirim_status_pernikahan'];
    $tinggi_badan = $_POST ['kirim_tinggi_badan'];
    $berat_badan = $_POST ['kirim_berat_badan'];
    $pengalaman_jepang = $_POST ['kirim_pengalaman_jepang'];
    $penyakit_kronis = $_POST ['kirim_penyakit_kronis'];
    $golongan_darah = $_POST ['kirim_golongan_darah'];
    
// Menyimpan data ke database
$query = "INSERT INTO tb_pelajar (Nama_lengkap, TTL, tanggal_lahir, usia, Jenis_Kelamin, Agama, alamat_ktp, alamat_email, no_telepon,  alamat, alamat_keluarga, telepon_keluarga, bidang, pendidikan_terakhir, pengalaman_kerja, status_pernikahan, tinggi_badan, berat_badan, pengalaman_jepang, penyakit_kronis, golongan_darah) 
VALUES ('$Nama', '$TTL', '$tanggal_lahir', '$usia', '$jenis_kelamin', '$Agama', '$alamat_ktp', '$alamat_email', '$no_telepon',  '$alamat', '$alamat_keluarga', '$telepon_keluarga', '$bidang', '$pendidikan_terakhir', '$pengalaman_kerja', '$status_pernikahan', '$tinggi_badan', '$berat_badan', '$pengalaman_jepang', '$penyakit_kronis', '$golongan_darah')";
    if (mysqli_query($koneksi, $query)) {
        // Redirect ke halaman home dengan pemberitahuan sukses
 echo "<script>alert('Pendaftaran telah dikirim, mohon tunggu pesan dari admin.'); 
            window.location.href = 'http://localhost/BCK/index.php';
        </script>";
        exit;
     } else {
        // Jika gagal
        echo "<script>
        alert('Pendaftaran gagal. Silakan coba lagi.'); window.location.href='form_pendaftaran.php';
        </script>";
    }
}

?>