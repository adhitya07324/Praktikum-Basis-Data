<?php

include("config.php");


if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id_user'];
    $nama = $_POST['nama_user'];
    $alamat = $_POST['alamat_user'];
    $notelp = $_POST['notelp_user'];

    // buat query
    
    $sql = "UPDATE user SET nama_user='$nama', alamat_user='$alamat', notelp_user='$notelp' WHERE id_user=$id";
    $query = mysqli_query($db, $sql);
    
    if( $query ) {
        header('Location: list-pembeli.php');
    } else {
        echo "Gagal Memasukan...";
    }

} else {
    die("Akses dilarang...");
}
?>