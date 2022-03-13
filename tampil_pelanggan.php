<!DOCTYPE html>
<?php
include "header.php";
?>
<?php if ($_SESSION['role'] == "owner"){echo "<script>alert('Dilarang akses');location.href='login.php';</script>";} ?>
<html>
<head>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">
<title></title>
</head>
<body>
<h3>Tampil Pelanggan | <a href="tambah_pelanggan.php" class="btn btn-primary">Tambah Pelanggan</a></h3>
<table class="table table-hover table-striped">
<thead>
<tr>
<th>NO</th><th>NAMA PELANGGAN</th>
<th>ALAMAT</th><th>JENIS KELAMIN</th>
<th>TELEPON</th><th>AKSI</th>

</tr>
</thead>
<tbody>
<?php
include "koneksi.php";

$qry_member=mysqli_query($conn,"select * from member");

$no=0;
while($data_member=mysqli_fetch_array($qry_member)){
  $no++;
?>
  <tr>
    <td><?=$no?></td><td><?=$data_member['nama_member']?></td>
    <td><?=$data_member['alamat']?></td><td><?=$data_member['jk']?>
    </td><td><?=$data_member['tlp']?></td>
    <td><a href="ubah_pelanggan.php?id_member=<?=$data_member['id_member']?>" class="btn btn-success">Ubah</a></td>
    <td><a href="hapus_pelanggan.php?id_member=<?=$data_member['id_member']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
  </tr>
  <?php
}
?>
</tbody>
</table>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>