<?php

function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalkan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";

    //memanggil fungsi lain
    echo "Saya berusia ". hitungUmur(2003, 2024) ." tahun<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

//memanggil fungsi yang sudah dibuat
//perkenalkan("Iyazuz","Hallo");

$saya = "Zidan";
$ucapanSalam = "Selamat pagi";

//memanggil lagi
perkenalkan($saya);

echo "<hr>";
?>