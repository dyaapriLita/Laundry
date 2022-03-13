<!DOCTYPE html>
<?php
include "header.php";
?>
<html>
<head>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">
<title></title>
</head>
<body>
<h3>Tambah Detail Transaksi</h3>
<form action="proses_tambah_detail_transaksi.php" method="post">
ID Detail Transaksi:

<input type="int" name="id_detail_transaksi" value="" class="form-control">

ID Transaksi:

<input type="int" name="id_transaksi" value="" class="form-control">

ID_produk :

<input type="int" name="id_produk" value="" class="form-control">

QTY :
<input type="int" name="qty" class="form-control">
    
Subtotal :
<input type="int" name="subtotal" class="form-control">
<br>


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