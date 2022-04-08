<?php 
    // $matakuliah = $_GET["matkul"];
    // $nilai = $_GET["nilai"];
    // $nim = $_GET["nim"];

    // menggunakan penulisan oop
    // class NilaiMahasiswa {
    //    public $matakuliah;
    //    public $nilai; 
    //    protected $nim;

    //    function __construct($matakuliah, $nilai, $nim) {
    //        $this -> matakuliah = $matakuliah;
    //        $this -> nilai = $nilai;
    //        $this -> nim = $nim;
    //    }

    //   public function grade() {
    //             if ($this-> nilai >= 0 && $this-> nilai <= 56) {
    //                 return "TIDAK LULUS !";
    //                 } else {
    //                     return "LULUS !";
    //                 }; 
    //         }

    //    public function hasil() {
    //             if ($this->nilai >= 0 && $this->nilai <= 35) {
    //                 return "E";
    //             } elseif ($this->nilai >= 36 && $this->nilai <= 55) {
    //                 return "D";
    //             } elseif ($this->nilai >= 56 && $this->nilai <= 69) {
    //                 return "C";
    //             } elseif ($this->nilai >= 70 && $this->nilai <= 84) {
    //                 return "B";
    //             } elseif($this->nilai >= 85 && $this->nilai <= 100) {
    //                 return "A";
    //             } else {
    //                 return "itu bukan nilai ma...";
    //             }
    //         }

    //             public function cetak() {
    //                 echo "Nim : " . $this -> matakuliah;
    //                 echo "Mata Kuliah : " . $this -> nilai;
    //                 echo "Nilai : " . $this -> nim;
    //                 echo "Hasil : " . $this -> hasil();
    //                 echo "Grade : " . $this -> grade();
    //             }    
            
    //         }




            // $_GET["submit"] = new NilaiMahasiswa($this -> matakuliah, $this -> nilai, $this -> nim );

            // echo " NIM : " . $_GET["submit"] -> nim;
            // echo "<br>";
            // echo " Matakuliah : " . $_GET["submit"] -> matakuliah;
            // echo "<br>";
            // echo " nilai : " . $_GET["submit"] -> nilai;
            // echo "<br>";
            // echo " Hasil Ujian : " . $_GET["submit"] -> hasil();
            // echo "<br>";
            // echo " Hasil Ujian : " . $_GET["submit"] -> grade();
            
    
//* menggunakan gaya penulisan prosedural

        $matakuliah = $_GET["matkul"];
        $nim = $_GET["nim"];
        $nilai = $_GET["nilai"];
        $submit = $_GET["submit"];

    function hasilujian($nilai) {    
        if ($nilai >= 0 && $nilai <= 35) {
            return  "E";
        } elseif ($nilai >= 36 && $nilai <= 55) {
            return  "D";
        } elseif ($nilai >= 56 && $nilai <= 69) {
            return  "C";
        } elseif ($nilai >= 70 && $nilai <= 84) {
            return  "B";
        } elseif($nilai >= 85 && $nilai <= 100) {
            return  "A";
        } else {
            return  "Tidak ada hasil ujian";
        }
    }   
    $hasilujian = hasilujian($nilai);
 

    function grade($nilai) {
        if ($nilai >= 0 && $nilai <= 56) {
                return "TIDAK LULUS !";
            } elseif ($nilai >= 56 && $nilai <= 100) {
                return "LULUS !";
            }  else {
                return "Grade anda -";
            }
        }
    $grade = grade($nilai);    


    echo "------Hasil-----";
    echo "<br>Proses : " . $submit;
    echo "<br>Nim : " . $nim;
    echo "<br>Matakuliah : " . $matakuliah;
    echo "<br>Nilai : " . $nilai;
    echo "<br>Hasil Ujian : " . $hasilujian;
    echo "<br>Grade : " . $grade;
?>