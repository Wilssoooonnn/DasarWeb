<?php

function hitungUmur($thnLhr, $thnSkrg)
{
    $umur = $thnSkrg - $thnLhr;
    return $umur;
}
function perkenalan($nama, $salam = "Assalamualaikum")
{
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br>";

    echo "Saya berusia " . hitungUmur(1988, 2023) . " tahun <br>";
    echo "Senang berkenalan dengan Anda <br>";
}

perkenalan("Elok");
