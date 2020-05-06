<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css" type="text/css">
    </head>
    <body>
        
        <div id="container">
            <header id="header">
                
                <nav id="nav">
                <div id="logo_wrap">
                    <div id="logo"><img src="img/logo.jpg" alt="image here" id="logoimg"></div>
                <div id="logocaption"><h1>TimeLess</h1></div>
                </div>
                <ul><li><a href="index.php">Login</a></li>|<li><a href="#">Help</a></li>|<li><a href="#">AboutUs</a></li>|<li><a href="register.php">SignUp</a></li></ul></nav>
                
            </header>
        
        
            <div id="main">
                
                
                
                <div id="form">
                    <center><h2>Login</h2></center>
                    <form action="processLogin.php" method="post" onsubmit="return validateLogin(this)">
                        <div id="username"> 
                        <span id="msgUsername"></span>
                        
                        <br>
                        <input type="text" name="username" placeholder="Username" size="50" class="textfield" placeholder="Enter Username:">
                        </div>
                        
                        <div id="password">
                       <span id="msgPassword"></span>
                        <br>
                        <input type="password" placeholder="Password" name="password" size="50" class="textfield" placeholder="Enter Password:">
                        <br>
                        </div>
                        <div id="recoverpwd"><a href="password-recovery.php">Forgot password</a></div>
                            
                        <div id="btn">
                        <input type="submit" value="LOG IN" class="btn"><a href="register.php" id="reglink">Register</a>
                        </div>
                    </form>
                </div>
            </div>

            <footer>

            </footer>
            
        </div>
        <script type="text/javascript" src="script/main.js"></script>
    </body>
</html>
