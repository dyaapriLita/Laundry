<?php
if($_POST){
$jenis=$_POST['jenis'];
$harga=$_POST['harga'];

if(empty($jenis)){
echo "<script>alert('jenis cucian tidak boleh kosong');location.href='tambah_paket.php';</script>";
} elseif(empty($harga)){
echo "<script>alert('harga tidak boleh kosong');location.href='tambah_paket.php';</script>";
} else {
include "koneksi.php";
$insert=mysqli_query($conn,"insert into paket (jenis, harga) value ('".$jenis."','".$harga."')") or die(mysqli_error($conn));

if($insert){
echo "<script>alert('Sukses menambahkan cucian');location.href='tampil_paket.php';</script>";

} else {
echo "<script>alert('Gagal menambahkan cucian');location.href='tambah_paket.php';</script>";
}
}
}