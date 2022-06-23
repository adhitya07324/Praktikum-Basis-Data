<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
<title>Transaksi Modul Bahasa Inggris | KURSUS INGRRIS FLASH</title>
</head>

<body>
    <header>
        <h3>List Penjualan Modul</h3>
    </header>

    <nav>
        <input type="button" value="Tambah" onclick=top.location="form-transaksi.php" />
        <input type="button" value="Kembali" onclick="history.back(-1)" />
    </nav>

    <br>

    <table align = "center" border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tanggal Transaksi</th>
            <th>Total Harga</th>
            <th>ID User</th>
            <th>Tindakan</th>            

        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM transaksi";
        $query = mysqli_query($db, $sql);

        while($transaksi = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$transaksi['id_transaksi']."</td>";
            echo "<td>".$transaksi['tanggal_transaksi']."</td>";
            echo "<td>".$transaksi['total_harga']."</td>";
            echo "<td>".$transaksi['id_user']."</td>";

            echo "<td>";
            echo "<a href='form-edittransaksi.php?id_transaksi=".$transaksi['id_transaksi']."'>Edit</a> | ";
            echo "<a href='hapus-transaksi.php?id_transaksi=".$transaksi['id_transaksi']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    </body>
</html>