<!DOCTYPE html>
<html>
<head>
    <title>Penjualan Modul | KURSUS INGRRIS FLASH</title>
</head>

<body>
    <header>
        <h3>Tambah Penjualan</h3>
    </header>

    <form action="proses-transaksi.php" method="POST">

        <fieldset>
        <input type="hidden" name="id_transaksi" value="<?php echo $transaksi['id_transaksi'] ?>" />
        <p>
            <label for="tanggal_transaksi">Tanggal </label>
            <input type="date" id="tanggal_transaksi" name="tanggal_transaksi" />
        </p>
        <p>
            <label for="total_harga">Harga </label>
            <input type="text" name="total_harga" placeholder="" />
        </p>
        <p>
            <label for="id_user">ID User </label>
            <input type="text" name="id_user" placeholder="" />
        </p>
        <p>
            <input type="submit" value="Tambah" name="tambah" />
            <input type="button" value="Kembali" onclick="history.back(-1)" />
        </p>

        </fieldset>

    </form>

    </body>
</html>