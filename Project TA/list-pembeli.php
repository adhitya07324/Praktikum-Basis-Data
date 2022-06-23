<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
<title>Pembeli Modul | KURSUS INGRRIS FLASH</title>
</head>

<body>
    <header>
        <h3>List Pembeli Modul</h3>
    </header>

    <nav>
        <input type="button" value="Tambah" onclick=top.location="form-pembeli.php" />
        <input type="button" value="Kembali" onclick="history.back(-1)" />
    </nav>

    <br>

    <table align = "center" border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Nomer Telpon</th>
            <th>Tindakan</th>            

        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM user";
        $query = mysqli_query($db, $sql);

        while($user = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$user['id_user']."</td>";
            echo "<td>".$user['nama_user']."</td>";
            echo "<td>".$user['alamat_user']."</td>";
            echo "<td>".$user['notelp_user']."</td>";

            echo "<td>";
            echo "<a href='form-editpembeli.php?id_user=".$user['id_user']."'>Edit</a> | ";
            echo "<a href='hapus-pembeli.php?id_user=".$user['id_user']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    </body>
</html>