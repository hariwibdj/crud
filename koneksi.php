<?php 

$hostname= "localhost";
$username = "root";
$password = "";
$dbname = "dbcrud";

// $koneksi = mysqli_connect("localhost","root","","dbcrud");
$koneksi = mysqli_connect($hostname,$username,$password,$dbname);
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>