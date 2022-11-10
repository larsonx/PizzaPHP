<?php



if (isset($_POST['submit'])){ 
    $dag = date('l');
    $aantal1 = $_POST['aantal1']* 12.50;
    $aantal2 = $_POST['aantal2']* 12.50;
    $aantal3 = $_POST['aantal3']* 13.95;
    $aantal4 = $_POST['aantal4']* 14.50;
    $aantal5 = $_POST['aantal5']* 11.50;
    $bezorgkosten  = 5;
    $maandag = 0;

if ($dag == 'Monday'){
    $aantal1 = $_POST['aantal1']* 7.50;
    $aantal2 = $_POST['aantal2']* 7.50;
    $aantal3 = $_POST['aantal3']* 7.50;
    $aantal4 = $_POST['aantal4']* 7.50;
    $aantal5 = $_POST['aantal5']* 7.50;
  
}
if ($dag == 'Friday'){

    
}
     
    



   
    

    






}
?>