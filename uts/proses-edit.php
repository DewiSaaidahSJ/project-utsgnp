<?php

include("konek.php");
if(isset($_POST['simpan'])){

    $id= $_POST['id'];
    $judul_buku = $_POST['judul_buku'];
    $eksemplar= $_POST['eksemplar'];
    $pengarang= $_POST['pengarang'];

    $sql= "UPDATE tperpus SET judul_buku='$judul_buku', eksemplar='$eksemplar', pengarang='$pengarang' WHERE id=$id";
    $query= mysqli_query($db, $sql);

    if($query){
        header('Location: admin.php');
    } else {
        die('gagal');
    }

}else{
    die("akses dilarang");
}




?>