<?php

include("config.php");

if( isset($_GET['id_transaksi']) ){

    // ambil id dari query string
    $idtrans = $_GET['id_transaksi'];

    // buat query hapus
    $sql = "DELETE FROM transaksi WHERE id_transaksi=$idtrans";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list-pembelian.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>