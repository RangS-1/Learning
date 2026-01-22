	<html>
	  <head>
	    <title>PHP Test</title>
	  </head>
	  <body>
	<form method="post" action="tampil.php">
		<label>Nama Siswa</label><br/>
		<input type="text" name="nama"><br/>
		<label>Asal Sekolah</label><br/>
		<input type="text" name="asal"><br/>
		<label>Jenis Kelamin</label><br/>
		<select name="kelamin">
			<option>Pilih</option>
			<option value="L">Laki-Laki</option>
			<option value="P">Perempuan</option>
		</select><br/>
		<label>No.Telepon</label><br/>
		<input type="text" name="telepon"><br/>
		<input type="submit" value="daftar"><br/>
	</form>
	
	  </body>
	</html>
	<?php 
    $nama = $_POST['nama'];
    $asal = $_POST['asal'];
    $kelamin = $_POST['kelamin'];
    $telepon = $_POST['telepon'];
    
    echo "Pendaftaran berhasil, selamat datang " . $nama;
    echo "<br/>";
	echo "<hr>";
    echo "Nama : " . $nama;
    echo "<br/>";
    echo "Jenis kelamin : " . $kelamin;
	echo "<br/>";
	echo "Asal SMP : " . $asal;
    echo "<br/>";
    echo "No.Telp : " . $telepon;
?>