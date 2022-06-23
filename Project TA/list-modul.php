<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
<title>Modul Bahasa Inggris | KURSUS INGRRIS FLASH</title>
</head>

<body>
    <header>
        <h3>Rincian Modul</h3>
    </header>

    <nav>
        <input type="button" value="Kembali" onclick="history.back(-1)" />
    </nav>

    <br>

    <table align = "center" border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Modul</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Tindakan</th>            

        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM paket_modul";
        $query = mysqli_query($db, $sql);

        while($modul = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$modul['id_modul']."</td>";
            echo "<td>".$modul['nama_modul']."</td>";
            echo "<td>".$modul['harga_modul']."</td>";
            echo "<td>".$modul['stok_modul']."</td>";

            echo "<td>";
            echo "<a href='form-editmodul.php?id_modul=".$modul['id_modul']."'>Edit</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    </body>
</html>