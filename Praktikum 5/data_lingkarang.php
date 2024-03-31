<?php

require_once './lingkaran.php';

echo "Nilai PHI :" . Lingkaran::PHI;

$lingkaran1 = new Lingkaran(10);
$lingkaran2 = new Lingkaran(7);

echo "<br>";
// Menampilkan Luas Lingkarang
echo "<br>Luas object lingkaran 1" . $lingkaran1->getluas();
echo "<br>Luas object lingkaran 2" . $lingkaran2->getluas();
echo "<br>";
// Menampilkan Keliling Lingkaran
echo "<br>keliling object lingkaran 1" . $lingkaran1->getkeliling();
echo "<br>keliling object lingkaran 2" . $lingkaran2->getkeliling();
