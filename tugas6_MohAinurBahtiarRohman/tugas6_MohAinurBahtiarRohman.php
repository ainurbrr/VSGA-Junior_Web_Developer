<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6 VSGA</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<?php

$bil1 =$_GET["bil1"];
$bil2 =$_GET["bil2"];

function Penjumlahan($a, $b)
{
    return $a+$b;
}

function Pengurangan($a, $b)
{
    return $a-$b;
}
function Pembagian($a, $b)
{
    return $a/$b;
}

function Perkalian($a, $b)
{
    return $a*$b;
}

?>
<section id="i5oq1" class="container">
  <div id="ivk7p" class="gpd-container">
    <div id="imf4i" class="gdp-row">
      <div id="i047o" data-anim-type="fadeInDown" class="cell">
        <div id="ijh0h" class="row">
          <div id="ial4t" class="cell">
            <h1 class="gpd-header">Kalkulator Sederhana
            </h1>
            <form method="get" class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <div class="form-group">
                <label id="ig74n" data-anim-type="fadeIn" class="label">Bilangan 1&nbsp;</label>
                <input type="text" placeholder="Masukkan angka ke 1" name="bil1" id="iz7g1" data-anim-type="fadeIn" class="input"/>
              </div>
              <div class="form-group">
                <label id="ivvrc" data-anim-type="fadeIn" class="label">Bilangan 2&nbsp;</label>
                <input type="text" placeholder="Masukkan angka ke 2" name="bil2" id="ibwjl" data-anim-type="fadeIn" class="input"/>
              </div>
              <div data-form-state="success" class="state-success" id="irity">Thanks! We received your request
              </div>
              <div data-form-state="error" class="state-error" id="i9gcr">An error occurred on processing your request, try again!
              </div>
              <div class="form-group">
                <button type="submit" id="icimi" data-anim-type="fadeIn" class="button">Hitung</button>
              </div>
            </form>
            <div id="ipx8t" data-anim-type="fadeIn" class="gpd-text">Hasil Penjumlahan adalah : <?php echo Penjumlahan($bil1,$bil2)?>
              <br>Hasil Pengurangan adalah : <?php echo Pengurangan($bil1,$bil2)?>
              <br>Hasil Perkalian adalah : <?php echo Perkalian($bil1,$bil2)?>
              <br>Hasil Pembagian adalah : <?php echo Pembagian($bil1,$bil2)?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>

