<?php
if($_POST){
$nama_outlet=$_POST['nama_outlet'];
$alamat=$_POST['alamat'];
$telepon=$_POST['telepon'];

if(empty($nama_outlet)){
echo "<script>alert('nama outlet tidak boleh kosong');location.href='tambah_outlet.php';</script>";
} elseif(empty($alamat)){
echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_outlet.php';</script>";
} elseif(empty($telepon)){
    echo "<script>alert('telepon tidak boleh kosong');location.href='tambah_outlet.php';</script>";
} else {
include "koneksi.php";
$insert=mysqli_query($conn,"insert into outlet (nama_outlet, alamat, telepon) value ('".$nama_outlet."','".$alamat."','".$telepon."')") or die(mysqli_error($conn));

if($insert){
echo "<script>alert('Sukses menambahkan outlet');location.href='tampil_outlet.php';</script>";

} else {
echo "<script>alert('Gagal menambahkan outlet');location.href='tambah_outlet.php';</script>";
}
}
}