<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_transaksi']) ){
    header('Location: list-pembelian.php');
}

//ambil id dari query string
$idtrans = $_GET['id_transaksi'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM transaksi WHERE id_transaksi=$idtrans";
$query = mysqli_query($db, $sql);
$transaksi = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Form Edit Pembelian | KURSUS INGRRIS FLASH</title>        
</head>

<body>
    <header>
        <h3>Form Edit Pembelian</h3>
    </header>

    <form action="proses-edittransaksi.php" method="POST">

        <fieldset>

            <input type="hidden" name="id_transaksi" value="<?php echo $transaksi['id_transaksi'] ?>" />

        <p>
            <label for="tanggal">Tanggal: </label>
            <input type="date" id="tanggal_transaksi" name="tanggal_transaksi" />
        </p>
        <p>
            <label for="total">Harga: </label>
            <input type="text" name="total_harga" placeholder="" />
        </p>
        <p>
            <label for="id_user">ID User </label>
            <input type="text" name="id_user" placeholder="" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
            <input type="button" value="Kembali" onclick="history.back(-1)" />
        </p>
        </fieldset>

    </form>

    </body>
</html>