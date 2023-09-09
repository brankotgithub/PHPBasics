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
        
       
        //poolSurface  = rectangleSurface + circleSurface/2
        
        function calculateRectangleSurface($width, $height){
            $rectangleSurface = $width * $height;
            return $rectangleSurface;
        }
        
        function calculateCircleSurface($r){
            $circeSurface = $r * $r *3.14;
            return $circeSurface;
        }
        
        function calculatePoolSurface($a, $b){
            
            $polSurface = calculateRectangleSurface($a, $b) + calculateCircleSurface($b/2)/2;
            
            return $polSurface;
            
        }
        
        function displayPoolSurface(){
            $a = 20;
            $b = 10;
            echo calculatePoolSurface($a, $b);
        }
        
        
        
        ?>
        
        <h2>Pool surface is: <?php displayPoolSurface() ?></h2>
        <?php
        
        
        
        
        ?>
    </body>
</html>
