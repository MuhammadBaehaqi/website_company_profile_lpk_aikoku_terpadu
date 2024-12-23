<style>/* Gaya Umum untuk Halaman */
body {
  font-family: Arial, sans-serif;
  background-color: #f9f9f9;
  margin: 0;
  padding: 0;
}

.container {
  max-width: 800px;
  margin: 20px auto;
  padding: 20px;
  background-color: #ffffff;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

h2 {
  text-align: center;
  color: #333333;
  margin-bottom: 20px;
}

/* Gaya untuk Formulir */
form {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.form-group {
  display: flex;
  flex-direction: column;
}

label {
  font-weight: bold;
  margin-bottom: 5px;
  color: #555555;
}

input, select, textarea {
  padding: 10px;
  border: 1px solid #cccccc;
  border-radius: 4px;
  font-size: 14px;
  color: #333333;
}

input:focus, select:focus, textarea:focus {
  outline: none;
  border-color: #007bff;
  box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

textarea {
  resize: vertical;
}

button {
  padding: 10px 15px;
  background-color: #007bff;
  border: none;
  border-radius: 4px;
  color: #ffffff;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #0056b3;
}

/* Responsif untuk Layar Kecil */
@media (max-width: 600px) {
  .container {
    padding: 15px;
  }

  input, select, textarea, button {
    font-size: 14px;
  }
}
</style>

<div class="container">
  <h2>Formulir Pendaftaran</h2>
	<form action="admin/proses_pendaftaran.php" method="post">
		<div class="form-group">
      		<label for="nama_lengkap">Nama Lengkap:</label>
      		<input type="text" id="nama_lengkap" name="kirim_nama" >
    	</div>

    	<div class="form-group">
      		<label for="tempat_lahir">Tempat Lahir:</label>
      		<input type="text" id="tempat_lahir" name="kirim_ttl" >
    	</div>

    	<div class="form-group">
      		<label for="tanggal_lahir">Tanggal Lahir:</label>
			<input type="date" id="tanggal_lahir" name="kirim_tanggal_lahir" >
    	</div>

        <div class="form-group">
      		<label for="usia">Usia:</label>
			<input type="text" id="usia" name="kirim_usia">
    	</div>

    	<div class="form-group">
			<label for="jenis_kelamin">Jenis Kelamin:</label>
			<select id="jenis_kelamin" name="jenis_kelamin">
				<option value="">Pilih Jenis Kelamin</option>
				<option value="Laki-laki">Laki-laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
    	</div>

		<div class="form-group">
			<label for="hobi">Hobi:</label>
			<input type="text" id="hobi" name="kirim_hobi">
		</div>

		<div class="form-group">
		<label for="agama">Agama:</label>
		<select id="agama" name="kirim_agama">
			<option value="">Pilih Agama</option>
			<option value="Islam">Islam</option>
			<option value="Kristen">Kristen</option>
			<option value="Katolik">Katolik</option>
			<option value="Hindu">Hindu</option>
			<option value="Buddha">Buddha</option>
			<option value="Konghucu">Konghucu</option>
		</select>
		</div>

		<div class="form-group">
			<label for="alamat_ktp">Alamat KTP</label>
			<input type="text" id="alamat_ktp" name="kirim_alamat_ktp">
		</div>
    
		<div class="form-group">
			<label for="email">Alamat Email:</label>
			<input type="email" id="email" name="alamat_email">
		</div>

    <div class="form-group">
      <label for="telepon">No.Telepon/WhatsApp:</label>
      <input type="text" id="telepon" name="telepon" >
    </div>

    <div class="form-group">
      <label for="alamat">Alamat:</label>
      <textarea id="text" name="kirim_alamat" ></textarea>
    </div>

    <div class="form-group">
      <label for="alamat_keluarga">Alamat Keluarga:</label>
			<input type="text" id="alamat_keluarga" name="kirim_alamat_keluarga">
    </div>
    
		<div class="form-group">
      <label for="telepon_keluarga">No.Telepon/WhatsApp Keluarga:</label>
			<input type="text" id="telepon_keluarga" name="kirim_no_telepon_keluarga" >
    </div>
			

	<div class="form-group">
		<label for="bidang">Program Yang Diminati:</label>
		<select id="bidang" name="kirim_bidang">
			<option value="">Pilih Program</option>
			<option value="MAGANG">Magang</option>
			<option value="TOKUTEI_GINOU">Tokutei Ginou</option>
			<option value="ENGINEERING">Engineering</option>
            </select>
	</div>

  <div class="form-group">
      <label for="pendidikan_terakhir">Pendidikan Terakhir:</label>
      <select id="pendidikan_terakhir" name="kirim_pendidikan_terakhir">
        <option value="">Pilih Pendidikan Terakhir</option>
        <option value="SD">SD</option>
        <option value="MI">MI</option>
        <option value="SMP">SMP</option>
        <option value="MTS">MTS</option>
        <option value="SMA">SMA</option>
        <option value="ALIYAH">ALIYAH</option>
        <option value="SMK">SMK</option>
        <option value="D3">D3</option>
        <option value="S1">S1</option>
        <option value="S2">S2</option>
        <option value="S3">S3</option>
      </select>
</div>
      
    <div class="form-group">
      <label for="pengalaman_kerja">Pengalaman Kerja:</label>
      <textarea id="pengalaman_kerja" name="kirim_pengalaman_kerja"></textarea>
    </div>
    
    <div class="form-group">
      <label for="status_pernikahan">Status Pernikahan:</label>
			<select id="status_pernikahan" name="kirim_status_pernikahan">
				<option value="">Pilih Status Pernikahan</option>
				<option value="Belum Menikah">Belum Menikah</option>
				<option value="Menikah">Menikah</option>
				<option value="Janda/Duda">Janda/Duda</option>
			</select>
	</div>

  <div class="form-group">
      <label for="tinggi_badan">Tinggi Badan:</label>
			<input type="text" id="tinggi_badan" name="kirim_tinggi_badan">
  </div>
  
    <div class="form-group">
      <label for="berat_badan">Berat Badan:</label>
			<input type="text" id="berat_badan" name="kirim_berat_badan">
    </div>

		<div class="form-group">
      <label for="buta_warna">Buta Warna:</label>
			<select id="buta_warna" name="buta_warna">
				<option value="">Pilih Opsi</option>
				<option value="Ya">Ya</option>
				<option value="Tidak">Tidak</option>
			</select>
    </div>
<div class="form-group">
<label for="kesehatan">Kesehatan:</label>
			<input type="text" id="kesehatan" name="kirim_kesehatan">
</div>
    
<div class="form-group">
  <label for="penyakit_kronis">Penyakit Kronis (jika ada):</label>
			<input type="text" id="penyakit_kronis" name="kirim_penyakit_kronis">
</div>

<div class="form-group">
  <label for="golongan_darah">Golongan Darah:</label>
			<input type="text" id="golongan_darah" name="kirim_golongan_darah">
</div>
<div class="form-group">
<label for="kewarganegaraan">Kewarganegaraan:</label>
			<input type="text" id="kewarganegaraan" name="kirim_kewarganegaraan">
</div>

    <button type="submit" name="kirimdata" class="btn btn-primary">Kirim Pendaftaran</button>
  </form>
</div>