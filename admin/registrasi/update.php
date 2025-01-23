<?php
include '../../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
    $j = $_POST['alamat2'];
    $k = $_POST['alamatkeluarga2'];
    $l = $_POST['teleponkeluarga2'];
    $m = $_POST['bidang2'];
    $n = $_POST['pendidikanterakhir2'];
    $o = $_POST['pengalamankerja2'];
    $p = $_POST['statuspernikahan2'];
    $q = $_POST['tinggibadan2'];
    $r = $_POST['beratbadan2'];
    $s = $_POST['pengalamanjepang2'];
    $u = $_POST['penyakitkronis2'];
    $v = $_POST['golongandarah2'];

    $updt = $mysqli->query("UPDATE tb_pelajar SET 
        Nama_lengkap='$a', TTL='$b', tanggal_lahir='$c', usia='$d', Jenis_Kelamin='$e', 
        Agama='$f', alamat_ktp='$g', alamat_email='$h', no_telepon='$i', alamat='$j', alamat_keluarga='$k', 
        telepon_keluarga='$l', bidang='$m', pendidikan_terakhir='$n', pengalaman_kerja='$o', 
        status_pernikahan='$p', tinggi_badan='$q', berat_badan='$r', pengalaman_jepang='$s', 
        penyakit_kronis='$u', golongan_darah='$v'
        WHERE id_regis='$id_regis'");

    if ($updt === TRUE) {
        header('Location: data_regis.php');
        exit(); // Pastikan untuk keluar setelah header untuk menghentikan eksekusi lebih lanjut
    } else {
        echo "Error: " . $mysqli->error;
    }
} else {
    $id_regis = $_GET['id_regis'];
    $dataregis = $mysqli->query("SELECT * FROM tb_pelajar WHERE id_regis = '$id_regis'");
    $hasil = $dataregis->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        
        .container {
            width: 80%;
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 8px;
            display: inline-block;
            color: #555;
        }

        input[type="text"],
        input[type="date"],
        input[type="email"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            font-weight: bold;
            border: none;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input {
            width: 100%;
        }

        .form-group label {
            display: block;
        }

        .form-group input:focus {
            border-color: #4CAF50;
            outline: none;
        }

        .form-footer {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Update Registration</h1>
    <form action="update.php" method="POST">
        <input type="hidden" name="id2" value="<?php echo $hasil['id_regis'] ?>">

        <div class="form-group">
            <label for="nama2">Nama Lengkap:</label>
            <input type="text" name="nama2" id="nama2" value='<?php echo $hasil['Nama_lengkap']?>'>
        </div>

        <div class="form-group">
            <label for="ttl2">TTL:</label>
            <input type="text" name="ttl2" id="ttl2" value='<?php echo $hasil['TTL']?>'>
        </div>

        <div class="form-group">
            <label for="tgl2">Tanggal Lahir:</label>
            <input type="date" name="tgl2" id="tgl2" value='<?php echo $hasil['tanggal_lahir']?>'>
        </div>

        <div class="form-group">
            <label for="usia2">Usia:</label>
            <input type="text" name="usia2" id="usia2" value='<?php echo $hasil['usia']?>'>
        </div>

        <div class="form-group">
            <label for="jk2">Jenis Kelamin:</label>
            <input type="text" name="jk2" id="jk2" value='<?php echo $hasil['Jenis_Kelamin']?>'>
        </div>
        
        <div class="form-group">
            <label for="agama2">Agama:</label>
            <input type="text" name="agama2" id="agama2" value='<?php echo $hasil['Agama']?>'>
        </div>

        <div class="form-group">
            <label for="alamatktp2">Alamat KTP:</label>
            <input type="text" name="alamatktp2" id="alamatktp2" value='<?php echo $hasil['alamat_ktp']?>'>
        </div>

        <div class="form-group">
            <label for="alamatemail2">Alamat Email:</label>
            <input type="email" name="alamatemail2" id="alamatemail2" value='<?php echo $hasil['alamat_email']?>'>
        </div>

        <div class="form-group">
            <label for="telpon/whatsapp2">No.Telepon/WhatsApp:</label>
            <input type="text" name="telpon/whatsapp2" id="telpon/whatsapp2" value='<?php echo $hasil['no_telepon']?>'>
        </div>

        <div class="form-group">
            <label for="alamat2">Alamat:</label>
            <input type="text" name="alamat2" id="alamat2" value='<?php echo $hasil['alamat']?>'>
        </div>

        <div class="form-group">
            <label for="alamatkeluarga2">Alamat Keluarga:</label>
            <input type="text" name="alamatkeluarga2" id="alamatkeluarga2" value='<?php echo $hasil['alamat_keluarga']?>'>
        </div>

        <div class="form-group">
            <label for="teleponkeluarga2">Telepon Keluarga:</label>
            <input type="text" name="teleponkeluarga2" id="teleponkeluarga2" value='<?php echo $hasil['telepon_keluarga']?>'>
        </div>

        <div class="form-group">
            <label for="bidang2">Bidang:</label>
            <input type="text" name="bidang2" id="bidang2" value='<?php echo $hasil['bidang']?>'>
        </div>

        <div class="form-group">
            <label for="pendidikanterakhir2">Pendidikan Terakhir:</label>
            <input type="text" name="pendidikanterakhir2" id="pendidikanterakhir2" value='<?php echo $hasil['pendidikan_terakhir']?>'>
        </div>

        <div class="form-group">
            <label for="pengalamankerja2">Pengalaman Kerja:</label>
            <input type="text" name="pengalamankerja2" id="pengalamankerja2" value='<?php echo $hasil['pengalaman_kerja']?>'>
        </div>

        <div class="form-group">
            <label for="statuspernikahan2">Status Pernikahan:</label>
            <input type="text" name="statuspernikahan2" id="statuspernikahan2" value='<?php echo $hasil['status_pernikahan']?>'>
        </div>

        <div class="form-group">
            <label for="tinggibadan2">Tinggi Badan:</label>
            <input type="text" name="tinggibadan2" id="tinggibadan2" value='<?php echo $hasil['tinggi_badan']?>'>
        </div>

        <div class="form-group">
            <label for="beratbadan2">Berat Badan:</label>
            <input type="text" name="beratbadan2" id="beratbadan2" value='<?php echo $hasil['berat_badan']?>'>
        </div>

        <div class="form-group">
            <label for="pengalamanjepang2">Pengalaman Kerja:</label>
            <input type="text" name="pengalamanjepang2" id="pengalamanjepang2" value='<?php echo $hasil['pengalaman_jepang']?>'>
        </div>

        <div class="form-group">
            <label for="penyakitkronis2">Penyakit Kronis:</label>
            <input type="text" name="penyakitkronis2" id="penyakitkronis2" value='<?php echo $hasil['penyakit_kronis']?>'>
        </div>

        <div class="form-group">
            <label for="golongandarah2">Golongan Darah:</label>
            <input type="text" name="golongandarah2" id="golongandarah2" value='<?php echo $hasil['golongan_darah']?>'>
        </div>

        <div class="form-footer">
            <input type="submit" value="Update">
        </div>
    </form>
</div>

</body>
</html>

