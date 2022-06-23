<?php

include("config.php");


if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $idtrans = $_POST['id_transaksi'];
    $tanggal = $_POST['tanggal_transaksi'];
    $total = $_POST['total_harga'];
    $id = $_POST['id_user'];

    // buat query
    
    $sql = "UPDATE transaksi SET tanggal_transaksi='$tanggal', total_harga='$total', id_user='$id' WHERE id_transaksi=$idtrans";
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