<?php
class Mahasiswa {
    public $ipk;
    public $nim;
    public $nama;
    public $prodi;
    public $thn_angkatan;

    function __construct($nim, $nama) {
        $this->nim = $nim;
        $this->nama = $nama;
    }

    public function predikat_ipk() {
        if ($this->ipk < 2.0)
            return 'Cukup';
        else if ($this->ipk >= 2.0 && $this->ipk < 3.0)
            return 'Baik';
        else if ($this->ipk >= 3.0 && $this->ipk < 3.75)
            return 'Memuaskan';
        else if($this->ipk >= 3.75)
            return 'Cum Laude';
    }
}