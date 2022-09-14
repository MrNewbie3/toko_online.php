<?php 
    include "header.php";
?>
<h2>Histori Pembelian</h2>
<table class="table table-hover table-striped">
    <thead>
        <th>NO</th><th>Tanggal Pembelian</th><th>Nama Barang</th><th>qty</th><th>subtotal</th>
    </thead>
    <tbody>
        <?php 
        include "koneksi.php";
        $qry_histori=mysqli_query($conn,"select * from transaksi order by id_transaksi desc");
        $no=0;
        while($dt_histori=mysqli_fetch_array($qry_histori)){
            $no++;
            //menampilkan buku yang dipinjam
            $produk="<ul>";
            $qty="<ul>";
            $subtotal="<ul>";
            $qry_produk=mysqli_query($conn,"select * from  detail_transaksi join produk on produk.id_produk=detail_transaksi.id_produk where id_transaksi = '".$dt_histori['id_transaksi']."'");
            while($dt_produk=mysqli_fetch_array($qry_produk)){
                $produk.="<li>".$dt_produk['nama_produk']."</li>";
                $qty.="<li>".$dt_produk['qty']."</li>";
                $subtotal.="<li>".$dt_produk['subtotal']."</li>";
            }
            $produk.="</ul>";
            $qty.="</ul>";
            $subtotal.="</ul>";
        ?>
            <tr>
                <td><?=$no?></td><td><?=$dt_histori['tgl_transaksi']?></td><td><?=$produk?></td><td><?=$qty?></td><td><?=$subtotal?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<?php 
    include "footer.php";
?>
