<?php
include "header.php";

?>
<section class="font-content">
    <div class="bg absolute top-0 left-0 right-0 -z-30 ">
        <img src="./assets/mercedes.jpg" alt="" class="brightness-50">
    </div>
    <div class="wrapper-home h-screen max-w-screen flex flex-col items-center justify-center">
        <div class="wrapper-text-home h-full flex flex-col items-center justify-center text-white">
            <h1 class="text-7xl text-center  ">Hello <span class="capitalize"><?= $_SESSION['nama'] ?></span>, Ready To Spent Your Money?</h1>
            <p>"Happiness can't buy by money, But money can buy happiness"</p>
        </div>
    </div>
    <div class="product-preview-content -mt-44 h-screen box-border px-44 max-w-screen  ">
        <div class="content-wrapper-container rounded-xl bg-white w-full h-full"></div>
    </div>
</section>
<?php
include "footer.php";
?>