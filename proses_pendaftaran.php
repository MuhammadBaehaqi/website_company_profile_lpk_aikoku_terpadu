<?php
// ini proses pendaftaran yang berkaitan ke database myphpadmin
include_once("config.php");


$koneksi = mysqli_connect("localhost", "root", "", "db_lpkaikoku");
if (isset($_POST['kirimdata'])) {
    
    $Nama = $_POST['kirim_nama'];
    $TTL = $_POST['kirim_ttl'];
    $tanggal_lahir = $_POST['kirim_tanggal_lahir'];
    $usia = $_POST ['kirim_usia'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $hobi = $_POST ['kirim_hobi'];
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
    $buta_warna = $_POST ['buta_warna'];
    $kesehatan = $_POST ['kirim_kesehatan'];
    $penyakit_kronis = $_POST ['kirim_penyakit_kronis'];
    $golongan_darah = $_POST ['kirim_golongan_darah'];
    $kewarganegaraan =$_POST ['kirim_kewarganegaraan'];
// Menyimpan data ke database
$query = "INSERT INTO tb_pelajar (Nama_lengkap, TTL, tanggal_lahir, usia, Jenis_Kelamin, hobi, Agama, alamat_ktp, alamat_email, no_telepon,  alamat, alamat_keluarga, telepon_keluarga, bidang, pendidikan_terakhir, pengalaman_kerja, status_pernikahan, tinggi_badan, berat_badan, buta_warna, kesehatan, penyakit_kronis, golongan_darah, kewarganegaraan) 
VALUES ('$Nama', '$TTL', '$tanggal_lahir', '$usia', '$jenis_kelamin', '$hobi', '$Agama', '$alamat_ktp', '$alamat_email', '$no_telepon',  '$alamat', '$alamat_keluarga', '$telepon_keluarga', '$bidang', '$pendidikan_terakhir', '$pengalaman_kerja', '$status_pernikahan', '$tinggi_badan', '$berat_badan', '$buta_warna', '$kesehatan', '$penyakit_kronis', '$golongan_darah', '$kewarganegaraan')";
    if (mysqli_query($koneksi, $query)) {
        // Redirect ke halaman home setelah berhasil
        header("Location: index.html");
        exit;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

?>