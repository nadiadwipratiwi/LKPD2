    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body><center>
        <form action="" method="POST">
            <label for="datang">Jam Datang :</label>
            <input type="text" name="datang" id="datang"><br>

            <label for="pulang">Jam Pulang :</label>
            <input type="text" name="pulang" id="pulang"><br>
            <button type="submit" name="btn" id="btn">Klik</button>
        </form>

        <?php
        if(isset($_POST['btn'])) {
            $jamdatang = $_POST['datang'];
            $jampulang = $_POST['pulang'];
            $totaljam = $jampulang - $jamdatang;

            $jamnormal = 8;
            $kompensasi = 0;
        
            $lembur = $totaljam - $jamnormal;
            
            if ($lembur > 0) {
                $kompensasi += 50000;
                
                if ($lembur > 1) {
                    $kompensasi += ($lembur - 1) * 25000;
                }
            }
            echo "Lama Kerja : " . ($totaljam);
            echo "<br>";
            echo "Jam lebih : " . ($lembur);
            echo "<br>";
            echo "Jumlah Kompensasi : " . number_format($kompensasi, 0, ',', '.'); //number_format utk memformat angka agar terpisah, 0 utk tdk menampilkan desimal
        }
        ?>
    </center></body>
    </html>
