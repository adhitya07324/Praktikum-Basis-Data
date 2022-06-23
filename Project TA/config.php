<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "db_transaksimodulinggris";
 
// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$db = mysqli_connect($server, $user, $password, $database);
// mengecek koneksi
if (!$db) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>