<?php
    $totalUang = 140500;
    $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100];
    $hasil = [];
    echo "Uang : Rp. " . number_format($totalUang, 0, ',', '.') . "<br>";

    foreach ($pecahan as $lembar) {
        $jumlahLembar = floor($totalUang / $lembar); //floor utk membulatkan angka desimal

        if ($jumlahLembar > 0) {
            $hasil[$lembar] = $jumlahLembar;
            $totalUang -= $lembar * $jumlahLembar;
        }
    }

    echo "Lembar rupiah :<br>";

    foreach ($hasil as $lembar => $jumlahLembar) {
        echo "Rp. " . number_format($lembar, 0, ',', '.') . " : " . $jumlahLembar . "<br>";
    }
?>