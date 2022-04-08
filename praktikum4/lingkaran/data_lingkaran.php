<?php
require_once 'class_lingkaran.php';

echo "Nilai PHI : " . Lingkaran::PHI;
echo "<br><br>";

$lingkaran_1 = new Lingkaran(3);
$lingkaran_2 = new Lingkaran(5);

echo "Nilai jari jari lingkaran 1 : " . $lingkaran_1->jari;
echo "<br>Nilai jari jari lingkaran 2 : " . $lingkaran_2->jari;

echo "<br><br>";

echo "Luas lingkaran 1 : " . $lingkaran_1->getLuas();
echo "<br>Luas lingkaran 2 : " . $lingkaran_2->getLuas();

echo "<br><br>";

echo "Keliling lingkaran 1 : " . $lingkaran_1->getKeliling();
echo "<br>Keliling lingkaran 2 : " . $lingkaran_2->getKeliling();
?>
