<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil penjumlahan $a dan $b adalah $hasilTambah <br>";
echo "Hasil pengurangan $a dan $b adalah $hasilKurang <br>";
echo "Hasil perkalian $a dan $b adalah $hasilKali <br>";
echo "Hasil pembagian $a dan $b adalah $hasilBagi <br>";
echo "Hasil sisa bagi $a dan $b adalah $sisaBagi <br>";
echo "Hasil pangkat $a dan $b adalah $pangkat <br>";


echo "<br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil sama dengan $a dan $b adalah $hasilSama <br>";
echo "Hasil tidak sama dengan $a dan $b adalah $hasilTidakSama <br>";
echo "Hasil kurang dari $a dan $b adalah $hasilLebihKecil <br>";
echo "Hasil lebih dari $a dan $b adalah $hasilLebihBesar <br>";
echo "Hasil kurang dari sama dengan $a dan $b adalah $hasilLebihKecilSama <br>";
echo "Hasil lebih dari sama dengan $a dan $b adalah $hasilLebihBesarSama <br>";

echo "<br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND $a dan $b adalah $hasilAnd <br>";
echo "Hasil OR $a dan $b adalah $hasilOr <br>";
echo "Hasil NOT $a adalah $hasilNotA <br>";
echo "Hasil NOT $b adalah $hasilNotB <br>";

echo "<br><br>";

$a += $b;
echo "Hasil dari a += b : $a<br>";
$a -= $b;
echo "Hasil dari a -= b : $a<br>";
$a *= $b;
echo "Hasil dari a *= b : $a<br>";
$a /= $b;
echo "Hasil dari a /= b : $a<br>";
$a %= $b;
echo "Hasil dari a %= b : $a<br>";

echo "<br><br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil identik $a dan $b adalah $hasilIdentik <br>";
echo "Hasil tidak identik $a dan $b adalah $hasilTidakIdentik <br>";

echo "<br><br>";

$totalKursi = 45;
$kursiDitempati = 28;

$presentasiKursiTersedia = ($kursiDitempati / $totalKursi) * 100;

echo "Presentasi kursi tersedia: $presentasiKursiTersedia %<br>";

