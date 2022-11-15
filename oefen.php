<?php
$te = "maken voor bezorgkosten";



function bezorgkostenmaandag($x, $bezorgen, $pizza1,$pizza2,$pizza3,$pizza4,$pizza5){
        
  if($bezorgen == 'bezorgen'){
      $totaalprijs = $x;
      $x = ($pizza1 + $pizza2 + $pizza3 + $pizza4 + $pizza5)* 7.50 +5;     
   echo "Maandag zijn alle Pizza's €7,50"."<br>";
   echo "Bezorgkosten €5,00"."<br>";   
   echo "Totaal:  "."€". number_format($x,2, ',')."<br>";;
 }elseif($bezorgen == 'afhalen'){
  echo   $x = ($pizza1 + $pizza2 + $pizza3 + $pizza4 + $pizza5)* 7.50; 
 }

}









?>