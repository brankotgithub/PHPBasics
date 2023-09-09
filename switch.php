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
        $day = 30;
        $month = 11;
        $dayOfCurrentMonth;
        /*
         switch(expresion){
          
          case expresionValue:
            block code to be executed;
            break;
         case expresionValue:
            block code to be executed;
            break;
         default :
            block code to be executed;
            break; 
         
          
        } 
        
         */
        
        switch ($month) {
            case 1:
                $dayOfCurrentMonth = 31;
                break;
            case 2:
                $dayOfCurrentMonth = 28;
                break;
            case 3:
                $dayOfCurrentMonth = 31;
                break;
            case 4:
                $dayOfCurrentMonth = 30;
                break;
            case 5:
                $dayOfCurrentMonth = 31;
                break;
            case 6:
                $dayOfCurrentMonth = 30;
                break;
            case 7:
                $dayOfCurrentMonth = 31;
                break;
            case 8:
                $dayOfCurrentMonth = 31;
                break;
            case 9:
                $dayOfCurrentMonth = 30;
                break;
            case 10:
                $dayOfCurrentMonth = 31;
                break;
            case 11:
                $dayOfCurrentMonth = 30;
                break;
            case 12:
                $dayOfCurrentMonth = 31;
                break;
            default:
                echo "Please provide valid entry for month";
                die();
                break;
                
        }
        
        if($day > $dayOfCurrentMonth || $day < 1){
            echo "Please entry valid day";
        }else{
            echo 'Entry is correct';
        }
        
        
        
        
        
        
        ?>
    </body>
</html>
