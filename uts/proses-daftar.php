<?php

include("konek.php");

if(isset($_POST['daftar'])){
    //ambil data di database
    $judul_buku = $_POST['judul_buku'];
    $eksemplar= $_POST['eksemplar'];
    $pengarang= $_POST['pengarang'];


    $sql = "INSERT INTO tperpus (judul_buku, eksemplar, pengarang)
                VALUE ('$judul_buku', '$eksemplar', '$pengarang')";
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location: admin.php');
    }else{
        header('Location: index.php/status=gagal');
    }
}else{
    die("Akses Ditolak");
}


?>