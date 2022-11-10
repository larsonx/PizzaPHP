<?php

if (isset($_POST['submit'])){ 
    $dag = date('l');
    $aantal1 = $_POST['aantal1']* 12.50;
    $aantal2 = $_POST['aantal2']* 12.50;
    $aantal3 = $_POST['aantal3']* 13.95;
    $aantal4 = $_POST['aantal4']* 14.50;
    $aantal5 = $_POST['aantal5']* 11.50;
    $total = $aantal1 + $aantal2 + $aantal3 + $aantal4 + $aantal5;
    $total = $total - ($total * (15/100));
    $bezorgkosten  = 5;

if ($dag == 'Monday'){
    $aantal1 = $_POST['aantal1']* 7.50;
    $aantal2 = $_POST['aantal2']* 7.50;
    $aantal3 = $_POST['aantal3']* 7.50;
    $aantal4 = $_POST['aantal4']* 7.50;
    $aantal5 = $_POST['aantal5']* 7.50;
    echo $aantal1 + $aantal2 + $aantal3 + $aantal4 + $aantal5;
    
}
if ($dag == 'Friday' && $total > 20){
    $total = $total - ($total * (15/100));
    echo $total;
}


    



   
    

    






}
?>