<?php
$discount_amount = 15;
$total = ($discount_amount/100);

echo $total;
     



if($bezorgen == "bezorgen"){
    
   echo "bezorgen €" . number_format($aantal1 + $aantal2 + $aantal3 + $aantal4 + $aantal5 +5,2, ',');
}else{
   echo "afhalen €" . number_format($aantal1 + $aantal2 + $aantal3 + $aantal4 + $aantal5 ,2, ',');
} 

?>



