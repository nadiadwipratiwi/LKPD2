<?php
    $umur = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];

    $dewasa = 0;
    $anak = 0;

    echo "List usia : ";
    echo implode(", ", $umur);

    foreach($umur as $usia) {
        if($usia >= 17) {
            $dewasa++;
        } else {
            $anak++;
        }
    }
echo "<br>";
echo "Jumlah Kategori Dewasa : " . $dewasa . "<br>";
echo "Jumlah Kategori Anak : " . $anak;
?>