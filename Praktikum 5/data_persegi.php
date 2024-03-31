<?php

require_once './persegi.php';

$persegi1 = new PersegiPanjang(5, 10);
$persegi2 = new PersegiPanjang(3, 7);

echo "Luas persegi 1: " . $persegi1->getLuas() . "<br>";
echo "Luas persegi 2: " . $persegi2->getLuas() . "<br>";

echo "Keliling persegi 1: " . $persegi1->getKeliling() . "<br>";
echo "Keliling persegi 2: " . $persegi2->getKeliling() . "<br>";
