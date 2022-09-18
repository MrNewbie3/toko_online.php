<?php
include "header.php";
include "koneksi.php";
$qry_detail_produk = mysqli_query($conn, "select * from produk where id_produk = '" . $_GET['id_produk'] . "'");
$dt_produk = mysqli_fetch_array($qry_detail_produk);
?>
<h2 class="text-center text-5xl my-16 font-nav font-semibold tracking-widest">Discover Your Product</h2>
<div class="row px-10">
    <form action="masukkankeranjang.php?id_produk=<?= $dt_produk['id_produk'] ?>" method="post">
        <div class="wrapper-highlight-content w-full flex flex-row">
            <div class="left-content w-full flex flex-col justify-evenly">
                <div class="img-parent flex justify-center">
                    <img src="<?= $dt_produk['foto'] ?>" class="w-96">
                </div>
                <div class="small-image flex flex-row max-w-full justify-center ">
                    <img src="./assets/a_class1.png" alt="" class="w-32  hover:cursor-pointer">
                    <img src="./assets/a_class2.png" alt="" class="w-32  hover:cursor-pointer">
                    <img src="./assets/a_class3.png" alt="" class="w-32  hover:cursor-pointer">
                </div>
            </div>
            <div class="right-content w-full flex flex-col gap-y-8">
                <div class="details-button flex flex-row gap-x-5">
                    <p class="p-3 px-6 border-2 max-w-fit tracking-widest font-semibold rounded-md">Details</p>
                    <p class="p-3 px-6 text-gray-500 max-w-fit tracking-widest font-semibold rounded-md">Review</p>
                </div>
                <div class="text-description flex flex-col gap-y-4">
                    <p class="text-2xl font-semibold"><?= $dt_produk['nama_produk'] ?></p>
                    <p class="text-gray-500 font-medium"><?= $dt_produk['deskripsi'] ?></p>
                </div>
                <div class="price-col-sum-check uppercase flex flex-col gap-y-12">
                    <div class="product-option w-full flex flex-row gap-x-20">
                        <div class="price w-full flex flex-row justify-between items-center">
                            <p class="font-medium">Price</p>
                            <hr class="bg-zinc-300 w-1/4 mx-3 h-0.5">
                            <p class="font-semibold font-nav tracking-wide text-xl">Rp. <?= number_format(substr($dt_produk['harga'], 0, 3), 0, ",", ".") ?> Mio</p>
                        </div>
                        <div class="color w-full flex flex-row justify-between items-center">
                            <p class="font-medium">Color</p>
                            <hr class="bg-zinc-300 w-1/4 mx-3 h-0.5">
                            <div class="wrapper flex flex-row gap-x-2">
                                <div class="color1 w-4 h-4 bg-black rounded-full"></div>
                                <div class="color2 w-4 h-4 bg-gray-400 rounded-full"></div>
                                <div class="color3 w-4 h-4 bg-red-600 rounded-full"></div>
                            </div>
                        </div>
                    </div>
                    <div class="button-option w-full flex flex-row gap-x-20 font-medium items-center">
                        <div><input type="number" name="jumlah_beli" value="1" min="1" class="text-center rounded-md py-2 "></div>
                        <div><input class="p-3 px-6 box-border font-medium bg-semiblack cursor-pointer text-white rounded-full" type="submit" value="ADD TO CART"></div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php
include "footer.php";
?>