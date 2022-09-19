<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <?php
    include "../header.php";
    ?>
    <div class="flex w-full justify-center items-center my-5">
        <div class="flex-none">
            <?php
            include "./layouts/sidebar.php";
            ?>
        </div>
        <div class="flex-1">
            <div class="w-10/12">
                <h3 class="text-center pt-4 pb-2 font-bold text-2xl">TAMBAH PELANGGAN</h3>
                <form action="proses_tambah_pelanggan.php" method="post">
                    <div>
                        <label for="nama" class="font-medium">Nama pelanggan : </label>
                        <input type="text" name="nama" value="" placeholder="masukkan nama" class="w-full rounded-md py-2 px-3 bg-white my-2">
                    </div>
                    <div>
                        <label for="alamat" class="font-medium">Alamat : </label>
                        <input type="text" name="alamat" value="" placeholder="masukkan alamat" class="w-full rounded-md py-2 px-3 bg-white my-2">
                    </div>
                    <div>
                        <label for="telp" class="font-medium">Telepon : </label>
                        <input type="text" name="telp" value="" placeholder="masukkan no Hp" class="w-full rounded-md py-2 px-3 bg-white my-2">
                    </div>
                    <div>
                        <label for="username" class="font-medium">Username : </label>
                        <input type="text" name="username" value="" placeholder="masukkan username" class="w-full rounded-md py-2 px-3 bg-white my-2">
                    </div>
                    <div>
                        <label for="password" class="font-medium">Password : </label>
                        <input type="password" name="password" value="" placeholder="masukkan passwoard" class="w-full rounded-md py-2 px-3 bg-white my-2">
                    </div>
                    <input type="submit" name="simpan" value="Tambah Pelanggan" class="w-full rounded-md mt-4 py-2 px-3 bg-slate-800 font-bold text-white">
                </form>
            </div>
        </div>
    </div>
    <?php
    include "../footer.php";
    ?>
</body>

</html>