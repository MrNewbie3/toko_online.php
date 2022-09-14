<?php
if($_POST){
    $nama=$_POST['nama_petugas']; //$_POST['NAMA ATRIBUTNYA']
    $username=$_POST['username'];
    $password=$_POST['pass'];
    $level=$_POST['level'];
    if(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_petugas.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_petugas.php';</script>";

    } elseif(empty($password)){
        echo "<script>alert('passwoard tidak boleh kosong');location.href='tambah_petugas.php';</script>";

    } elseif(empty($level)){
        echo "<script>alert('level tidak boleh kosong');location.href='tambah_petugas.php';</script>";

    }else {
        include "koneksi.php"; //INCLUDE KE KELAS yang ada DATABASE 
        $insert=mysqli_query($conn,"insert into petugas (nama_petugas, username, passwoard,level) value ('".$nama."','".$username."','".md5($password)."','".$level."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan petugas');location.href='tambah_produk.php';</script>";
            // fungsi (location.href='tambah_kelas.php') untuk kembali ke halaman tambah_kelas
        } else {
            echo "<script>alert('Gagal menambahkan petugas');location.href='tambah_produk.php';</script>";
        }
    }
}
?>