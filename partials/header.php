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
        
        <link href="/css/theme.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <header>
            <div class="container">
                <a href="#">
                    LOGO
                </a>
                <nav class="menu">
                    <?php
                    
                    foreach ($menu as  $key=> $value) {
                        ?>
                        <a href="/<?php echo $key?>.php "><?php echo $value ?></a>
                        <?php
                    }
                    
                    ?>
                </nav>
            </div>
        </header>
