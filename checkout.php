<head>
    <title>Document</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

</html>
<?php
session_start();
include "koneksi.php";
$subtotal = 0;

$cart = @$_SESSION['cart'];
if (count($cart) > 0) {
    $id = mysqli_insert_id($conn);
    foreach ($cart as $key_produk => $val_produk) {
        $subtotal  += $val_produk["qty"] * $val_produk["harga"];
        mysqli_query($conn, "insert into detail_transaksi (id_pelanggan,id_produk,qty,subtotal,tgl_transaksi, status) value('" . $_SESSION['id_pelanggan'] . "','" . $val_produk['id_produk'] . "','" . $val_produk['qty'] . "','" . $subtotal . "', '" . date('Y-m-d') . "', 'Preparing')");
    }
    unset($_SESSION['cart']) ?>
    <script>
        Swal.fire({
            icon: "success",
            title: "Success to buy product",
            showConfirmButton: true,
            confirmButtonColor: 'rgb(253,234,71)',
        }).then((result) => {
            if (result.isConfirmed) {
                location.href = "histori_pembelian.php"
            }
        })
    </script>
<?php
}
?>


<!-- // session_start();
// include "koneksi.php";
// $cart=@$_SESSION['cart'];
// if(count($cart)>0){

// $tgl=date('Y-m-d',mktime(0,0,0,date('m'),(date('d')),date('Y')));
// $id=mysqli_insert_id($conn);
// foreach ($cart as $key_produk => $val_produk) {
// $subtotal=$val_produk['qty'] * $val_produk['harga'];
// mysqli_query($conn,"insert into detail_transaksi (id_transaksi,qty,subtotal) value('".$id."','".$val_produk['id_produk']."','".$val_produk['qty']."','".$subtotal."','".$tgl."')");
// }
// unset($_SESSION['cart']);
// echo '<script>
    alert("Pembelian Berhasil");
    location.href = "histori_pembelian.php"
</script>';
// } -->