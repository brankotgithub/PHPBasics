<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        
        function displayNumber(){
            $number = 100; // local variable
            echo $number;
            echo '<br>';
            
        }
        
        
        displayNumber();
        
        
        //echo $number;
        
        
        $currentNumber = 10;
        
        function displayNextNumber($number){
            
            $nextNumber = $number + 1;
            echo $nextNumber;
            echo '<br>';
        }
        
        
        displayNextNumber($currentNumber);
        
        
        echo $currentNumber;
        
        
        
        ?>
    </body>
</html>
