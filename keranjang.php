<?php
include "header.php";
?>
<div class="main-wrapper px-8">
    <div class="top-bar w-fit flex flex-col my-16 gap-y-8 ">
        <h2 class=" text-5xl  font-nav font-semibold tracking-widest">Transaction History</h2>
        <hr class="bg-yellow-300 w-1/2 h-2">
    </div>
    <?php
    $subtotal = 0;
    ?>
    <?php if (@$_SESSION['cart'] == null) : ?>
        <h1 class="text-center uppercase font-semibold text-2xl">Empty Cart, go to catalog to checkout your favourite cars!</h1>

        <?php elseif (@$_SESSION['cart'] != null) :
        foreach (@$_SESSION['cart'] as $key_produk => $val_produk) : ?>
            <tr>
                <?php
                $subtotal  += $val_produk["qty"] * $val_produk["harga"];
                ?>

            </tr>
            <div class="content-wrapper w-full flex flex-row justify-between items-center">
                <div class="wrapper-detail w-full">
                    <div class="left-content flex flex-row items-center gap-x-8 w-2/3">
                        <div class="img">
                            <img src="<?= $val_produk['foto'] ?>" alt="">
                        </div>
                        <div class="text font-bold flex flex-row justify-between items-center text-2xl">
                            <div class="title">
                                <p><?= $val_produk['nama_produk'] ?></p>
                                <p class="text-sm text-zinc-600">Quantity: <?= $val_produk['qty'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper-action w-full flex flex-row justify-between">
                    <div class="price">
                        <p class="font-semibold text-sm">item price: Rp. <?= number_format($val_produk['harga'], 0, ",", '.') ?></p>
                        <p class="font-semibold text-sm">total price: Rp. <?= number_format($subtotal, 0, ",", '.') ?></p>
                    </div>
                    <div class="right-content  flex flex-row justify-evenly w-auto gap-x-8 font-semibold text-md items-center">
                        <a href="hapus_cart.php?id=<?= $key_produk ?>" class="bg-black px-8 rounded-md py-1 text-white tracking-widest font-nav">Delete</a>
                        <a href="checkout.php" class="bg-yellow-300 px-2 rounded-md py-1 tracking-widest">Check Out</a>
                    </div>
                </div>
            </div>

        <?php endforeach ?>

    <?php endif; ?>
</div>
<?php
include "footer.php";
?>