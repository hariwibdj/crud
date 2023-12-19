<?php
include "koneksi.php";
$npm = $_GET['npm'];

//hapus data
mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE npm = '$npm'");
header("location:index.php");
?>