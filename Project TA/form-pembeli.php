<!DOCTYPE html>
<html>
<head>
    <title>Pembelian Modul | KURSUS INGRRIS FLASH</title>
</head>

<body>
    <header>
        <h3>Tambah Pembeli</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama_user" placeholder="" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <input type="text" name="alamat_user" placeholder="" />
        </p>
        <p>
            <label for="notelp">Nomer Telpon: </label>
            <input type="text" name="notelp_user" placeholder="" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
            <input type="button" value="Kembali" onclick="history.back(-1)" />
        </p>

        </fieldset>

    </form>

    </body>
</html>