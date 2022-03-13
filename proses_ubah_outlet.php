<?php
include 'koneksi.php';
if($_POST){
    $id_outlet=$_POST['id_outlet'];
    $nama_outlet=$_POST['nama_outlet'];
    $alamat=$_POST['alamat'];
    $telepon=$_POST['telepon'];
    if(empty($nama_outlet)){
        echo "<script>alert('nama outlet tidak boleh kosong');location.href='tambah_outlet.php';</script>";

    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_outlet.php';</script>";
    } else {
        include "koneksi.php";
        $update=mysqli_query($conn,"update outlet set nama_outlet='".$nama_outlet."', alamat='".$alamat."', telepon='".$telepon."' where id_outlet = ".$id_outlet." ") or die(mysqli_error($conn));
        if($update){
            echo "<script>alert('Sukses update outlet');location.href='tampil_outlet.php';</script>";
        } else {
            echo "<script>alert('Gagal update outlet');location.href='ubah_outlet.php?id_outlet=".$id_outlet."';</script>";
        }
        
    } 
}
?>
?>