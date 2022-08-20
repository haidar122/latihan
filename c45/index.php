<?php
require_once 'koneksi.php';

$query = "SELECT * FROM dtraining";
$dtraining =  mysqli_query($conn, $query);


function getDistinct($atribut)
{
  global $conn;
  $query = "SELECT DISTINCT $atribut FROM dtraining";
  $dump = mysqli_query($conn, $query);
  foreach ($dump as $k => $v) {
    $data[] =  $v[$atribut];
  }
  return $data;
}
function getData($where = '')
{

  global $conn;
  $query = "SELECT * FROM dtraining $where";
  $data = mysqli_query($conn, $query)->num_rows;

  return $data;
}
function getEntropy($total, $totalY, $totalN)
{
  $hitung = round(((-$totalY / $total) * log($totalY / $total, 2)) + ((-$totalN / $total) * log($totalN / $total, 2)), 10);
  if (is_nan($hitung)) {
    $hitung = 0;
  }
  return $hitung;
}
$nilaiAtt['outlook'] = getDistinct('outlook');
$nilaiAtt['temperature'] = getDistinct('temperature');
$nilaiAtt['humidity'] = getDistinct('humidity');
$nilaiAtt['windy'] = getDistinct('windy');
$nilaiAtt['play'] = getDistinct('play');

$total = getdata();
$totalY = getdata('WHERE PLAY = \'yes\'');
$totalN = getdata('WHERE PLAY = \'no\'');
$Entropy = getEntropy($total, $totalY, $totalN);

$totalSunny = getdata('WHERE OUTLOOK = \'sunny\'');
$totalSunnyY = getdata('WHERE PLAY = \'yes\' AND OUTLOOK = \'sunny\'');
$totalSunnyN = getdata('WHERE PLAY = \'no\' AND OUTLOOK = \'sunny\'');
$EntropySunny = getEntropy($totalSunny, $totalSunnyY, $totalSunnyN);

$totalOvercast = getdata('WHERE OUTLOOK = \'overcast\'');
$totalOvercastY = getdata('WHERE PLAY = \'yes\' AND OUTLOOK = \'overcast\'');
$totalOvercastN = getdata('WHERE PLAY = \'no\' AND OUTLOOK = \'overcast\'');
$EntropyOvercast = getEntropy($totalOvercast, $totalOvercastY, $totalOvercastN);

$totalRain = getdata('WHERE OUTLOOK = \'rain\'');
$totalRainY = getdata('WHERE PLAY = \'yes\' AND OUTLOOK = \'rain\'');
$totalRainN = getdata('WHERE PLAY = \'no\' AND OUTLOOK = \'rain\'');
$EntropyRain = getEntropy($totalRain, $totalRainY, $totalRainN);

$GainOutlook = ($Entropy) - (($totalSunny / $total) * $EntropySunny) - (($totalOvercast / $total) * $EntropyOvercast) - (($totalRain / $total) * $EntropyRain);

$totalHot = getdata('WHERE TEMPERATURE = \'Hot\'');
$totalHotY = getdata('WHERE PLAY = \'yes\' AND TEMPERATURE = \'Hot\'');
$totalHotN = getdata('WHERE PLAY = \'no\' AND TEMPERATURE = \'Hot\'');
$EntropyHot = getEntropy($totalHot, $totalHotY, $totalHotN);

$totalMild = getdata('WHERE TEMPERATURE = \'Mild\'');
$totalMildY = getdata('WHERE PLAY = \'yes\' AND TEMPERATURE = \'Mild\'');
$totalMildN = getdata('WHERE PLAY = \'no\' AND TEMPERATURE = \'Mild\'');
$EntropyMild = getEntropy($totalMild, $totalMildY, $totalMildN);

$totalCool = getdata('WHERE TEMPERATURE = \'Cool\'');
$totalCoolY = getdata('WHERE PLAY = \'yes\' AND TEMPERATURE = \'Cool\'');
$totalCoolN = getdata('WHERE PLAY = \'no\' AND TEMPERATURE = \'Cool\'');
$EntropyCool = getEntropy($totalCool, $totalCoolY, $totalCoolN);

