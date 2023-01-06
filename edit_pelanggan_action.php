<?php
    include "koneksi.php";

    //menerima data dari method POST
    $id = $_POST['Id_Pelanggan'];
    $nama = $_POST['Nama_Pelanggan'];
    $nhp = $_POST['No_Hp_Pelanggan'];
    $jk = $_POST['Jenis_Kelamin'];
    $almt = $_POST['Alamat_Pelanggan'];

    //proses menambah dalam database
    $data = $koneksi->query("UPDATE pelanggan SET 
            Nama_Pelanggan='$nama', No_Hp_Pelanggan='$nhp', Jenis_Kelamin='$jk', Alamat_Pelanggan=$almt
            WHERE Id_Pelanggan=$id");

    // mengarahkan tampilan kembali ke list
    if($data){
        header('location:pelanggan_list.php');
    } else {
        echo "Tambah data gagal";
    }
?>