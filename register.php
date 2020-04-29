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
        <link rel="stylesheet" type="text/css" href="css/register.css">
            

    </head>
    
    <body>
        <div id="container">
            <!-- Header that contains nav section-->
            <header id="header">
                <div id="header_cap"><h1>Never let time ruin your efforts</h1></div>
                <!-- nav section-->
                <nav id="nav">
                    <div id="logo_wrap">
                    <div id="logo"><img src="img/logo.jpg" alt="image here"></div>
                    <div id="logocaption"><h1>TimeLess</h1></div>
                    </div>
                    <ul>
                        <li><a href="index.php">SignIn</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">AboutUs</a></li>
                        <li><a href="register.php">SignUp</a></li></ul>
                    </ul>
                </nav>
            </header>
            <!-- Registration form validated through javascript  before submitted to a php file for processing-->
            <div id="section">
                <div id="registrationForm">
                    <form action="registration.php" method="POST" onsubmit="return validateRegistration(this)" id="form_f">
                        <div id="nameField">
                            <span id="msgName"></span>
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name">
                        </div>
                        <div id="surnameField">
                            <span id="msgSurname"></span>
                            <label for="surname">Surname</label>
                            <input type="text" name="surname" id="surname">
                        </div>
                        <div id="usernameField">
                            <span id="msgUsername"></span>
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username">
                        </div>
                        <div id="pwdField">
                            <span id="msgPassword"></span>
                            <label for="password">Password</label>
                            <input type="text" name="password" id="password">
                        </div>
                        <div id="cpwdField">
                            <span id="msgconfirm"></span>
                            <label for="cpassword">Confirm Password</label>
                            <input type="text" name="cpassword" id="cpassword">
                        </div>
                        <div id="emailField">
                            <span id="msgEmail"></span>
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email">
                        </div>
                        <div id="register_btn_div">
                            <input type="submit" value="register" id="register_btn">
                        </div>
                    </form>
                </div>
            </div>
            
            <footer>
                
            </footer>
            
        </div>
        <!-- Javascript file for validating form before submission-->
        <script type="text/javascript" src="script/register.js"></script>
    </body>
</html>
