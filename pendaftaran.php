<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
		$get_jurusan = file_get_contents('http://localhost/ypkpback/api/get-jurusan');
      $result_get_jurusan = json_decode($get_jurusan, true);

		$cek_gelombang = file_get_contents('http://localhost/ypkpback/api/cek-gelombang');
      $result_cek_gelombang = json_decode($cek_gelombang, true);
      $count_gelombang = count($result_cek_gelombang['data']);
   
	?>

	<?php if ($count_gelombang > 0) { ?>
		<form>
			<?php foreach($result_cek_gelombang['data'] as $valueGelombang){ ?>
			<input type="text" name="id_gelombang" value="<?php echo $valueGelombang['id_gelombang']; ?>"><br>
			<?php } ?>
			<input type="text" name="nama_lengkap" placeholder="nama lengkap"><br>
			<input type="text" name="tempatLahir" placeholder="tempat lahir"><br>
			<input type="date" name="tanggalLahir" placeholder="tanggal lahir"><br>
			<textarea name="alamat" placeholder="alamat"></textarea><br>
			<input type="text" name="kota" placeholder="kota"><br>
			<input type="text" name="kecamatan" placeholder="kecamatan"><br>
			<input type="text" name="kelurahan" placeholder="kelurahan"><br>
			<input type="text" name="pos" placeholder="pos"><br>
			<input type="email" name="email" placeholder="E-mail"><br>
			<input type="text" name="telepon" placeholder="Telepon"><br>
			<input type="text" name="whatsapp" placeholder="Whatsapp"><br>
			<select name="jurusan">
				<option value="">Pilih jurusan</option>
				<?php foreach ($result_get_jurusan['data'] as $key => $valueJurusan) { ?>
				<option value="<?php echo $valueJurusan['nama_jurusan']; ?>"><?php echo $valueJurusan['nama_jurusan']; ?></option>
				<?php } ?>
			</select><br>
			Ijazah <input type="file" name="ijazah" placeholder="ijazah" accept=".pdf"><br>
			Transkkrip <input type="file" name="transkrip" placeholder="ijazah" accept=".pdf"><br>
			Toefl <input type="file" name="toefl" placeholder="ijazah" accept=".pdf"><br>
			Bukti pemabayaran <input type="file" name="buktiPembayaran" placeholder="ijazah" accept=".pdf,.jpeg,.jpg"><br>
			Pas Foto <input type="file" name="pasFoto" placeholder="ijazah" accept=".jpg,.jpeg,.png"><br>
			KTP <input type="file" name="ktp" placeholder="ijazah" accept=".jpg,.png"><br>
		</form>
	<?php }elseif ($count_gelombang < 1) { ?>
		<h3>Tidak ada penaftaran</h3>
	<?php } ?>
</body>
</html>