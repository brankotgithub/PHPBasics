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
        $emptyString = "";
        $emptySpace = " ";
        $name = "Vladan";
        $company = "  Cubes   ";
        $school = "  Cubes School  ";
        $lastName;
        $zero = 0;
        $nothing = NULL;
        $drivingLicence = TRUE;
        $dCategory = FALSE;
        $emptyArray = array();

        $cars = array(
            "Fiat",
            "Audi",
            "Peugeot"
        );
        $person = array(
            "name" => "Vladan",
            "lastname" => "Dzulovic",
            "age" => 35
        );

        $news = array(
            "1" => array(
                "title" => "News 1 title",
                "description" => "News 1 description"
            ),
            "2" => array(
                "title" => "News 2 title",
                "description" => "News 2 description"
            ),
            "3" => array(
                "title" => "News 3 title",
                "description" => "News 3 description"
            )
        );


        // VARIABLE HANDLING FUNCTION

        /*         * ******************************
          isset($variable)  -> return TRUE/FALSE
         * ************************************* */

        //var_dump(isset($emptyString));
        //var_dump(isset($lastName));
        //var_dump(isset($zero));
        // var_dump(isset($nothing));


        /*         * **************************
          empty()
         * ************************* */

        // var_dump(empty($emptyString));
        // var_dump(empty($zero));
        //var_dump(empty($nothing));
        //var_dump(empty($emptySpace));


        /*         * **************************
          is_null()
         * ********************** */

        // var_dump(is_null($dCategory));


        /*         * ************************
          die()
         * ************************** */

        // die('End Of PHP');
        // echo 'Hello';
        //STRING FUNCTIONS

        /*         * *********************
          srtlen()
         * ******************* */


        //$stringLength = strlen($emptyString);
        //$stringLength = strlen($emptySpace);
        //$stringLength = strlen($name);
        //$stringLength = strlen($company);
        //echo $stringLength;


        /*         * *********************
          trim()
         * ******************* */

        //$trimedCompany = trim($company);
        //var_dump(strlen($trimedCompany));
        //$school = trim($school);
        //var_dump(strlen($school));


        /*         * *********************
          strpos()
         * ******************* */


        // var_dump(strpos($name , 'a', 3));
        //$company = trim($company);
        //var_dump(strpos($school, $company));

        /*         * *********************
          str_replace()
         * ******************* */



        //  $nameReplaced = str_replace('a', 'A', $name);
        // echo $nameReplaced;
        //Number Functions

        /*         * *********************
          round()
         * ******************* */
        // $height= 1.868686;
        // var_dump(round($height, 1))


        /*         * *********************
          floor()
         * ******************* */

        $height = 1.81;

        //var_dump(floor($height));

        /*         * *********************
          ceil()
         * ******************* */

        //var_dump(ceil($height));
        //ARRAY FUNCTION
        //echo $cars[0];
        //echo $person['name'];
        //echo $news['1']['title'];

        $cars[] = 'Mercedes';

        //var_dump($cars);

        $person['company'] = "Cubes";
        ?>
        <pre>
        <?php
        //var_dump($person);
        ?>
        </pre>
        <?php
        
        
        /**********************
          count()
         ******************** */
        
        
        //var_dump(count($cars));
        
        /**********************
         in_array()
         ******************** */
        
      //  var_dump(in_array('Fiat', $cars))
                
         /**********************
         array_key_exist()
         ******************** */
                
      // var_dump(array_key_exists('2', $news));
       
       /**********************
         implode()
         ******************** */
       
        
        echo implode('*', $cars);
        
        ?>
    </body>
</html>
