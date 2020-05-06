<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/register.css">
            

    </head>
    
    <body>
        <div id="container">
            <!-- Header that contains nav section-->
            <header id="header">
                
                <nav id="nav">
                <div id="logo_wrap">
                    <div id="logo"><img src="img/logo.jpg" alt="image here" id="logoimg"></div>
                <div id="logocaption"><h1>TimeLess</h1></div>
                </div>
                <ul><li><a href="index.php">Login</a></li>|<li><a href="#">Help</a></li>|<li><a href="#">AboutUs</a></li>|<li><a href="register.php">SignUp</a></li></ul></nav>
                
            </header>
            <!-- End header section -->
            
            <!-- Registration form validated through javascript  before submitted to a php file for processing-->
            <div id="section">
                <div id="registrationForm">
                    <form action="registration.php" method="POST" onsubmit="return validateRegistration(this)" id="form_f">
                        <div id="nameField">
                            <span id="msgName"></span>
                            <input type="text" placeholder="Name" name="name" id="name">
                        </div>
                        <div id="surnameField">
                            <span id="msgSurname"></span>
                            <input type="text"placeholder="Surname" name="surname" id="surname">
                        </div>
                        <div id="usernameField">
                            <span id="msgUsername"></span>
                            <input type="text" placeholder="Username" name="username" id="username">
                        </div>
                        <div id="pwdField">
                            <span id="msgPassword"></span>
                            <input type="text" placeholder="Password" name="password" id="password">
                        </div>
                        <div id="cpwdField">
                            <span id="msgconfirm"></span>
                            <input type="text" placeholder="Confirm Password" name="cpassword" id="cpassword">
                        </div>
                        <div id="emailField">
                            <span id="msgEmail"></span>
                            <input type="text" placeholder="Email" name="email" id="email">
                        </div>
                        <div id="register_btn_div">
                            <center><input type="submit" value="register" id="register_btn"></center>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End main section-->
            <footer>
                
            </footer>
            
        </div>
        <!-- Javascript file for validating form before submission-->
        <script type="text/javascript" src="script/register.js"></script>
    </body>
</html>
