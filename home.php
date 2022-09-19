<?php
include "header.php";

?>
<section class="font-content">
    <div class="bg absolute top-0 left-0 right-0 -z-30 ">
        <img src="./assets/mercedes.jpg" alt="" class="brightness-50">
    </div>
    <div class="wrapper-home h-screen max-w-screen flex flex-col items-center justify-center">
        <div class="wrapper-text-home h-full flex flex-col items-center justify-center text-white" data-aos="zoom-in">
            <h1 class="text-7xl text-center  ">Hello <span class="capitalize"><?= $_SESSION['nama'] ?></span>, Ready To Spent Your Money?</h1>
            <p>"Happiness can't buy by money, But money can buy happiness"</p>
        </div>
    </div>
    <div class="product-preview-content -mt-44 h-fit box-border px-44 max-w-screen ">
        <div class="content-wrapper-container rounded-xl bg-white w-full h-full box-border px-20 py-16 flex flex-col gap-y-36">
            <div class="product">
                <?php
                include "koneksi.php";
                $qry_produk = mysqli_query($conn, "select * from produk limit 1");
                while ($dt_produk = mysqli_fetch_array($qry_produk)) {
                ?>
                    <div class="wrapper-highlight-content w-full flex flex-row">
                        <div class="left-content w-full flex flex-col justify-evenly">
                            <div class="img-parent flex justify-center">
                                <img src="<?= $dt_produk['foto'] ?>" data-aos="fade-up-right" class=" w-96">
                            </div>
                            <div class="small-image flex flex-row max-w-full justify-center" data-aos="fade-right">
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
                            <div class="text-description flex flex-col gap-y-4" data-aos="fade-up-left">
                                <p class="text-2xl font-semibold"><?= $dt_produk['nama_produk'] ?></p>
                                <p class="text-gray-500 font-medium"><?= $dt_produk['deskripsi'] ?></p>
                            </div>
                            <div class="price-col-sum-check uppercase flex flex-col gap-y-12" data-aos="zoom-in">
                                <div class="product-option w-full flex flex-row gap-x-20">
                                    <div class="price w-full flex flex-row justify-between items-center">
                                        <p class="font-medium">Price</p>
                                        <hr class="bg-semigrey w-1/4 mx-3 h-0.5">
                                        <p class="font-semibold font-nav tracking-wide text-xl">Rp <?= number_format(substr($dt_produk['harga'], 0, 3), 0, ",", ".") ?> Mio</p>
                                    </div>
                                    <div class="color w-full flex flex-row justify-between items-center">
                                        <p class="font-medium">Color</p>
                                        <hr class="bg-semigrey w-1/4 mx-3 h-0.5">
                                        <div class="wrapper flex flex-row gap-x-2">
                                            <div class="color1 w-4 h-4 bg-black rounded-full"></div>
                                            <div class="color2 w-4 h-4 bg-gray-400 rounded-full"></div>
                                            <div class="color3 w-4 h-4 bg-red-600 rounded-full"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-option w-full flex flex-row gap-x-20 font-medium items-center">
                                    <div class="button-to-cart w-full">
                                        <a href="./beli.php?id_produk=<?= $dt_produk['id_produk'] ?>" class="p-3 px-6 box-border bg-semiblack text-white rounded-full">add to cart</a>
                                    </div>
                                    <div class="share-to-media w-full flex flex-row justify-between items-center gap-x-6">
                                        <p class="share">Share</p>
                                        <div class="icons flex flex-row justify-evenly w-full text-white">
                                            <div class="icons-wrapper1 bg-zinc-300 w-8 h-8 flex items-center justify-center rounded-full "><i class="fa-brands fa-facebook-f"></i></div>
                                            <div class="icons-wrapper2 bg-zinc-300 w-8 h-8 flex items-center justify-center rounded-full "><i class="fa-brands fa-twitter"></i></div>
                                            <div class="icons-wrapper3 bg-zinc-300 w-8 h-8 flex items-center justify-center rounded-full "><i class="fa-brands fa-google-plus-g"></i></div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> <?php
                        }
                            ?>
            </div>
            <div class="also-viewed flex flex-col justify-center gap-y-20">
                <div class="text uppercase  flex flex-col gap-y-5 text-center" data-aos="fade-up">
                    <div class="divider self-center bg-yellow-300 h-1 w-32"></div>
                    <p>people also viewed</p>
                </div>
                <div class="image-content-wrapper flex flex-row gap-x-8">
                    <?php
                    include "koneksi.php";
                    $qry_produk = mysqli_query($conn, "select * from produk ");
                    while ($dt_produk = mysqli_fetch_array($qry_produk)) {
                    ?>
                        <a href="./beli.php?id_produk=<?= $dt_produk['id_produk'] ?>">
                            <div class="wrapper-card hover:shadow-stone-900 pb-4 hover:shadow-2xl rounded-lg transition-all duration-300" data-aos="zoom-in">
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
            </div>
        </div>
    </div>
</section>
<?php
include "footer.php";
?>