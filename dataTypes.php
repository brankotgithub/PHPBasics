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
        
        /*        
            String
            Integer
            Float (floating point numbers - also called double)
            Boolean
            Array
            Object
            NULL
            Resource
         */
        
        $course = "This is \"PHP\" course";
        $name = 'Vladan Dzulovic, \'PHP\' instructor';
        $streetNumber = "181";
        
        echo $course;
        ?>
        <hr>
        <?php
        
        echo $name;
        
        
        //INTEGER
        
        $age = 35;
        $shoesSize = 42;
        $temperature = 27;
        
        //FLOAT
        
        $height = 1.81;
        
        //BOOLEAN
        
        $drivingLicence = true;
        $bCategory = true;
        $dCategory = false;
        
        
        echo $drivingLicence;
        
        
        //NULL
        
        $noting = NULL;
        $test;
        
        //ARRAY
        
        $car1 = "Fiat";
        $car2 = 'Peugeot';
        $car3 = "Mercedes";
        
        $car = array(
            "Fiat",
            "Peugeot",
            "Mercedes",
            5
        );
        
        
        $student = [
            "Vladan",
            "Dzulovic",
            35,
            true,
            1.81
            ];
        
        echo "<hr>";
        
        echo $car[1];
        
        echo '<hr>';
        
        echo $student[2];
        
        
        

        ?>
        
        <pre>
            <?php 
            var_dump($student);
            
            ?>
        </pre>
        
        <?php
        //ASOCIATIVE ARRAY
        
        $teacher = array(
            "name" => "Vladan",
            "lastName" => 'Dzulovic',
            "age" => 35,
            "programer" => true,
            "height"=> 1.81
        );
        
        
        
        echo $teacher["age"];
        
        
        $mercedes = array(
            'model'=>'S class',
            'doorNumber'=> 5,
            'enterier'=>array(
                'leader', 'plastic'
            )
        );
        
        
        echo $mercedes['enterier'][0];
        
        ?>
        
        
    </body>
</html>
