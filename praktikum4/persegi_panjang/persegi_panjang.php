<?php 

    class persegiPanjang {
        const PHI = 2;
        public $panjang;
        public $luas;

        function __construct($panjang, $luas) {
            $this -> panjang = $panjang;
            $this -> luas = $luas;
            
        }

        public function GetLuas() {
            return $this -> panjang * $this -> luas;
        }

        public function GetKeliling() {
            return self::PHI * ($this -> panjang + $this -> luas) ;
        }
    }

?>