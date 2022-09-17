<?php
include "header.php";
?>
<h2>KERANJANG</h2>
<table class="table table-hover striped">
    <thead>
        <tr>
            <th>NO</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga per item</th>
            <th>Aksi</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $subtotal = 0;
        ?>
        <?php if (@$_SESSION['cart'] == null) :
            echo "<h1>Keranjang Kosong, Silahkan Belanja</h1>";
        elseif (@$_SESSION['cart'] != null) :
            foreach (@$_SESSION['cart'] as $key_produk => $val_produk) : ?>
                <tr>
                    <td><?= ($key_produk + 1) ?></td>
                    <td><?= $val_produk['nama_produk'] ?></td>
                    <td><?= $val_produk['id_pelanggan'] ?></td>
                    <td><?= $val_produk['qty'] ?></td>
                    <td>Rp. <?= number_format($val_produk['harga'], 0, ',', '.') ?></td>
                    <td><a href="hapus_cart.php?id=<?= $key_produk ?>" class="btn btn-danger"><strong>Hapus Produk</strong></a></td>
                    <?php
                    $subtotal  += $val_produk["qty"] * $val_produk["harga"];
                    ?>

                </tr>


            <?php endforeach ?>
    </tbody>
</table>
<tr>
    <td>Harga total</td>
    <td>Rp. <?= number_format($subtotal, 0, ",", ".") ?></td>
    <?php
    ?>
</tr>
<a href="checkout.php" class="btn btn-primary">Check Out</a>
<?php endif; ?>
<?php
include "footer.php";
?>