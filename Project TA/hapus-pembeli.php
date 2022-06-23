<?php

include("config.php");

if( isset($_GET['id_user']) ){

    // ambil id dari query string
    $id = $_GET['id_user'];

    // buat query hapus
    $sql = "DELETE FROM user WHERE id_user=$id";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list-pembeli.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>