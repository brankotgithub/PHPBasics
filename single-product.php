<?php


$products = array(
    
    "1" => array(
        'title'=> "Product 1",
        "description"=>"Product 1 Description",
        "price"=> 100,
        "img"=> "/img/product1.jpg"
    ),
    "2" => array(
        'title'=> "Product 2",
        "description"=>"Product 2 Description",
        "price"=> 200,
        "img"=> "/img/product2.jpg"
    ),
    "3" => array(
        'title'=> "Product 3",
        "description"=>"Product 3 Description",
        "price"=> 300,
        "img"=> "http://via.placeholder.com/600x400"
    ),
    "4" => array(
        'title'=> "Product 4",
        "description"=>"Product 4 Description",
        "price"=> 400,
        "img"=> "http://via.placeholder.com/600x400"
    ),
    "5" => array(
        'title'=> "Product 5",
        "description"=>"Product 5 Description",
        "price"=> 500,
        "img"=> "http://via.placeholder.com/600x400"
    ),
      "6" => array(
        'title'=> "Product 6",
        "description"=>"Product 6 Description",
        "price"=> 600,
        "img"=> "http://via.placeholder.com/600x400"
    ),
      "7" => array(
        'title'=> "Product 7",
        "description"=>"Product 7 Description",
        "price"=> 700,
        "img"=> "http://via.placeholder.com/600x400"
    ),
      "8" => array(
        'title'=> "Product 8",
        "description"=>"Product 8 Description",
        "price"=> 800,
        "img"=> "http://via.placeholder.com/600x400"
    ),
      "9" => array(
        'title'=> "Product 9",
        "description"=>"Product 9 Description",
        "price"=> 900,
        "img"=> "http://via.placeholder.com/600x400"
    )
    
);



?>

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
        
        <style>
            .container{
                width: 1000px;
                margin: 0 auto;
            }
            
            .single-product{
                display: flex;
            }
            
            .single-product-content,
            .single-product-img{
                flex: 0 0 50%;
                padding: 10px;
            }
            
            img{
                max-width: 100%;
            }
        </style>
    </head>
    <body>
        
        
        <div class="container">
            
            <?php
            // if is ID given
                if(!isset($_GET['id'])){
                   ?>
                    <h2>ERROR 404. Page don't exist</h2>
                    <a href="/products-list.php">Back to Products</a>
                    <?php
                }else{
                    
                    // is KEY ID EXIST
                    
                    if(array_key_exists($_GET['id'], $products)){
                        // DISPLAY PRODUCT
                        
                        $product = $products[$_GET['id']];
                        
                        ?>
                    
                        <article class="single-product">
                            <div class="single-product-img">
                                <img src="<?php echo $product['img']; ?>">   
                            </div>
                            <div class="single-product-content">
                                <h2><?php echo $product['title']; ?></h2>
                                <p><?php echo $product['description']; ?></p>
                                <p>Price <?php echo $product['price']; ?> $</p>
                            </div>
                        </article>
                    <?php
                    }else{
                        
                        //PRODUCT ID DON'T EXIST
                        
                        ?>
                        <h2>The Product with the given parameters does not exist. </h2>
                        <a href="/products-list.php">Back to Productss</a>
                        <?php
                    }
                    
                }
            
            ?>
            
            
        </div>
        
        
    </body>
</html>
