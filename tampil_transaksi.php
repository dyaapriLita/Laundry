<?php
include "header.php";
?>
<?php if ($_SESSION['role'] == "owner"){echo "<script>alert('Dilarang akses');location.href='login.php';</script>";} ?>
<body>
<div class="card card-body">
  <h3>Transaksi | <a href="transaksi.php" class="btn btn-primary">Tambah Transaksi</a></h3> 
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
                <th>AKSI</th>

            </tr>
</thead>
            <tbody>
            <?php
        
            include "koneksi.php";
            
            $qry_transaksi=mysqli_query($conn,"select t.id_transaksi as id, m.nama_member as nama_member, t.tgl_transaksi as tgl_transaksi, batas_waktu, tgl_bayar, status, dibayar from transaksi t, member m where t.id_member = m.id_member");
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
                    <td><?=$data_transaksi['tgl_transaksi']?></td>
                    <td><?=$data_transaksi['batas_waktu']?></td>
                    <td><?=$data_transaksi['tgl_bayar']?></td>
                    <td><?=$data_transaksi['status']?></td>
                    <td><?=$data_transaksi['dibayar']?></td>
                    <td><?=$data_detail_transaksi['jenis']?></td>
                    <td><?=$data_detail_transaksi['qty']?></td>
                    <td><?=$data_detail_transaksi['total']?></td>

               <td> <a 
		            href="hapus_transaksi.php?id=<?=$data_transaksi['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>

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
include("footer.php");
 ?>