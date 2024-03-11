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
echo "<br><br>";


echo "Soal Cerita no 4.6 <br><br>";

$nilai_siswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilai_siswa);

$nilai_siswa = array_slice($nilai_siswa, 2, -2);
$total_nilai = array_sum($nilai_siswa);
$jumlah_siswa = count($nilai_siswa);
$rata_rata = $total_nilai / $jumlah_siswa;

echo "Daftar nilai siswa: " . implode(", ", $nilai_siswa) . "\n";
echo "<br>";
echo "Total nilai setelah mengabaikan 2 nilai tertinggi dan 2 nilai terendah: " . $total_nilai . "\n";
echo "<br>";
echo "Jumlah siswa: " . $jumlah_siswa . "\n";
echo "<br>";
echo "Rata-rata nilai: " . $rata_rata . "\n";
echo "<br><br>";


echo "Soal Cerita no 4.7 <br><br>";

$harga_produk = 120000;
$batas_diskon = 100000;
$presentase_diskon = 20;

if ($harga_produk > $batas_diskon) {
    $diskon = ($presentase_diskon / 100) * $harga_produk;
} else {
    $diskon =  0;
}

$total_harga = $harga_produk -$diskon;

echo "Harga produk: Rp " . number_format($harga_produk, 0, ',', '.') . "\n";
echo "<br>";
echo "Diskon (" . $presentase_diskon . "%): Rp " . number_format($diskon, 0, ',', '.') . "\n";
echo "<br>";
echo "Total harga setelah diskon: Rp " . number_format($total_harga, 0, ',', '.') . "\n";
echo "<br><br>";

echo "Soal Cerita no 4.8 <br><br>";

$skor_game = [100, 200, 250, 300];

$total_skor = 0;

foreach ($skor_game as $angka) {
    $total_skor += $angka;
}
echo "Total skor pemain adalah $total_skor <br>";
echo "Apakah pemain mendapat hadiah tambahan? ";
$hadiah = ($total_skor > 500)? "Ya" : "Tidak";
echo $hadiah;
?>