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
       
        // params ase variables
        /**
         * Function display Username
         * @param string $user
         */
        function displayUser($user){
            echo 'Username is: ' . $user;
            echo '<br>';
        }
        
        
        // arguments
        displayUser('Vladan Dzulovic');
        displayUser('Marko Markovic');
        
        displayUser('Petar Petrovic');
        
        $username = 'Janko Jankovic';
        
        displayUser($username);
        
        
        /**
         * Display Product Price
         * @param int $price
         * @param int $tax
         * @param int $discount
         */
        function displayPrice( $price, $tax, $discount = 0){
            
            $productPrice = $price + $price*($tax/100);
            $discountPrice = $productPrice - $productPrice*($discount/100);
           
            if($discount > 0){
                echo 'Discount Price is : ' . $discountPrice . ' RSD';  
                echo '<br>';
            }else{
               echo 'Product Price is: ' . $productPrice . ' RSD';
                echo '<br>'; 
            }
            
            
        }
        
        
        displayPrice(100, 20 , 10);
        displayPrice(1000, 10)
        
        
        ?>
    </body>
</html>
