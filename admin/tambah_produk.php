<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<?php
include "../header.php";
?>

<body>
    <div class="flex w-full justify-center items-center">
        <div class="flex-none">
            <?php
            include "./layouts/sidebar.php";
            ?>
        </div>
        <div class="flex-1">
            <div class="w-10/12">
                <h3 class="text-center pt-4 pb-2 font-bold text-2xl">TAMBAH PRODUK</h3>
                <form action="proses_tambah_produk.php" method="POST" enctype="multipart/form-data">
                    <div>
                        <label for="nama_produk" class="font-medium">Nama produk : </label>
                        <input type="text" name="nama_produk" value="" placeholder="masukkan nama barang" class="w-full rounded-md py-2 px-3 bg-white my-2" required>
                    </div>
                    <div>
                        <label for="deskripsi" class="font-medium">Deskripsi : </label>
                        <input type="text" name="deskripsi" value="" placeholder="masukkan deskripsi barang" class="w-full rounded-md py-2 px-3 bg-white my-2" required>
                    </div>
                    <div>
                        <label for="category" class="font-medium">Kategori : </label>
                        <select name="category" id="kategori" class="form-control">
                            <option value="" disabled selected>Choose Vehicle Type</option>
                            <option value="Saloon">Saloon</option>
                            <option value="SUV">SUV</option>
                            <option value="Coupe">Coupe</option>
                            <option value="Sports Car">Sports Car</option>
                            <option value="Estate">Estate</option>
                        </select>
                    </div>
                    <div>
                        <label for="harga" class="font-medium">Harga : </label>
                        <input type="number" name="harga" value="" placeholder="masukkan harga barang" class="w-full rounded-md py-2 px-3 bg-white my-2" required>
                    </div>
                    <div>
                        <label for="fileToUpload" class="font-medium">Foto produk : </label>
                        <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*" value="" placeholder="masukkan foto produk" class="w-full rounded-md py-1 px-3 bg-white my-2" required>
                    </div>
                    <input type="submit" name="simpan" value="Tambah Barang" class="w-full rounded-md mt-4 py-2 px-3 bg-slate-800 font-bold text-white">
                </form>
            </div>
        </div>
    </div>


    <?php
    include '../footer.php';
    ?>
</body>

</html>