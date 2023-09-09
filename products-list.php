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
        "img"=> "https://via.placeholder.com/600x400"
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
            
            .products{
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }
            
            .product-item{
                flex: 0 0 30%;
                margin-bottom: 15px;
                box-shadow: 0 0 5px #000;
            }
            
            .product-item a{
                display: block;
            }
            
            .product-item-data{
                padding: 10px;
            }
            
            img{
                max-width: 100%;
            }
        </style>
    </head>
    <body>
        
        
        <div class="container">
            <section class="products">
                
                <?php
                
                if(empty($products)){
                    echo "There are no products to show.";
                }else{
                    
                    foreach ($products as $key => $value) {
                        ?>
                            <article class="product-item">
                                <a href="/single-product.php?id=<?php echo $key?>">
                                    <img src="<?php echo $value['img'] ?>">
                                </a>
                                <div class="product-item-data">
                                    <h2><?php echo $value['title'] ?></h2>
                                    <p>Price: <?php echo $value['price'] ?> $</p>
                                    <a href="/single-product.php?id=<?php echo $key?>">Read More</a>
                                </div>
                            </article>
        
                        <?php
                    }
                    
                }
                
                ?>
               
                
            </section>
        </div>
        
        
        
    </body>
</html>
