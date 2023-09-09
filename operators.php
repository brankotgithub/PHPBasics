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
        
        $firstName = "Vladan"; // string
        $lastName = "Dzulovic"; //string
        $age = "35";  //string
        
        $x = 10;
        $y = 20;
        $z = 35;
        $p = 40;
        $t = 35;
        
        /*
        ARITHMETICAL OPERATORS
         
         
         1. MATH OPERATORS
         +, -, *, /. (, )

          */
        $sum = $x + $y;
        echo $sum;
        ?>
        <hr>
        <?php
        
        $substruction = $z - $x;
        echo $substruction;
        ?>
        <hr>
        <?php
        $multiplication = $x * $y;
        echo $multiplication;
        
        ?>
        <hr>
        
        <?php
        $division = $y / $x;
        echo $division;
        
        ?>
        <hr>
        <?php
        
        $result = ($x + $y) * $z;
        
        echo $result;
        ?>
        <hr>
        <?php
        $test = $age * 10;
        
        echo $test;
        
        
        
        //SHORT MATH OPERATORI
        // +=, -=, *=, /=
        ?>
        <hr>
        <?php
        
        //$x = $x + 5;
        $x += 5;
        echo $x;
        
        $y -= 5;
        
        $z *=5;
        
        
        $p /= 5;
        
        ?>
        <hr>
        <?php
        //echo $y;
        
        //echo $z;
        
        //echo $p;
        
        
        
        
        //  UNARY OPERATORS
        
        // ++, --
        
        
        //$x += 1;
        
        echo ++$x;
        echo $x;
        
        ?>
        <hr>
        <?php
        echo --$y;
        
        
        // MODULUS - REMAINDER
        // %
        
        ?>
        <hr>
        <?php
        echo $x % $y;
       
        
        // COMPARISON OPERATORS
        // ==, ===, !=, !==, > , < , >=, <=
        
        ?>
        
        <hr>
        <?php
        var_dump($age == $t);
        var_dump($age === $t);
        var_dump($age != $t);
        
        var_dump($age !== $t);
        
        ?>
        <hr>
        <?php
        //var_dump($x > $t);
        var_dump($x < $t);
        
        
        
        // LOGICAL OPERATORS
        // && , ||
        
        ?>
        <hr>
        <?php
        
        //var_dump($x > 20 && $x < 10);
        
        var_dump( ($x > 20) || ($x < 18));
        
        
        // sting operator 
        //.
        
        ?>
        <hr>
        <?php
        
//        echo $firstName;
//        echo " ";
//        echo $lastName;
        
        echo $firstName . ' '.$lastName;
        
        ?>
        <hr>
        <?php
        echo "My name is " . $firstName . '.';
        
        
       
        ?>
    </body>
</html>
