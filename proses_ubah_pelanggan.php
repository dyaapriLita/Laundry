<?php
include 'koneksi.php';
if($_POST){
    $id_member=$_POST['id_member'];
    $nama_member=$_POST['nama_member'];
    $alamat=$_POST['alamat'];
    $jk=$_POST['jk'];
    $tlp=$_POST['tlp'];
    if(empty($nama_member)){
        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";

    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } else {
        include "koneksi.php";
        $update=mysqli_query($conn,"update member set nama_member='".$nama_member."', alamat='".$alamat."', jk='".$jk."', tlp='".$tlp."' where id_member = ".$id_member." ") or die(mysqli_error($conn));
        if($update){
            echo "<script>alert('Sukses update member');location.href='tampil_pelanggan.php';</script>";
        } else {
            echo "<script>alert('Gagal update member');location.href='ubah_pelanggan.php?id_member=".$id_member."';</script>";
        }
        
    } 
}
?>
?>