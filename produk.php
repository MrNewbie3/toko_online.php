<?php 
    include "header.php";
?>
<h2>DAFTAR PRODUK</h2>
<div class="row">
    <?php 
    include "koneksi.php";
    $qry_buku=mysqli_query($conn,"select * from produk");



    // while($dt_buku=mysqli_fetch_array($qry_buku)){
        ?>
<form action="kategori.php" method="post">
<select name="id_kelas" class="form-control">
            <option></option>
            <?php 
            include "koneksi.php";
            $qry_kategori=mysqli_query($conn,"select * from kategori"); //tampilkan semua data di tabel kelas
            while($data_kategori=mysqli_fetch_array($qry_kategori)){
                echo '<option value="'.$data_kategori['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';    
            }
            ?>
        </select>
    </form>
        <!-- <div class ="kategori" style="box-shadow">
            <h1><a href="kategori.php">Alat Rumah Tangga</a></h1>
            <h1><a href="kategori.php">Pakaian</a></h1>
        </div> -->


        <!-- <div class="col-md-3">
            <div class="card" >
              <img <?=$dt_buku['foto_produk']?> class="card-img-top">
              <div class="card-body">
                <h5 class="card-title"><?=$dt_buku['nama_produk']?></h5>
                <p class="card-text"><?=substr($dt_buku['deskripsi'], 0)?></p>
                <p class="card-text">Rp. <?=$dt_buku['harga']?></p>
                <a href="beli.php?id_produk=<?=$dt_buku['id_produk']?>" class="btn btn-primary">CHECKOUT</a>
              </div>
            </div>
        </div> -->
        <?php
    // }
    ?>
</div>
<?php 
    include "footer.php";
?>
