<?php

class NilaiMahasiswa
{
    var $matakuliah;
    var $nilai;
    var $nim;

    function __construct($matkul, $nilai, $nim)
    {
        $this->matakuliah = $matkul;
        $this->nilai = $nilai;
        $this->nim = $nim;
    }

    function grade()
    {
        if ($this->nilai >= 85 && $this->nilai <= 100) {
            return 'A';
        } elseif ($this->nilai >= 70 && $this->nilai <= 84) {
            return 'B';
        } elseif ($this->nilai >= 56 && $this->nilai <= 69) {
            return 'C';
        } elseif ($this->nilai >= 36 && $this->nilai <= 55) {
            return 'D';
        } else {
            return 'E';
        }
    }

    function hasil()
    {
        if ($this->nilai >= 56) {
            return 'Lulus';
        } else {
            return 'Tidak Lulus';
        }
    }
}
