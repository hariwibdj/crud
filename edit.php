<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi </title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA </h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
    <?php
    include "koneksi.php";
    $npm = $_GET['npm'];
    $q = "SELECT * FROM mahasiswa WHERE npm = '$npm'";
    $q1 = mysqli_query($koneksi,$q);
    $data = mysqli_fetch_assoc($q1);

    ?>

	<form method="post" action="update.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?=$data["nama"];?>"></td>
			</tr>
			<tr>
				<td>NPM</td>
				<td><input type="text" name="npm" value="<?=$data["npm"];?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?=$data["alamat"];?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="UPDATE"></td>
			</tr>		
		</table>
	</form>
</body>
</html>