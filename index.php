<?php



if (isset($_POST['submit'])){ 
     
    $p1 = $_POST['quantity1']* 12.50;
    $p2 = $_POST['quantity2']* 12.50;
    $p3 = $_POST['quantity3']* 13.95;
    $p4 = $_POST['quantity4']* 14.50;
    $p5 = $_POST['quantity5']* 11.50;
    

    
    $cost=$p1 + $p2;
    echo "$cost";

    







}








?>