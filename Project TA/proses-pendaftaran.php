<?php

include("config.php");


if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama_user'];
    $alamat = $_POST['alamat_user'];
    $notelp = $_POST['notelp_user'];

    // buat query
    
    $sql = "INSERT INTO user (nama_user, alamat_user, notelp_user) VALUE ('$nama', '$alamat', '$notelp')";
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