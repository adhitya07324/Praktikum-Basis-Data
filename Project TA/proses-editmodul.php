<?php

include("config.php");


if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $idmod = $_POST['id_modul'];
    $stok = $_POST['stok_modul'];

    // buat query
    
    $sql = "UPDATE paket_modul SET stok_modul='$stok' WHERE id_modul=$idmod";
    $query = mysqli_query($db, $sql);
    
    if( $query ) {
        header('Location: list-modul.php');
    } else {
        echo "Gagal Memasukan...";
    }

} else {
    die("Akses dilarang...");
}
?>