$GainTemperature = ($Entropy) - (($totalHot / $total) * $EntropyHot) - (($totalMild / $total) * $EntropyMild) - (($totalCool / $total) * $EntropyCool);

$totalHigh = getdata('WHERE HUMIDITY = \'High\'');
$totalHighY = getdata('WHERE PLAY = \'yes\' AND HUMIDITY = \'High\'');
$totalHighN = getdata('WHERE PLAY = \'no\' AND HUMIDITY = \'High\'');
$EntropyHigh = getEntropy($totalHigh, $totalHighY, $totalHighN);

$totalNormal = getdata('WHERE HUMIDITY = \'Normal\'');
$totalNormalY = getdata('WHERE PLAY = \'yes\' AND HUMIDITY = \'Normal\'');
$totalNormalN = getdata('WHERE PLAY = \'no\' AND HUMIDITY = \'Normal\'');
$EntropyNormal = getEntropy($totalNormal, $totalNormalY, $totalNormalN);

$GainHumidity = ($Entropy) - (($totalHigh / $total) * $EntropyHigh) - (($totalNormal / $total) * $EntropyNormal);

$totalWeak = getdata('WHERE Windy = \'Weak\'');
$totalWeakY = getdata('WHERE PLAY = \'yes\' AND Windy = \'Weak\'');
$totalWeakN = getdata('WHERE PLAY = \'no\' AND Windy = \'Weak\'');
$EntropyWeak = getEntropy($totalWeak, $totalWeakY, $totalWeakN);

$totalStrong = getdata('WHERE Windy = \'Strong\'');
$totalStrongY = getdata('WHERE PLAY = \'yes\' AND Windy = \'Strong\'');
$totalStrongN = getdata('WHERE PLAY = \'no\' AND Windy = \'Strong\'');
$EntropyStrong = getEntropy($totalStrong, $totalStrongY, $totalStrongN);

$GainWindy = ($Entropy) - (($totalWeak / $total) * $EntropyWeak) - (($totalStrong / $total) * $EntropyStrong);

$test = "This is a string";

// Function that returns the variable name
function getVariavleName($var)
{
  foreach ($GLOBALS as $varName => $value) {
    if ($value === $var) {
      return $varName;
    }
  }
  return;
}
$max = max($GainOutlook, $GainTemperature, $GainHumidity, $GainWindy);

$Outlook = "label";
$Temperature = "label";
$Humidity = "label";
$Windy = "label";

