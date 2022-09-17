<?php
include "header.php";
?>
<h2>DAFTAR PRODUK</h2>
<div class="row">
    <?php

    include "koneksi.php";
    $qry_produk = mysqli_query($conn, "select * from produk");
    while ($dt_produk = mysqli_fetch_array($qry_produk)) {
    ?>
        <div class="col-md-3">
            <div class="card">

                <img src="<?= $dt_produk['foto'] ?>" class="card-img-top">
                <div class="card-body">
                    <img src="" alt="">
                    <h5 class="card-title"><?= $dt_produk['nama_produk'] ?></h5>
                    <p class="card-text"><?= substr($dt_produk['deskripsi'], 0) ?></p>
                    <p class="card-text">Rp. <?= number_format($dt_produk['harga'], 0, ",", ".") ?></p>
                    <a href="beli.php?id_produk=<?= $dt_produk['id_produk'] ?>" class="btn btn-primary">CHECKOUT</a>
                </div>
            </div>
        </div>
        <!-- <form action="kategori.php" method="post">
            <select name="id_kelas" class="form-control">
                <option></option>
                <?php
                include "koneksi.php";
                $qry_kategori = mysqli_query($conn, "select * from kategori"); //tampilkan semua data di tabel kelas
                while ($data_kategori = mysqli_fetch_array($qry_kategori)) {
                    echo '<option value="' . $data_kategori['id_kelas'] . '">' . $data_kelas['nama_kelas'] . '</option>';
                }
                ?>
            </select>
        </form> -->
        <!-- <div class="kategori">
            <h1><a href="kategori.php">Alat Rumah Tangga</a></h1>
            <h1><a href="kategori.php">Pakaian</a></h1>
        </div> -->



    <?php
    }
    ?>
</div>
<?php
include "footer.php";
?>