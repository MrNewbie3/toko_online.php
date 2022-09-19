<?php
include "header.php";
?>
<div class="top-bar w-full flex flex-col my-16 gap-y-8 ">
    <h2 class=" text-5xl text-center font-nav font-semibold tracking-widest">Find Your Dream Luxury Cars</h2>
    <hr class="bg-yellow-300 self-center w-1/4 h-2">
</div>
<div class="row font-content px-8">
    <div class="image-content-wrapper flex flex-row gap-8 flex-wrap justify-center">
        <?php
        include "koneksi.php";
        $qry_produk = mysqli_query($conn, "select * from produk ");
        while ($dt_produk = mysqli_fetch_array($qry_produk)) {
        ?>
            <a href="./beli.php?id_produk=<?= $dt_produk['id_produk'] ?>">
                <div class="wrapper-card hover:shadow-stone-500 pb-4 hover:shadow-2xl rounded-lg transition-all duration-300">
                    <div class="card-img text-center font-semibold flex flex-col gap-y-5">
                        <img src="<?= $dt_produk['foto'] ?>">
                        <p class="font-nav text-zinc-400 text-lg">Rp. <?= number_format($dt_produk['harga'], 0, ",", ".") ?></p>
                        <p class=""><?= $dt_produk['nama_produk'] ?></p>
                        <p class="font-nav text-zinc-400 text-sm tracking-widest"><?= $dt_produk['kategori'] ?></p>
                    </div>
                </div>
            </a>
        <?php
        }
        ?>
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

</div>
<?php
include "footer.php";
?>