<?php
if($_POST){
$nama_member=$_POST['nama_member'];
$alamat=$_POST['alamat'];
$jk=$_POST['jk'];
$tlp=$_POST['tlp'];

if(empty($nama_member)){
echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
} elseif(empty($alamat)){
echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
} elseif(empty($jk)){
echo "<script>alert('jenis kelamin tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
} else {
include "koneksi.php";
$insert=mysqli_query($conn,"insert into member (nama_member, alamat, jk, tlp) value ('".$nama_member."','".$alamat."','".$jk."','".$tlp."')") or die(mysqli_error($conn));

if($insert){
echo "<script>alert('Sukses menambahkan pelanggan');location.href='tampil_pelanggan.php';</script>";

} else {
echo "<script>alert('Gagal menambahkan pelanggan');location.href='tambah pelanggan.php';</script>";
}
}
}