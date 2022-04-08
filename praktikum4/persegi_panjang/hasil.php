<?php 
     require_once "persegi_panjang.php";

     echo "Nilai PHI : " . persegiPanjang::PHI;
     echo "<br><br>";
     
     $panjang_1 = new persegiPanjang(5, 10);
    //  $panjang_2 = new persegiPanjang(6);

     echo "P Persegi Panjang : " . $panjang_1 -> panjang;
     echo "<br>L Persegi Panjang : " . $panjang_1 -> luas;
     
     echo "<br><br>";
     
     echo "Luas Persegi Panjang : " . $panjang_1 -> GetLuas();
     
     echo "<br>";

     echo "Keliling Persegi Panjang : " . $panjang_1 -> GetKeliling();

     
 ?> 