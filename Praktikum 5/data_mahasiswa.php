<?php

require_once './class_mahasiswa.php';

$faiz = new Mahasiswa('02011', 'Faiz Fikri');
$alissa = new Mahasiswa('02012', 'Alisa Khairunisa');
$hamilton = new Mahasiswa('01012', 'Lewis Hamilton');

$faiz->prodi = "TI";
$faiz->thn_angkatan = "2012";
$faiz->ipk = 3.0;
