<?php
    include "koneksi.php";

    //menerima data dari method POS
    $nama = $_POST['Nama_Menu'];
    $dsk = $_POST['Deskripsi'];
    $hrg = $_POST['Harga_Menu'];


    //proses menambah dalam database
    $data = $koneksi->query("INSERT INTO  menu(Nama_Menu, Deskripsi, Harga_Menu) VALUES(
        '$nama', '$dsk', '$hrg')");

    // mengarahkan tampilan kembali ke list
    if($data){
        header('location:menu_list.php');
    } else {
        echo "Tambah data gagal";
    }
?>