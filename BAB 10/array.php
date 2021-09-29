<?php 
$perabot = ["meja", "kursi", "kulkas"];
echo "isi dari data array " . '$perabot[2]' . " adalah = " . $perabot[2];

$perabot2 = [
	["meja", 80 , "1 M"],
	["kursi", 20, "40 CM"],
	["kulkas", 2, "1 M"]
];
echo "<br>";
echo "Perabot " . $perabot2[0][0] . " memiliki tinggi " . $perabot2[0][1] . " CM dan memiliki lebar " . $perabot2[0][2] . "<br>";
echo "Perabot " . $perabot2[1][0] . " memiliki tinggi " . $perabot2[1][1] . " CM dan memiliki lebar " . $perabot2[1][2] . "<br>";
echo "Perabot " . $perabot2[2][0] . " memiliki tinggi " . $perabot2[2][1] . " M dan memiliki lebar " . $perabot2[2][2] . "<br>";
echo "<br> <br>";

$perabot3 = (object)[
	'objek1' => [
		'nama' => 'meja',
		'tinggi' => 80,
		'lebar' => '1 M'
	],
	'objek2' => [
		'nama' => 'kursi',
		'tinggi' => 20,
		'lebar' => '40 CM'
	],
	'objek3' => [
		'nama' => 'kulkas',
		'tinggi' => 2,
		'lebar' => '1 M'
	]
];
$perabot3->objek1 = (object)$perabot3->objek1;
$perabot3->objek2 = (object)$perabot3->objek2;
$perabot3->objek3 = (object)$perabot3->objek3;

echo "isi dari object '" . '$perabot3->objek1->nama' . "' adalah = {$perabot3->objek1->nama} <br>";
echo "Perabot {$perabot3->objek1->nama} memiliki tinggi {$perabot3->objek1->tinggi} CM dan memiliki lebar {$perabot3->objek1->lebar}<br>";
echo "Perabot {$perabot3->objek2->nama} memiliki tinggi {$perabot3->objek2->tinggi} CM dan memiliki lebar {$perabot3->objek2->lebar}<br>";
echo "Perabot {$perabot3->objek3->nama} memiliki tinggi {$perabot3->objek3->tinggi} M dan memiliki lebar {$perabot3->objek3->lebar}<br>";


?>