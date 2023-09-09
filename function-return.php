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
        /**
         * Calculate Product price
         * @param int $price
         * @param int $tax
         */
        function productPrice($price, $tax){
            $productPrice = $price + $price*($tax/100);
            
            return   $productPrice;
           
          //  echo 'Hello';
            
        }
        
        
        $finalPrice = productPrice(100, 20);
        
       // echo $finalPrice . ' RSD';
        
        function buyProduct($money, $price){
            
            if($money > $price){
                echo 'You have enough money.';
            }else{
                echo 'You dont have enough money.';
            }
        }
        
        
        buyProduct(100, $finalPrice);
        
        
        ?>
    </body>
</html>
