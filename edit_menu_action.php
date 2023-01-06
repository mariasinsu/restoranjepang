<?php
    include "koneksi.php";

    //menerima data dari method POS
    $id = $_POST['Id_Menu'];
    $nama = $_POST['Nama_Menu'];
    $dsk = $_POST['Deskripsi'];
    $hrg = $_POST['Harga_Menu'];

    //proses menambah dalam database
    $data = $koneksi->query("UPDATE menu SET 
            Nama_Menu='$nama', Deskripsi='$dsk', Harga_Menu='$hrg'
            WHERE Id_Menu=$id");

    // mengarahkan tampilan kembali ke list
    if($data){
        header('location:menu_list.php');
    } else {
        echo "Tambah data gagal";
    }
?>