if ($max) {
  $varName = getVariavleName($max);
  $varName = "c" . substr("GainOutlook", 4);
  $$varName = "colored";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>C.45</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>

  <body style="font-family:arial">
    <div id="form" class="pt-5">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col col-8 p-4 bg-light">
            <h2 class="text-center">DM - C45</h2>
            <hr>
            <h4 class="text-center">Maulana Haidar | 2019503005</h4>

            <table class="table table-responsive table-striped w-25 table-bordered">
              <tr>
                <th>#</th>
                <th>outlook</th>
                <th>temperature</th>
                <th>humidity</th>
                <th>windy</th>
                <th>play</th>
              </tr>
              <?php foreach ($dtraining as $k => $v) { ?>
                <tr>
                  <td><?= $k + 1; ?></td>
                  <td><?= $v['outlook']; ?></td>
                  <td><?= $v['temperature']; ?></td>
                  <td><?= $v['humidity']; ?></td>
                  <td><?= $v['windy']; ?></td>
                  <td><?= $v['play']; ?></td>

                </tr>
              <?php } ?>
            </table>
            <form method="post" action="">
              <button type="submit" name="hitung" value="hitung" class="btn btn-primary">hitung</button>
            </form>
            <br><br>
            <hr>
          </div>
        </div>
      </div>
    </div>

    <div></div>

    <div class="container">
      <div class="row justify-content-center">
        <h2 class="text-center">Hasil</h2>
        <?php

        if (isset($_POST['hitung'])) {
          echo "<div class=\"col-auto\">
      <table class=\"table table-responsive table-striped w-25 table-bordered\">
      <tr>
        <th>Atribut</th>
        <th>Nilai</th>
        <th>Jumlah Kasus</th>
        <th>Yes</th>
        <th>No</th>
        <th>Entropy</th>
        <th>Gain</th>
      </tr>
      <tr>
        <td>Total</td>
        <td></td>
        <td> $total </td>
        <td> $totalY </td>
        <td> $totalN </td>
        <td> $Entropy </td>
      </tr>
      <tr>
        <td class=' $Outlook '>Outlook</td>
        <td class=' $Outlook '></td>
        <td class=' $Outlook '></td>
        <td class=' $Outlook '></td>
        <td class=' $Outlook '></td>
        <td class=' $Outlook '></td>
        <td class=' $Outlook '> $GainOutlook </td>
      </tr>";
          foreach ($nilaiAtt['outlook'] as $k => $v) {
            $var = "total" . $v;
            $varY = "total" . $v . "Y";
            $varN = "total" . $v . "N";
            $varE = "Entropy" . $v;
            echo "<tr>
            <td></td>
            <td> $v </td>
            <td> {$$var} </td>
            <td> {$$varY} </td>
            <td> {$$varN} </td>
            <td> {$$varE} </td>
          </tr>";
          }
          echo "
      <tr>
        <td class=' $Temperature '>Temperature</td>
        <td class=' $Temperature '></td>
        <td class=' $Temperature '></td>
        <td class=' $Temperature '></td>
        <td class=' $Temperature '></td>
        <td class=' $Temperature '></td>
        <td class=' $Temperature '> $GainTemperature </td>
      </tr>";
          foreach ($nilaiAtt['temperature'] as $k => $v) {
            $var = "total" . $v;
            $varY = "total" . $v . "Y";
            $varN = "total" . $v . "N";
            $varE = "Entropy" . $v;
            echo "<tr>
          <td></td>
          <td> $v </td>
          <td> {$$var} </td>
          <td> {$$varY} </td>
          <td> {$$varN} </td>
          <td> {$$varE} </td>
        </tr>";
          }
          echo "
    <tr>
      <td class=' $Humidity '>Humidity</td>
      <td class=' $Humidity '></td>
      <td class=' $Humidity '></td>
      <td class=' $Humidity '></td>
      <td class=' $Humidity '></td>
      <td class=' $Humidity '></td>
      <td class=' $Humidity '> $GainHumidity </td>
    </tr>";
          foreach ($nilaiAtt['humidity'] as $k => $v) {
            $var = "total" . $v;
            $varY = "total" . $v . "Y";
            $varN = "total" . $v . "N";
            $varE = "Entropy" . $v;
            echo "<tr>
      <td></td>
      <td> $v </td>
      <td></td>
        <td> {$$var} </td>
        <td> {$$varY} </td>
        <td> {$$varN} </td>
        <td> {$$varE} </td>
      </tr>";
          }
          echo "
      <tr>
        <td class=' $Windy '>Windy</td>
        <td class=' $Windy '></td>
        <td class=' $Windy '></td>
        <td class=' $Windy '></td>
        <td class=' $Windy '></td>
        <td class=' $Windy '></td>
        <td class=' $Windy '> $GainWindy </td>
      </tr>";
          foreach ($nilaiAtt['windy'] as $k => $v) {
            $var = "total" . $v;
            $varY = "total" . $v . "Y";
            $varN = "total" . $v . "N";
            $varE = "Entropy" . $v;
            echo "<tr>
        <td></td>
        <td> $v </td>
        <td></td>
        <td> {$$var}</td>
        <td> {$$varY} </td>
        <td> {$$varN}</td>
        <td> {$$varE}</td>
      </tr>";
          }
          echo "

      </table>
      </div>";
        } ?>
      </div>
    </div>
  </body>

</html>