<?php
    include "koneksi.php";
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    //update
    mysqli_query($koneksi,"UPDATE mahasiswa SET nama = '$nama', alamat = '$alamat' WHERE npm = '$npm'");

    header("location:index.php");
    
?>