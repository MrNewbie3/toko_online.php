<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
<h3>TAMBAH PETUGAS </h3>
    <form action="proses_tambah_petugas.php" method="post">
        Nama Petugas:
        <input type="text" name="nama_petugas" value="" placeholder="masukkan nama" class="form-control">
        username : 
        <input type="text" name="username" value="" placeholder="masukkan username" class="form-control">
        password : 
        <input type="password" name="pass" value="" placeholder="masukkan password" class="form-control">
        level :
        <input type="text" name="level" value="" placeholder="masukkan level" class="form-control">
        <input type="submit" name="simpan" value="Tambah Petugas" class="btn btn-primary">
    </form>
</body>
</html>