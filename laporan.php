<!DOCTYPE html>
<?php
include "header.php";
?>
<html>
<head>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">
<title></title>
</head>
<body>
<h3 align="center">LAPORAN</h3>
<h3>Pelanggan</h3>
<table class="table table-hover table-striped">
<thead>
<tr>
<th>NO</th><th>NAMA PELANGGAN</th>
<th>ALAMAT</th><th>JENIS KELAMIN</th>
<th>TELEPON</th>

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
<html>
<head>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">
<title></title>
</head>
<body>
<h3>User</h3>
<form action="proses_tambah_user.php" method="post">
<table class="table table-hover table-striped">
<thead>
<tr>
<th>NO</th><th>NAMA USER</th>
<th>USERNAME</th><th>PASSWORD</th>
<th>ROLE</th>

</tr>
</thead>
<tbody>
<?php
include "koneksi.php";

$qry_user=mysqli_query($conn,"select * from user");

$no=0;
while($data_user=mysqli_fetch_array($qry_user)){
  $no++;
?>
  <tr>
    <td><?=$no?></td><td><?=$data_user['nama_user']?></td>
    <td><?=$data_user['username']?></td><td><?=$data_user['password']?>
    </td><td><?=$data_user['role']?></td>
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
<html>
<head>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">
<title></title>
</head>
<body>
<h3>Cucian</h3>
<table class="table table-hover table-striped">
<thead>
<tr>
<th>NO</th><th>JENIS</th>
<th>HARGA</th>

</tr>
</thead>
<tbody>
<?php
include "koneksi.php";

$qry_paket=mysqli_query($conn,"select * from paket");

$no=0;
while($data_paket=mysqli_fetch_array($qry_paket)){
  $no++;
?>
  <tr>
    <td><?=$no?></td><td><?=$data_paket['jenis']?></td>
    <td><?=$data_paket['harga']?></td>
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
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
crossorigin="anonymous"></script>
</body>
</html>
<?php
?>
<body>
<div class="card card-body">
  <h3>Transaksi </h3> 
  <table class="table table-hover table-striped bg-white">
    <thead>
    <tr>
                <th>NO</th>
                <th>NAMA PELANGGAN</th>
                
                <th>TGL</th>
                <th>BATAS WAKTU</th>
                <th>TGL BAYAR</th>
                
                <th>STATUS</th>
                <th>DIBAYAR</th>
                <th>JENIS</th>
                <th>QTY</th>
                <th>JUMLAH</th>

            </tr>
</thead>
            <tbody>
            <?php
        
            include "koneksi.php";
            
            $qry_transaksi=mysqli_query($conn,"select t.id_transaksi as id, m.nama_member as nama_member, t.tgl_transaksi as tgl, batas_waktu, tgl_bayar, status, dibayar from transaksi t, member m where t.id_member = m.id_member");
            echo mysqli_error($conn);
            $no=0;
            while($data_transaksi=mysqli_fetch_array($qry_transaksi)){
                $qry_detail_transaksi=mysqli_query($conn,"select *, detail_transaksi.qty * paket.harga as total from detail_transaksi, paket where id_transaksi = ".$data_transaksi['id']." AND paket.id_paket = detail_transaksi.id_paket");
                $jml_paket = mysqli_num_rows($qry_detail_transaksi);

                $no++;

                $i = 0;
                while($data_detail_transaksi = mysqli_fetch_array($qry_detail_transaksi)) {
                    $i++;
                    if ($i == 1) {
                ?>
                <tr>
                    
                    <td><?=$no?></td>
            
                    <td><?=$data_transaksi['nama_member']?></td>
                    <td><?=$data_transaksi['tgl']?></td>
                    <td><?=$data_transaksi['batas_waktu']?></td>
                    <td><?=$data_transaksi['tgl_bayar']?></td>
                    <td><?=$data_transaksi['status']?></td>
                    <td><?=$data_transaksi['dibayar']?></td>
                    <td><?=$data_detail_transaksi['jenis']?></td>
                    <td><?=$data_detail_transaksi['qty']?></td>
                    <td><?=$data_detail_transaksi['total']?></td>

               <td> 
                </tr>
<?php
} else {
?>
                    <tr>
                    
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><?=$data_detail_transaksi['jenis']?></td>
                    <td><?=$data_detail_transaksi['qty']?></td>
                    <td><?=$data_detail_transaksi['total']?></td>

                    <td>
                    </td>
                </tr>

<?php
    }
    }}
?>

        </tbody>
    </table>
<?php
?>
<html>
<head>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">
<title></title>
</head>
<body>
<h3>Outlet</h3>
<table class="table table-hover table-striped">
<thead>
<tr>
<th>NO</th><th>NAMA OUTLET</th>
<th>ALAMAT</th><th>TELEPON</th>

</tr>
</thead>
<tbody>
<?php
include "koneksi.php";

$qry_outlet=mysqli_query($conn,"select * from outlet");

$no=0;
while($data_outlet=mysqli_fetch_array($qry_outlet)){
  $no++;
?>
  <tr>
    <td><?=$no?></td><td><?=$data_outlet['nama_outlet']?></td>
    <td><?=$data_outlet['alamat']?></td>
    </td><td><?=$data_outlet['telepon']?></td>
  </tr>
  <?php
}
?>
</tbody>
</table>
<button class="btn btn-primary" onclick="const printBtn = document.getElementById('print-btn'); printBtn.hidden = true; window.print();" id="print-btn">Print</button>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>