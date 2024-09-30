<?php
$student = [
    [
       'nama' => 'Andi',
       'nilai' => [80, 78, 82, 78, 88], 
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86, 70, 80, 85, 81],
    ],
    [
        'nama' => 'Dani',
        'nilai' => [83, 91, 70, 73, 81],
    ],
    [
        'nama' => 'Eko',
        'nilai' => [89, 85, 84, 86, 88],
    ],
];

$nomor = 1;

foreach ($student as $siswa) { // metode perulangan melalui elemen dlm array, $siswa sebagai variabel sementara
    $total = array_sum($siswa['nilai']); // array_sum utk menghitung jumlah total dri semua elemen
    $jumlah = count($siswa['nilai']); // array utk menghitung jumlah elemen
    $ratarata = $total / $jumlah;

    echo $nomor . ". " . $siswa["nama"] . " = " . $ratarata; // . utk menggabungkan string dgn variabel
    echo "<br>";

    $nomor++; // increment karena menambahkan
}
?>