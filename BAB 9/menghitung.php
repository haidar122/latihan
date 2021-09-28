<?php 
define("setengah", 0.5);
define("phi", 3.14);

// Luas Persegi
$sisi1 = 10;
$sisi2 = 10;
$luas = $sisi1 * $sisi2;

// Luas Segitiga
$alas = 10;
$tinggi = 25;
$luas2 = setengah * $alas * $tinggi;

// Luas Trapesium
$panjangA = 10;
$panjangB = 14;
$tinggi = 9;
$luas3 = setengah * ($panjangA + $panjangB) * $tinggi;

// Luas Permukaan Tabung
$alasR = 7;
$tinggiR = 18;
$luas4 = 2 * phi * $alasR * ($alasR + $tinggiR);


// Luas Permukaan lingkaran
$jari2 = 10;
$luas5 = 4 * phi * $jari2 * $jari2;


// Menampilkan hasil
echo "Luas Persegi = " . $luas . "<br/>";
echo "Luas Segitiga = " . $luas2 . "<br/>";
echo "Luas Trapesium = " . $luas3 . "<br/>";
echo "Luas Permukaan Tabung = " . $luas4 . "<br/>";
echo "Luas Permukaan lingkaran = " . $luas5 . "<br/>";


?>