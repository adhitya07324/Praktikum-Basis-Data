<?php

include("config.php");


if(isset($_POST['tambah'])){

    // ambil data dari formulir
    $tanggal = $_POST['tanggal_transaksi'];
    $total = $_POST['total_harga'];
    $id = $_POST['id_user'];

    // buat query
    
    $sql = "INSERT INTO transaksi (tanggal_transaksi, total_harga, id_user) VALUE ('$tanggal', '$total', '$id')";
    $query = mysqli_query($db, $sql);
    
    if( $query ) {
        header('Location: list-pembelian.php');
    } else {
        echo "Gagal Memasukan...";
    }

} else {
    die("Akses dilarang...");
}
?>