<?php
include "../header.php";
?>
<div class="wrapper px-10">
    <div class="top-bar w-fit flex flex-col my-16 gap-y-8">
        <h2 class=" text-5xl  font-nav font-semibold tracking-widest">Transaction History</h2>
        <hr class="bg-yellow-300 w-1/2 h-2">
    </div>
    <div class="main-wrapper flex flex-col divide-y-2 divide-zinc-300 w-full ">
        <table class="table-auto border border-slate-500 border-collapse p-4 text-center">
            <tr class="border border-slate-600 rounded-md">
                <th class="border border-slate-700">#</th>
                <th class="border border-slate-700">Photo</th>
                <th class="border border-slate-700">Name</th>
                <th class="border border-slate-700">Qty</th>
                <th class="border border-slate-700">Ordered</th>
                <th class="border border-slate-700">Price</th>
                <th class="border border-slate-700">Total price</th>
                <th class="border border-slate-700">Status</th>
                <th class="border border-slate-700">Action</th>
            </tr>
            <?php
            include "../koneksi.php";
            $qry_produk = mysqli_query($conn, "select * from  detail_transaksi inner join produk on produk.id_produk = detail_transaksi.id_produk");
            $no = 1;
            while ($dt_produk = mysqli_fetch_array($qry_produk)) {
                $produk =  $dt_produk['nama_produk'];
                $qty =  $dt_produk['qty'];
                $foto = $dt_produk['foto'];
                $tgl =  $dt_produk['tgl_transaksi'];
                $price = $dt_produk['subtotal'];
                $subtotal = "Rp. " . number_format($dt_produk['subtotal'], 0, ",", ".");
                $total = $price * $qty;
                $status = $dt_produk['status'] ?? "Preparing";
            ?>
                <tr>
                    <td class="border border-slate-700"><?= $no ?></td>
                    <td class="border border-slate-700">
                        <img src="../<?= $foto ?>" alt="Photo car">
                    </td>
                    <td class="border border-slate-700"><?= $produk ?></td>
                    <td class="border border-slate-700"><?= $qty ?></td>
                    <td class="border border-slate-700"><?= $tgl ?></td>
                    <td class="border border-slate-700"><?= $price ?></td>
                    <td class="border border-slate-700"><?= $total ?></td>
                    <td class="border border-slate-700"><?= $status ?></td>
                    <td class="border border-slate-700">
                        <a href="edit_histori.php?id_detail_transaksi=<?= $dt_produk['id_detail_transaksi'] ?>">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                </tr>
            <?php
                $no++;
            }
            ?>
        </table>
    </div>
</div>

<?php
include "../footer.php";
?>