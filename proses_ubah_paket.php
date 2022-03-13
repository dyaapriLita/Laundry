<?php
include 'koneksi.php';
if($_POST){
    $id_paket=$_POST['id_paket'];
    $jenis=$_POST['jenis'];
    $harga=$_POST['harga'];
    if(empty($jenis)){
        echo "<script>alert('jenis cucian tidak boleh kosong');location.href='tambah_paket.php';</script>";

    } elseif(empty($harga)){
        echo "<script>alert('harga tidak boleh kosong');location.href='tambah_paket.php';</script>";
    } else {
        {
            $update=mysqli_query($conn,"update paket set jenis='".$jenis."', harga='".$harga."' where id_paket = '".$id_paket."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update cucian');location.href='tampil_paket.php';</script>";
            } else {
                echo "<script>alert('Gagal update cucian');location.href='tampil_paket.php;</script>";
            }
        }
        
    } 
}
?>