<?php
if($_POST){
    $nama_produk=$_POST['nama_produk']; //$_POST['NAMA ATRIBUTNYA']
    $deskripsi=$_POST['deskripsi'];
    $harga=$_POST['harga'];
    $foto=$_POST['foto'];
    if(empty($nama_produk)){
        echo "<script>alert('nama produk tidak boleh kosong');location.href='tambah_produk.php';</script>";

    } elseif(empty($deskripsi)){
        echo "<script>alert('deskripsi tidak boleh kosong');location.href='tambah_produk.php';</script>";

    } elseif(empty($harga)){
        echo "<script>alert('harga tidak boleh kosong');location.href='tambah_produk.php';</script>";

    } elseif(empty($foto)){
        echo "<script>alert('foto tidak boleh kosong');location.href='tambah_produk.php';</script>";

    } else {
        include "koneksi.php"; //INCLUDE KE KELAS yang ada DATABASE 
        $insert=mysqli_query($conn,"insert into produk (nama_produk, deskripsi,harga,foto_produk) value ('".$nama_produk."','".$deskripsi."','".$harga."','".$foto."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan produk');location.href='tambah_produk.php';</script>";
            // fungsi (location.href='tambah_kelas.php') untuk kembali ke halaman tambah_kelas
        } else {
            echo "<script>alert('Gagal menambahkan produk');location.href='tambah_produk.php';</script>";
        }
    }
}
?>
