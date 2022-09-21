<?php
include "../header.php";
include "../koneksi.php";

if (isset($_POST["simpan"])) {
    $status = $_POST['status'];
    $id_pelanggan = $_GET['id_detail_transaksi'];
    $update = mysqli_query($conn, "UPDATE detail_transaksi SET status ='$status' WHERE id_detail_transaksi = '$id_pelanggan'");
    if ($update) {
        echo "<script>alert('Sukses update transaksi');location.href='update_histori_pembelian.php';</script>";
        // fungsi (location.href='tambah_kelas.php') untuk kembali ke halaman tambah_kelas
    } else {
        echo "<script>alert('Gagal update transaksi');location.href='edit_histori.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Histori</title>
</head>

<body>
    <div class="flex items-center justify-center">
        <?php
        $id = $_GET['id_detail_transaksi'];
        $qry_produk = mysqli_query($conn, "select * from  detail_transaksi inner join produk on produk.id_produk = detail_transaksi.id_produk join pelanggan on pelanggan.id_pelanggan = detail_transaksi.id_pelanggan where id_detail_transaksi = $id");
        $dt_produk = mysqli_fetch_array($qry_produk);
        $name = $dt_produk['nama_produk'];
        $qty = $dt_produk['qty'];
        $harga = $dt_produk['harga'];
        $date = $dt_produk['tgl_transaksi'];
        $pelanggan = $dt_produk['nama'];
        ?>
        <div class="w-10/12">
            <h3 class="text-center pt-4 pb-2 font-bold text-2xl">UPDATE TRANSAKSI</h3>
            <form action="" method="post">
                <div>
                    <label for="pelanggan" class="font-medium">Nama pelanggan : </label>
                    <input type="text" name="pelanggan" value="<?= $pelanggan ?>" class="w-full rounded-md py-2 px-3 bg-slate-100 my-2" disabled>
                </div>
                <div>
                    <label for="name" class="font-medium">Nama barang : </label>
                    <input type="text" name="name" value="<?= $name ?>" class="w-full rounded-md py-2 px-3 bg-slate-100 my-2" disabled>
                </div>
                <div>
                    <label for="harga" class="font-medium">Harga : </label>
                    <input type="number" name="harga" value="<?= $harga ?>" class="w-full rounded-md py-2 px-3 bg-slate-100 my-2" disabled>
                </div>
                <div>
                    <label for="tanggal" class="font-medium">Tanggal Order : </label>
                    <input type="date" name="tanggal" value="<?= $date ?>" class="w-full rounded-md py-2 px-3 bg-slate-100 my-2" disabled>
                </div>
                <div>
                    <label for="status" class="font-medium">Status barang : </label>
                    <select name="status" id="status" class="w-full rounded-md py-2 px-3 bg-white my-2" required>
                        <option value="" disabled selected>Pilih status</option>
                        <option value="Preparing">Preparing</option>
                        <option value="Processing">Processing</option>
                        <option value="Delivery">Delivery</option>
                        <option value="Delivered">Delivered</option>
                    </select>
                </div>
                <input type="submit" name="simpan" value="Update Transaksi" class="w-full rounded-md mt-4 py-2 px-3 bg-slate-800 font-bold text-white">
            </form>
        </div>
    </div>
</body>


</html>
<?php
include "../footer.php";
?>