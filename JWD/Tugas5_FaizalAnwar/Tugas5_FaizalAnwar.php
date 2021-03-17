     <style>
   div{
     width: 150px;
     border-bottom: double;
   }
</style>

 <?php

    
    echo "Bilangan 1 : 9";
    echo "<br>";
    echo "Bilangan 2 : 3";
    echo "<br><br>";
    echo "<div></div>";
    echo "<br><br>";
    
    $a = 9;
    $b = 3;
    tambah($a,$b);
    kurang($a,$b);
    kali($a,$b);
    bagi($a,$b);
    function tambah($a,$b){
        $total = "Hasil Penjumlahan adalah ".  $a + $b ;
        echo $total;
        echo "<br>";
    }
    function kurang($a,$b){
        $total = "Hasil Pengurangan adalah ".  $a - $b ;
        echo $total;
        echo "<br>";
    }
      
    function kali($a,$b){
        $total = "Hasil Perkalian adalah ".  $a * $b ;
        echo $total;
        echo "<br>";
    }
      
    function bagi($a,$b){
        $total = "Hasil Pembagian adalah ".  $a / $b ;
        echo $total;
        echo "<br>";
    }


?>

 </body>
 </html>
 