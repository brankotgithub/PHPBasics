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
        $username = 'Vladan';
        //cannot be empty
        // cannot be larger than 6 characters
        $email = 'vladan.dzulovic@cubes.rs';

        //cannot be empty
        // have to be a valid email
        ?>
        <h2>USERNAME IS: <?php echo $username; ?></h2>
        <h2>EMAIL IS: <?php echo $email; ?></h2>
        <?php
        if (!isset($username)) {
            die('USERNAME HAVE TO BE PROVIDED');
        }

        if (!isset($email)) {
            die('EMAIL HAVE TO BE PROVIDED');
        }

        $errors = array();

        $username = trim($username);

        if (empty($username)) {
            $errors['username'][] = 'Username can not be empty';
        }

        if (strlen($username) > 6) {
            $errors['username'][] = 'Username can not be largger than 6 characters';
        }


        $email = trim($email);


        if (empty($email)) {
            $errors['email'][] = 'Email can not be empty';
        }

        if (!strpos($email, '@', 1)) {
            $errors['email'][] = 'Please provide valid Email';
        }




        if (empty($errors)) {
            ?>
            <div style="background-color: green; padding: 10px;">
                <p>Username and Email are correct</p>
            </div>
            <?php
        } else {
            
            ?>
        <div style="background-color: red; padding: 10px;">
            <?php
                if(array_key_exists('username', $errors)){
                   echo implode('<br>', $errors['username']) ;
                }
                echo "<br>";
                if(array_key_exists('email', $errors)){
                   echo implode('<br>', $errors['email']) ;
                }
            ?>
        </div>
             
            <?php
        }
        ?>
    </body>
</html>
