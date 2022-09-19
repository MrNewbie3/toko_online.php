<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <?php
    include "header.php";
    ?>
    <h3>TRANSAKSI</h3>
    <form action="proses_tambah_transaksi.php" method="post">
        ID Pelanggan :
        <select name="id_pelanggan" class="form-control">
            <option></option>
            <?php
            include "koneksi.php";
            $qry_pelanggan = mysqli_query($conn, "select * from pelanggan"); //tampilkan semua data di tabel pelanggan
            while ($data_pelanggan = mysqli_fetch_array($qry_pelanggan)) {
                echo '<option value="' . $data_pelanggan['id_pelanggan'] . '">' . $data_pelanggan['nama'] . '</option>';
            }
            ?>
        </select>
        ID Petugas :
        <select name="id_petugas" class="form-control">
            <option></option>
            <?php
            include "koneksi.php";
            $qry_petugas = mysqli_query($conn, "select * from petugas"); //tampilkan semua data di tabel pelanggan
            while ($data_petugas = mysqli_fetch_array($qry_petugas)) {
                echo '<option value="' . $data_petugas['id_petugas'] . '">' . $data_petugas['nama_petugas'] . '</option>';
            }
            ?>
        </select>
        ID Produk :
        <select name="id_produk" class="form-control">
            <option></option>
            <?php
            include "koneksi.php";
            $qry_produk = mysqli_query($conn, "select * from produk"); //tampilkan semua data di tabel pelanggan
            while ($data_produk = mysqli_fetch_array($qry_produk)) {
                echo '<option value="' . $data_produk['id_produk'] . '">' . $data_produk['nama_produk'] . '</option>';
            }
            ?>
        </select>
        Tanggal transaksi :
        <input type="date" name="tgl" value="" class="form-control">
        <input type="submit" name="simpan" value="Tambah transaksi" class="btn btn-primary">
    </form>
</body>

</html>