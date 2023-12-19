<!DOCTYPE html>
<html lang="en">
<head>
    

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
<div class="container mt-5">
    <a class="btn btn-primary" href="tambah.php">Tambah Mahasiswa</a>
    <table class="table table-striped table-hover">
        <tr>
            <td>No.</td>
            <td>NPM</td>
    <td>Nama</td>
    <td>Alamat</td>
    <td>Action</td>
</tr>
<?php
    include "koneksi.php";
    $no = 1;
    $q_select_all = "SELECT * FROM mahasiswa";
    $tampil = mysqli_query($koneksi,$q_select_all);
    while($data = mysqli_fetch_assoc($tampil)){
        ?>
<tr>
    <td><?=$no;?></td>
    <td><?=$data["npm"];?></td>
    <td><?=$data["nama"];?></td>
    <td><?=$data["alamat"];?></td>
    <td> <a class="btn btn-success" href="edite.php?npm=<?=$data["npm"];?>"> Edit </a>   <a class="btn btn-danger" href="delet.php?npm=<?=$data["npm"];?>">Delete</a></td>
</tr>
<?php
    $no++;
}
?>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
</body>
</html>