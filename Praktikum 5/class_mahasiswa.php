<?php

class Mahasiswa
{
    var $ipk;
    var $name;
    var $nim;
    var $prodi;
    var $thn_angkatan;

    // Properti
    function __construct($nim, $name)
    {
        $this->nim = $nim;
        $this->name = $name;
    }

    // Method
    function predikat_ipk()
    {
        if ($this->ipk < 2.0) {
            return "Cukup";
        } else if ($this->ipk < 3.0) {
            return "Baik";
        } else if ($this->ipk < 3.75) {
            return "Memuaskan";
        } else {
            return "Cumlaude";
        }
    }
}
