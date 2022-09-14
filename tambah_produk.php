<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>TAMBAH PRODUK</h3>
    <form action="proses_tambah_produk.php" method="post">
        Nama Produk:
        <input type="text" name="nama_produk" value="" placeholder="masukkan nama barang" class="form-control">
        Deskripsi : 
        <input type="text" name="deskripsi" value="" placeholder="masukkan deskripsi barang" class="form-control">
        harga : 
        <input type="number" name="harga" value="" placeholder="masukkan harga barang" class="form-control">
        Foto Produk:
        <input type="file" name="foto" value="" placeholder="masukkan foto produk" class="form-control">
        <input type="submit" name="simpan" value="Tambah Barang" class="btn btn-primary">
    </form>
</body>
</html>