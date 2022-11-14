<?php

if (isset($_POST['submit'])){ 
    $dag = date('l');
    $aantal1 =    $_POST['aantal1'];
    $aantal2 =    $_POST['aantal2'];
    $aantal3 =    $_POST['aantal3'];
    $aantal4 =    $_POST['aantal4'];
    $aantal5 =    $_POST['aantal5'];
    $korting = 0;
    $totaal_prijs = 0;
    $bezorgen = $_POST['select'];

    
    
    if ($dag == 'Monday'){
    $totaal_prijs = ($aantal1 + $aantal2 + $aantal3 + $aantal4 + $aantal5)* 7.50;  

    echo "maandag actie:  " . number_format($totaal_prijs,2, ',')."<br>";
    echo "Te betalen: €" . number_format($totaal_prijs,2, ',')."<br>";    

    }else {
        $totaal_prijs += $aantal1*12.50;
        $totaal_prijs += $aantal2*12.50;
        $totaal_prijs += $aantal3*13.95;
        $totaal_prijs += $aantal4*11.50;
        $totaal_prijs += $aantal5*14.50; 
    
        if ($dag == 'Friday' && $totaal_prijs > 20){
            $korting = $totaal_prijs * 0.15;


            $totaal_prijs = $totaal_prijs - $korting;


    }
    
    echo "vrijdag korting €" . number_format($korting,2, ',')."<br>";
    echo "Totaal: €" . number_format($totaal_prijs,2, ',')."<br>";

}


    
  
  

    
    
    }

 
?>