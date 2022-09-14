<?php
if($_POST){
    $idPelanggan=$_POST['id_pelanggan']; //$_POST['NAMA ATRIBUTNYA']
    $idPetugas=$_POST['id_petugas'];
    $idProduk=$_POST['id_produk'];
    $tanggal=$_POST['tgl'];
    if(empty($idPelanggan)){
        echo "<script>alert('ID pelanggan tidak boleh kosong');location.href='tambah_transaksi.php';</script>";

    } elseif(empty($idPetugas)){
        echo "<script>alert('ID petugas tidak boleh kosong');location.href='tambah_transaksi.php';</script>";

    } elseif(empty($idProduk)){
        echo "<script>alert('ID produk tidak boleh kosong');location.href='tambah_transaksi.php';</script>";

    } elseif(empty($tanggal)){
        echo "<script>alert('Tanggal tidak boleh kosong');location.href='tambah_transaksi.php';</script>";

    } else {
        include "koneksi.php"; //INCLUDE KE KELAS yang ada DATABASE 
        $insert=mysqli_query($conn,"insert into transaksi (id_pelanggan, id_petugas,id_produk,tgl_transaksi) value ('".$idPelanggan."','".$idPetugas."','".$idProduk."','".$tanggal."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan transaksi');location.href='tambah_transaksi.php';</script>";
            // fungsi (location.href='tambah_kelas.php') untuk kembali ke halaman tambah_kelas
        } else {
            echo "<script>alert('Gagal menambahkan transaksi');location.href='tambah_transaksi.php';</script>";
        }
    }
}
?>