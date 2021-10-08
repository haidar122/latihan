<?php
$tas =  20000;
$pen =  30000;
$lem =  50000;

$brg = "lem";
$jmlh_beli = 2;
$bayar =  $jmlh_beli * $$brg;

echo "Nama Barang : " . $brg .  "<br>";
echo "Jumlah Barang : " . $jmlh_beli . "<br>";
echo "Total Bayar = " . $bayar . "<br>";
echo "----------------------------------";

switch ($brg) {
	case "lem":
		if ($bayar > 75000) {
			$diskon15 = $bayar * 0.15;
			$diskon20 = $bayar * 0.20;
			if ($diskon20 > $diskon15) {
				$akhirBayar = $bayar - $diskon20;
                echo "<br>";
				echo "Dapat Diskon 20% :" . $diskon20 . "<br>";
				echo "Bayar :" . $akhirBayar . "<br>";
			}else{
				$akhirBayar = $bayar - $diskon15;
				echo "Dapat Diskon 15% :" . $diskon15 . "<br>";
				echo "Bayar :" . $akhirBayar . "<br>";
			}
		}else{
            echo "<br>";
			echo "tidak dapat diskon <br>";
            echo "Bayar : " . $bayar . "<br>";
		}
		break;
}

?>