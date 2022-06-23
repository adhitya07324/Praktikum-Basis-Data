<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_modul']) ){
    header('Location: list-modul.php');
}

//ambil id dari query string
$idmod = $_GET['id_modul'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM paket_modul WHERE id_modul=$idmod";
$query = mysqli_query($db, $sql);
$modul = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Form Edit Modul | KURSUS INGRRIS FLASH</title>        
</head>

<body>
    <header>
        <h3>Form Edit Modul</h3>
    </header>

    <form action="proses-editmodul.php" method="POST">

        <fieldset>

            <input type="hidden" name="id_modul" value="<?php echo $modul['id_modul'] ?>" />
        <p>
            <label for="stok">Jumlah Stok: </label>
            <input type="text" name="stok_modul" placeholder="" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
            <input type="button" value="Kembali" onclick="history.back(-1)" />
        </p>
        </fieldset>

    </form>

    </body>
</html>