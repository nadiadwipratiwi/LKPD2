<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><center>
    <form action="" method="POST">
        <label for="pertama">Masukan Nama Pertama :</label>
        <input type="text" name="pertama" id="pertama"><br>
        <label for="kedua">Masukan Nama Kedua :</label>
        <input type="text" name="kedua" id="kedua"><br>

        <button type="submit">Klik</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == ("POST")) {
        $nama1 = htmlspecialchars($_POST["pertama"]);
        $nama2 = htmlspecialchars($_POST["kedua"]);

        $totalnama1 = strlen($nama1); // strlen utk menghitung jumlah karakter dlm string
        $totalnama2 = strlen($nama2);

        $selisih = abs($totalnama1 - $totalnama2); // abs utk menghitung nilai absolut

        if ($totalnama1 > $totalnama2) {
            echo "<u>" . htmlspecialchars($nama1) . "</u>" . " memiliki jumlah karakter yang lebih banyak dari " . "<u>" . htmlspecialchars($nama2) . "</u>" . " : " . "selisih " . "<b>" . $selisih . "</b>" . " karakter";
        } else {
            echo "<u>" . htmlspecialchars($nama2) . "</u>" . " memiliki jumlah karakter yang lebih banyak dari " . "<u>" . htmlspecialchars($nama1) . "</u>" . " : " . "selisih " . "<b>" . $selisih . "</b>" . " karakter";
        }
    }
    ?>
</center></body>
</html>