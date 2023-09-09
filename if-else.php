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
        
        $temperature = 6;
        
        /*
         if(condition){
          block code to be executed  if condition is TRUE
        }
         */
        if($temperature > 25){
            
            echo 'It is warm day.';
        }
        
        if($temperature <= 25){
            echo "It is cold day.";
        }
        
        
        /*
         if(condition){
          block code to be executed if condition is TRUE
         }
          else{
         block code to be executed if condition is FALSE
         }
         */
        
        ?>
        <hr>
        <?php
        
        if($temperature > 25){
            echo 'It is warm day.';
        }else{
            echo 'Iti is cold day';
        }
        
        
        /*
         if(condition1){
            block code to  be executed if condition1 is true
         }
          else if( condition2){
         block code to  be executed if condition1 is false condition2 is true
         }
         else{
         block code to  be executed if condition1 is false condition2 is false
         }
         */
        ?>
        
        <hr>
        <?php
        
        if($temperature > 30){
            echo "It is warm day";
        }else if($temperature > 15){
            echo "It is nice day";
        }else if($temperature > 5){
            echo "It is cold day";
        }else{
            echo 'It is  freezing day';
        }
        
        
       /*
        if(condition){
         
            if(){
                
        }
        }
        */
        
        ?>
    </body>
</html>
