<?php 
    include "header.php";
    include "koneksi.php";
    $qry_detail_buku=mysqli_query($conn,"select * from produk where id_produk = '".$_GET['id_produk']."'");
    $dt_buku=mysqli_fetch_array($qry_detail_buku);
?>
<h2>Pembelian</h2>
<div class="row">
    <div class="col-md-4">
        <!-- <img src="foto_produk/<?=$dt_buku['foto']?>" class="card-img-top"> -->
    </div>
    <div class="col-md-8">
        <form action="masukkankeranjang.php?id_produk=<?=$dt_buku['id_produk']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>Nama Produk</td><td><?=$dt_buku['nama_produk']?></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td><td><?=$dt_buku['deskripsi']?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Beli</td><td><input type="number" name="jumlah_beli" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="BELI"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>
<?php 
    include "footer.php";
?>
