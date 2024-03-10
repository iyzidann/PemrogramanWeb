<?php 

$nilainumerik = 92;

if($nilainumerik >= 90 && $nilainumerik <= 100) {
    echo "Nilai : A","<br>" ; 
} elseif ($nilainumerik >= 80 && $nilainumerik < 90) {
    echo "NIlai : B","<br>";
} elseif ($nilainumerik >= 70 && $nilainumerik < 80) {
    echo "NIlai : C","<br>";
} elseif ($nilainumerik < 70) {
    echo "NIlai : D","<br>";
}
echo "<br>";

$jaraksaatini = 0;
$jaraktarget = 500;
$peningkatanharian = 30;
$hari = 0;

while  ($jaraksaatini < $jaraktarget) {
    $jaraksaatini += $peningkatanharian;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500KM." . "<br>";
echo "<br>";

$jumlahlahan = 10;
$tanamanperlahan = 5;
$buahpertanaman = 10;
$jumlahbuah = 0;

for ($i = 1; $i <= $jumlahlahan; $i++) {
    $jumlahbuah += ($tanamanperlahan * $buahpertanaman);
}

echo "Jumlah Buah yang akan dipanen adalah: $jumlahbuah", "<br>";
echo "<br>";

$skorujian = [85,92,78,96,88];
$totalskor = 0;

foreach ($skorujian as $skor) {
    $totalskor += $skor;
}
echo "Total Skor ujian adalah : $totalskor","<br>";
echo "<br>";

$nilaisiswa = [85,92,58,64,90,55,88,79,79,96];

foreach ($nilaisiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai(Lulus) <br>";
}


?>