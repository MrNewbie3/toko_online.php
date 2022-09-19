<?php
include "header.php";
?>
<div class="wrapper px-10">
    <div class="top-bar w-fit flex flex-col my-16 gap-y-8" data-aos="fade-right">
        <h2 class=" text-5xl  font-nav font-semibold tracking-widest">Transaction History</h2>
        <hr class="bg-yellow-300 w-1/2 h-2">
    </div>
    <div class="main-wrapper flex flex-col divide-y-2 divide-zinc-300 w-full">
        <?php
        include "koneksi.php";
        $qry_produk = mysqli_query($conn, "select * from  detail_transaksi inner join produk on produk.id_produk = detail_transaksi.id_produk where detail_transaksi.id_pelanggan = '$_SESSION[id_pelanggan]' ");
        while ($dt_produk = mysqli_fetch_array($qry_produk)) {
            $produk =  $dt_produk['nama_produk'];
            $qty =  $dt_produk['qty'];
            $foto = $dt_produk['foto'];
            $tgl =  $dt_produk['tgl_transaksi'];
            $price = $dt_produk['subtotal'];
            $status = $dt_produk["status"];
            $subtotal = "Rp. " . number_format($dt_produk['subtotal'], 0, ",", ".");
            $delivery = date('Y-m-d', strtotime($tgl . '+ 3 days'));
            $color = " ";
            if ($status == "Preparing") {
                $color = "gray";
            } else if ($status == "Processing") {
                $color = "red";
            } else if ($status == "Delivery") {
                $color = "yellow";
            } else if ($status == "Delivered") {
                $color = "green";
            }
        ?>
            <div class="content-wrapper w-full flex flex-row justify-between items-center" data-aos="zoom-in-right" data-aos-duration="500">
                <div class="left-content flex flex-row items-center gap-x-8 w-2/3">
                    <div class="img">
                        <img src="<?= $foto ?>" alt="">
                    </div>
                    <div class="text w-full font-bold flex flex-row justify-between items-center text-2xl">
                        <div class="title">
                            <p><?= $produk ?></p>
                            <p class="text-sm text-zinc-600">Quantity: <?= $qty ?></p>
                        </div>
                        <div class="status flex items-center flex-col ">
                            <p class="text-sm text-zinc-600">Ordered Day: <?= $tgl ?></p>
                            <p class="text-sm text-zinc-600">Delivery Day: <?= $delivery ?></p>
                            <div class="delivery-status border-2 px-2 mt-3 rounded-full ">
                                <div class="wrapper flex flex-row items-center gap-x-2">
                                    <div class="indicator w-2 h-2 rounded-full bg-<?= $color ?>-600"></div>
                                    <p class="status-text text-sm"><?= $status ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-content w-fit flex flex-col justify-items-center font-semibold text-sm">
                    <p>item price: Rp. <?= number_format(($price / $qty), 0, ",", '.') ?></p>
                    <p>total price: <?= $subtotal ?></p>
                </div>
            </div>

        <?php
        }
        ?>
    </div>
</div>
<?php
include "footer.php";
?>