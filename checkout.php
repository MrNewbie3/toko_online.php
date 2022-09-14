<?php 
session_start();
include "koneksi.php";
$cart=@$_SESSION['cart'];
if(count($cart)>0){
   
    
    mysqli_query($conn,"insert into transaksi (id_pelanggan,tgl_transaksi) value('".$_SESSION['id_pelanggan']."','".date('Y-m-d')."')");
     $id=mysqli_insert_id($conn);
    foreach ($cart as $key_produk => $val_produk) {
        $subtotal=$val_produk['qty'] * $val_produk['harga'];
        mysqli_query($conn,"insert into detail_transaksi (id_transaksi,id_produk,qty,subtotal) value('".$id."','".$val_produk['id_produk']."','".$val_produk['qty']."','".$subtotal."')");
    }
    unset($_SESSION['cart']);
    echo '<script>alert("Anda berhasil membeli");location.href="histori_pembelian.php"</script>';
}




    // session_start();
    // include "koneksi.php";
    // $cart=@$_SESSION['cart'];
    // if(count($cart)>0){
    
    //     $tgl=date('Y-m-d',mktime(0,0,0,date('m'),(date('d')),date('Y')));
    //      $id=mysqli_insert_id($conn);
    //     foreach ($cart as $key_produk => $val_produk) {
    //         $subtotal=$val_produk['qty'] * $val_produk['harga'];
    //         mysqli_query($conn,"insert into detail_transaksi (id_transaksi,qty,subtotal) value('".$id."','".$val_produk['id_produk']."','".$val_produk['qty']."','".$subtotal."','".$tgl."')");
    //     }
    //     unset($_SESSION['cart']);
    //     echo '<script>alert("Pembelian Berhasil");location.href="histori_pembelian.php"</script>';
    // }
?>
