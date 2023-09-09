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
        
       // echo "My name is Branko";
       // echo "<br>";
        
        //WHILE LOOP
        
        /*
         
        start parameter 
        
         while(condition is TRUE){

         Block of code to be executed

         ACTION

         }
         */
        
        
        $start = 1;
        
        while ($start < 6){
            
            echo "My name is Branko";
            echo "<br>";
            
            $start++;
            
        }
        ?>
        <hr>
        <?php
        
        
        $number = 1;
        
        while($number < 11){
            
//            if($number === 5){
//                break;
//            }
            
            if($number === 5){
                $number++;
                continue; 
            }
            
            echo $number . '<br>';
            
            $number++;
        }
        
        
        
        
        
        
        ?>
        <hr>
        <?php
        
        //FOR LOOP
             
        /*
                 
         for(start, condition, action){

            Block of code to be executed

         }
         */
        
        for($i = 1; $i < 11; $i++){
            
            echo $i . '<br>';
            
        }
        
        ?>
        <hr>
        <?php
        
        $customNumber = 33;
        
        for($i = 1; $i < $customNumber; $i++){
            
            if($i%2 === 0){
                echo $i . '<br>';
            }
        }
        
        
        ?>
        <hr>
        
        <?php
        $cars = array(
            "Fiat",
            "Peugeot",
            "Audi",
            "Mercedes"
        );
        
        $cars[] = 'BMW';
        
       // var_dump($cars);
        
        for($i = 0; $i < count($cars); $i++ ){
            echo $cars[$i] . "<br>";         
        }
        ?>
        <hr>
        <?php
  
        $mobilePhones = array(
            "Samsung",
            "Alcatel",
            "Nokia"
        );
        
        $mobilePhones[10] = "iPhone";
        
        foreach ($mobilePhones as $mobilePhone){
            echo $mobilePhone . "<br>";  
        }
        
        
        
        ?>
        <hr>
        <?php
        
        foreach ($mobilePhones as  $key=>$value){  
            echo "Key: " . $key . " Value: " . $value . "<br>";
        }
        
        
        ?>
        <hr>
        <?php
        
        $news = array(
            "1"=> array(
                "title"=> "News Title",
                "description"=> "News Description",
                "link"=> "https://cubes.edu.rs"
            ),
            "2"=> array(
                "title"=> "News Title",
                "description"=> "News Description",
                "link"=> "https://cubes.edu.rs"
            ),
            "3"=> array(
                "title"=> "News Title",
                "description"=> "News Description",
                "link"=> "https://cubes.edu.rs"
            )
        );
        
        
        foreach ($news as $key => $value) {
            
            ?>
                <h2>NEWS <?php echo $key ?></h2>
                <h3><?php echo $value["title"] ?></h3>
                <p><?php echo $value["description"] ?></p>
                <a href="<?php echo $value["link"] ?>"><?php echo $value["link"] ?></a>
            <?php
            
        }
        
        
        ?>
        
       
    </body>
</html>
