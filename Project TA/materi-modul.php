<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
<title>Materi Bahasa Inggris | KURSUS INGRRIS FLASH</title>
</head>

<body>
    <header>
        <h3>Bahasan Modul</h3>
    </header>

    <nav>
        <input type="button" value="Kembali" onclick="history.back(-1)" />
    </nav>

    <br>

    <table align = "center" border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Materi</th>           

        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM materi";
        $query = mysqli_query($db, $sql);

        while($materi = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$materi['id_materi']."</td>";
            echo "<td>".$materi['nama_materi']."</td>";

            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    </body>
</html>