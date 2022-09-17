<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<?php
include "header.php"
?>

<body>
    <h3>TAMBAH PRODUK</h3>
    <form action="proses_tambah_produk.php" method="POST" enctype="multipart/form-data">
        Nama Produk:
        <input type="text" name="nama_produk" value="" placeholder="masukkan nama barang" class="form-control">
        Deskripsi :
        <input type="text" name="deskripsi" value="" placeholder="masukkan deskripsi barang" class="form-control">
        Kategori :
        <select name="category" id="kategori" class="form-control">
            <option value="" disabled selected>Pilih Kategori</option>
            <option value="Alat Rumah Tangga">Alat Rumah Tangga</option>
            <option value="Elektronik dan gadget">Elektronik dan gadget</option>
            <option value="Makanan  & Minuman">Makanan & Minuman</option>
            <option value="Lifestyle">Lifestyle</option>
        </select>
        harga :
        <input type="number" name="harga" value="" placeholder="masukkan harga barang" class="form-control">
        Foto Produk:
        <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*" value="" placeholder="masukkan foto produk" class="form-control">
        <input type="submit" name="simpan" value="Tambah Barang" class="btn btn-primary">
    </form>
</body>

</html>