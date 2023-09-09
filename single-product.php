<?php
    include './partials/products.php';
?>


<?php
    include './partials/menu.php';
?>

<?php
    include './partials/header.php'
?>
        
        <main>
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
        </main>
   <?php 
            include './partials/footer.php';
    ?>