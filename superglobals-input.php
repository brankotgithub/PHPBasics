

<?php
    $availableCourse = array('frontend', 'backend', 'android');

    if(isset($_GET['question']) && $_GET['question'] === 'true'){
    //if(isset($_POST['question']) && $_POST['question'] === 'true'){  
        $formData = $_GET;
        // $formData = $_POST;
       
       
       
        
        $formErrors = array();
        
        if(!isset($formData['email'])){
            $formErrors['required'][] = 'Email not provided.';
        }else{
            
            //EMAIL
            $email = trim($formData['email']);
            
            if(empty($email)){
                $formErrors['email'][] = 'Email is required.';
            }
            
            if(strpos($email, '@') < 2){
                $formErrors['email'][] = 'Please provide a valid Email address.';
            } 
        }
        
        
        if(!isset($formData['course'])){
            $formErrors['required'][] = 'Course not provided.';
        }else{
            
            $course = trim($formData['course']);
            
            if(empty($course)){
               $formErrors['course'][] = 'Course is required.'; 
            }
            
            if(!in_array($course, $availableCourse)){
                $formErrors['course'][] = 'Please select one of the given courses.'; 
            }
        }
        
        
        
        
        if(!isset($formData['message'])){
            $formErrors['required'][] = 'Message not provided.';
        }else{
            $message = trim($formData['message']);
            
            if(empty($message)){
                $formErrors['message'][] = 'Message is required';
            }    
        }
 
        
        if(!isset($formData['policy'])){
            $formErrors['required'][] = 'Policy not provided.';
        }else{
            $policy = trim($formData['policy']);
            if(empty($policy)){
                $formErrors['policy'][] = 'Policy is required';
            }
            
            if($policy !== 'agree'){
                $formErrors['policy'][] = 'Bad value for policy';
            }
            
        }
        
        
        
        if(empty($formErrors)){
            //DO SOME ACTION
            
            //SEND EMAIL
            // from - $email
            // to - me
            // subject- $course
            
            //message - $message
            
            
            // Store data in database
        }
        
        
        
//        if(array_key_exists('required', $formErrors)){
//            echo implode('<br>', $formErrors['required']);
//        }
        
    }
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
                width: 700px;
                margin: 0 auto;
            }
            
            .control{
                width: 100%;
            }
        </style>
    </head>
    <body>
        <?php
        
        /*  
            $GLOBALS
            $_SERVER
            $_REQUEST
            $_POST
            $_GET
            $_FILES
            $_ENV
            $_COOKIE
            $_SESSION
        */
        
        
        //
        
       // $_GET['name']= "Branko";
       // var_dump($_GET);
        
       // echo $_GET['name'];
        ?>
        
        
        <div class="container">
            
            <?php
            
            if(isset($formErrors)){                   
                if(empty($formErrors)){
                    ?>
                    <div style=" background-color: green; padding: 10px;">
                        <?php echo "Thank you! Your message has been sent successfully." ?>
                    </div>
                    <?php
                } else{
                    
                    if(array_key_exists('required', $formErrors)){
                        ?>
                            <div style="background-color: red; padding: 10px">
                                <?php echo implode('<br>', $formErrors['required']) ?>
                            </div>
                        <?php
                    }else{
                        
                        ?>
                        <div style="background-color: red; padding: 10px;">
                            <?php 
                            if(array_key_exists('email', $formErrors)){
                                echo implode('<br>', $formErrors['email']) . '<br>';
                            }
                            if(array_key_exists('course', $formErrors)){
                                echo implode('<br>', $formErrors['course']) . '<br>';
                            }
                            if(array_key_exists('message', $formErrors)){
                                echo implode('<br>', $formErrors['message']) . '<br>';
                            }
                            
                            if(array_key_exists('policy', $formErrors)){
                                echo implode('<br>', $formErrors['policy']) . '<br>';
                            }
                            ?>
                        </div>
                        <?php
                        
                        
                    }
                }              
            }
            
            ?>
            
            <form method="get"  action="">
                <label>Email:</label>
                <br>
                <input type="text" name="email" value="" class="control">
                <br>
                <label>Course:</label>
                <br>
                <select name="course" class="control">
                    <option value="">----</option>
                    <option value="frontend">Frontend Course</option>
                    <option value="backend">Backend Course</option>
                    <option value="android">Android Course</option>
                </select>
                <br>
                <label>Message:</label>
                <br>
                <textarea name="message" rows="7" class="control"></textarea>
                <br>
                <input type="checkbox" name="policy" value="agree"> I accept Privacy Policy
                <br>
                
                <button type="submit" name="question" value="true">SEND</button>
            </form>
        </div>
        
    </body>
</html>
