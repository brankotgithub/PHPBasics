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
        </main>
        
        
    <?php 
            include './partials/footer.php';
    ?>
