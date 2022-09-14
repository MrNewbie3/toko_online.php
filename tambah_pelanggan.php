<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
<h3>TAMBAH PELANGGAN </h3>
    <form action="proses_tambah_pelanggan.php" method="post">
        Nama Pelanggan:
        <input type="text" name="nama" value="" placeholder="masukkan nama" class="form-control">
        Alamat : 
        <input type="text" name="alamat" value="" placeholder="masukkan alamat" class="form-control">
        No Hp : 
        <input type="text" name="telp" value="" placeholder="masukkan no Hp" class="form-control">
        username:
        <input type="text" name="username" value="" placeholder="masukkan username" class="form-control">
        password:
        <input type="password" name="password" value="" placeholder="masukkan passwoard" class="form-control">
        <input type="submit" name="simpan" value="Tambah Pelanggan" class="btn btn-primary">
    </form>
</body>
</html>