<?php
session_start();
if ($_SESSION['status_login'] != true) {
  header('location: login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>By&Che</title>
  <link rel="stylesheet" href="/dist/output.css">
  <link rel="stylesheet" media="all" href="./frontend/css/input.css" type="text/css">
  <link href="./frontend/css/input.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Homenaje&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            logo: ['"Arizonia"', "cursive"],
            nav: ['"Homenaje"', "sans-serif"],
            content: ['"Prompt"', "sans-serif"]
          },
          colors: {
            semiblack: "#222222",
            semigrey: "#EFEFEF"
          }
        }
      },
    }
  </script>
</head>

<body class="min-h-screen">
  <?php if ($_SESSION['role'] == "pelanggan") : ?>
    <nav>
      <div class="navbar-wrapper max-w-screen  bg-white pr-6 font-nav">
        <div class="content-wrapper flex flex-row w-full">
          <div class="left-content flex flex-row w-full gap-14 ">
            <div class="brand bg-semiblack p-4 px-8">
              <div class="brand-wrapper border-2 p-1 box-border px-6 ">
                <div class="text-brand font-logo text-4xl text-white ">
                  By&Che
                </div>
              </div>
            </div>
            <div class="navigation-bar w-full">
              <ul class="navigation-bar flex flex-row items-center divide-x-2 divide-black h-full tracking-wide text-lg uppercase font-semibold">
                <li class="px-10"><a href="./home.php">Home</a></li>
                <li class="px-10"><a href="./produk.php">Catalog</a></li>
                <li class="px-10"><a href="./histori_pembelian.php">History</a></li>
              </ul>
            </div>
          </div>
          <div class="right-content w-full">
            <div class="content-wrapper flex justify-end items-center divide-x-2 divide-semiblack  h-full">
              <div class="cart px-3">
                <div class="cart-item-wrapper">
                  <div class="cart-logo  ">
                    <div class="wrapper-absolute-content flex relative justify-center items-center rounded-full w-12  text-black hover:text-white h-12 hover:bg-semiblack hover:cursor-pointer transition-colors duration-300 ">
                      <a href="./keranjang.php">
                        <span class="material-symbols-rounded text-3xl flex">
                          shopping_cart
                        </span>
                      </a>
                      <div class="count-keranjang absolute top-1 right-2">
                        <?php
                        include "koneksi.php";
                        $qry_produk = mysqli_query($conn, "select count(*) from detail_transaksi where id_pelanggan = $_SESSION[id_pelanggan]");
                        $dt_produk = mysqli_fetch_array($qry_produk);
                        ?>
                        <p class="text-sm bg-semiblack text-white rounded-full w-4 h-4 text-center "><?= @$_SESSION['cart'] == null ? 0 : count(@$_SESSION['cart'])  ?></p>
                        <?php

                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="account-settings px-3 text-xl font-medium tracking-widest">
                <a href="">my account</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  <?php elseif ($_SESSION["role"] == 'petugas') : ?>
    <nav>
      <div class="navbar-wrapper max-w-screen  bg-white pr-6 font-nav">
        <div class="content-wrapper flex flex-row w-full">
          <div class="left-content flex flex-row w-full gap-14 ">
            <div class="brand bg-semiblack p-4 px-8">
              <div class="brand-wrapper border-2 p-1 box-border px-6 ">
                <div class="text-brand font-logo text-4xl text-white ">
                  By&Che
                </div>
              </div>
            </div>
            <div class="navigation-bar w-full">
              <ul class="navigation-bar flex flex-row items-center divide-x-2 divide-black h-full tracking-wide text-lg uppercase font-semibold">
                <li class="px-10"><a href="./tambah_pelanggan.php">New Users</a></li>
                <li class="px-10"><a href="./tambah_petugas.php">New Admin</a></li>
                <li class="px-10"><a href="./tambah_produk.php">New Product</a></li>
                <li class="px-10"><a href="./update_histori_pembelian.php">Update History Product</a></li>
              </ul>
            </div>
          </div>
          <div class="right-content w-full">
            <div class="content-wrapper flex justify-end items-center divide-x-2 divide-semiblack  h-full">
              <div class="account-settings px-3 text-xl font-medium tracking-widest">
                <a href="">my account</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>

  <?php endif ?>