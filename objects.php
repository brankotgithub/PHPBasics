<?php


class Product{
    
    // atributs
    protected $title;
    public $description;
    public $price;
    protected $discount = 0;
    public $quantity;
    
    
    //methods
    
    public function getLastPrice(){
        return $this->price - ($this->price*$this->discount/100);
    }
    
    function __construct($title, $description, $price, $discount, $quantity) {
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->discount = $discount;
        $this->quantity = $quantity;
    }

    function getTitle() {
        return $this->title;
    }

    function getDescription() {
        return $this->description;
    }

    function getPrice() {
        return $this->price;
    }

    function getDiscount() {
        return $this->discount;
    }

    function getQuantity() {
        return $this->quantity;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function setDiscount($discount) {
        if($discount < 0){
            echo ' Discount can not be negative';
            return;
        }
        if($discount > 100){
            echo 'Max value for discount is 100';
            return;
        }
        $this->discount = $discount;
        
    }

    function setQuantity($quantity) {
        $this->quantity = $quantity;
    }


    
    

    
    
}



$firstProduct = new Product('Samsung Mobile Phone S10', "S10 is mobile phone with Android OS and exelent performance.", 500, 10, 70);
//$firstProduct->title = "Samsung Mobile Phone S10";
//$firstProduct->description = "S10 is mobile phone with Android OS and exelent performance.";
//$firstProduct->price= 500;
//$firstProduct->discount = 10;
//$firstProduct->quantity = 70;



$secondProduct = new Product("Samsung mobile Phone s9", "s9 is mobile phone with Android OS and exelent performance.", 300, 30, 10);
//$secondProduct->title = "Samsung mobile Phone s9";
//$secondProduct->description = "s9 is mobile phone with Android OS and exelent performance.";
//$secondProduct->price = 300;
//$secondProduct->discount = 30;
//$secondProduct->quantity = 10;

$secondProduct->setDiscount(50);




?>
<pre>
    <?php
    var_dump($secondProduct);
    ?>
</pre>

<?php


echo $firstProduct->getTitle();
echo "<br>";
echo $firstProduct->description;
echo '<br>';
echo $firstProduct->price;

echo '<br>';



echo $secondProduct->getLastPrice();
echo '<br>';
echo $firstProduct->getLastPrice();


echo "<br>";
echo $firstProduct->getTitle();



class Student{
    
    // atributes
    public $name;
    public $lastname;
    public $age;
    public $course;
}
