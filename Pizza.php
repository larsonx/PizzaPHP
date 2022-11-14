<?php

if (isset($_POST['submit'])){ 
    $dag = date('l');
    $pizza1 =    $_POST['aantal1'];
    $pizza2 =    $_POST['aantal2'];
    $pizza3 =    $_POST['aantal3'];
    $pizza4 =    $_POST['aantal4'];
    $pizza5 =    $_POST['aantal5'];
    $korting = 0;
    $totaal_prijs = 0;
    $bezorgen = $_POST['select'];
    $bezorgkosten = 5.00;
    $x=0;
   
    if($bezorgen == 'bezorgen'){
        echo "bezorgkosten: €5,00<br>\n";
    
    }elseif($bezorgen == 'afhalen'){
  echo "xd  ";
    }

    function bezorgkosten($x, $bezorgen){
        $totaalprijs = $x =5;
        if($bezorgen == 'bezorgen'){
           echo "bezorgkosten: €5,00<br>\n";
       
       }elseif($bezorgen == 'afhalen'){
     echo "xd  ";
       }
     
     }
     


    if ($dag == 'Monday'){
    $totaal_prijs = ($pizza1 + $pizza2 + $pizza3 + $pizza4 + $pizza5)* 7.50; 
    
    echo "maandag actie:  " . number_format($totaal_prijs,2, ',')."<br>";
    echo "Totaal: €" . number_format($totaal_prijs,2, ',')."<br>";    
    }else{   
        $totaal_prijs += $pizza1*12.50;
        $totaal_prijs += $pizza2*12.50;
        $totaal_prijs += $pizza3*13.95;
        $totaal_prijs += $pizza4*11.50;
        $totaal_prijs += $pizza5*14.50; 
    
        if ($dag == 'Friday' && $totaal_prijs > 20){
            $korting = $totaal_prijs * 0.15;
            
            $totaal_prijs = $totaal_prijs - $korting;
            echo "vrijdag korting €" . number_format($korting,2, ',')."<br>";
            echo "Totaal: €" . number_format($totaal_prijs,2, ',')."<br>";

    }
    }
    if ($dag == 'Tuesday'&& 'Wednesday' && 'Thursday'){
        echo $totaal_prijs;

    }
    
    }

 
?>