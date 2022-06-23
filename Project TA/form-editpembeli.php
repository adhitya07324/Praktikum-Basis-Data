<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_user']) ){
    header('Location: list-pembeli.php');
}

//ambil id dari query string
$id = $_GET['id_user'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM user WHERE id_user=$id";
$query = mysqli_query($db, $sql);
$user = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Form Edit Pembeli | KURSUS INGRRIS FLASH</title>        
</head>

<body>
    <header>
        <h3>Form Edit Pembeli</h3>
    </header>

    <form action="proses-editpembeli.php" method="POST">

        <fieldset>

            <input type="hidden" name="id_user" value="<?php echo $user['id_user'] ?>" />

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
            <input type="submit" value="Simpan" name="simpan" />
            <input type="button" value="Kembali" onclick="history.back(-1)" />
        </p>
        </fieldset>

    </form>

    </body>
</html>