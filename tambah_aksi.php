<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$alamat = $_POST['alamat'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa(npm,nama,alamat) values('$npm','$nama','$alamat')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>