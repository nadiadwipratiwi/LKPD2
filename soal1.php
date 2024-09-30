<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><center>
    <form action="" method="POST">
        <input type="text" name="teks" id="teks" for="teks" placeholder="Masukan Teks">
        <button type="submit">Periksa</button>
    </form>

    <?php
    function cek_angka($teks) {
        $angka = preg_replace('/\D/', '', $teks); // regex('/\D/') utk mengecualian, preg_replace utk mengganti dgn string disebelah
        
        if ($angka) {
            $angkaString = str_split($angka); // utk memecahkan string ke array
            $hasil = "Teks mengandung angka: " . implode(", " , $angkaString); //implode utk memisahkan angka dgn koma
        } else {
            $hasil = "Teks tidak mengandung angka.";
        }
        echo $hasil;
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") { 
        $teks = htmlspecialchars($_POST["teks"]); // mengamankan karakter html/mencegah serangan kode bahaya
        echo "<br>";
        echo cek_angka($teks);
    }
    ?>
</center></body>
</html>



