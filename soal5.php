<?php
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$kel1 = array_intersect($bil1, $bil2); // mencari nilai yang sama di 2 array
$kel2 = array_diff($bil1, $bil2); // mencari nilai yang beda di 2 array

echo "Bilangan yang ada di kedua variabel <br>" . implode(", " , $kel1) . "<br>";
echo "Bilangan yang tidak ada di kedua variabel <br>" . implode(", " , $kel2) . "<br>";
?>