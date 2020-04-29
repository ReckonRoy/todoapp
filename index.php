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
        <link rel="stylesheet" href="css/main.css" type="text/css">
    </head>
    <body>
        
        <div id="container">
            <header id="header">
                
                <nav id="nav"><div id="logo_wrap">
                <div id="logo"><img src="img/logo.jpg" alt="image here"></div>
                <div id="logocaption"><h1>TimeLess</h1></div>
                </div><ul><li><a href="index.php">Login</a></li>|<li><a href="#">Help</a></li>|<li><a href="#">AboutUs</a></li>|<li><a href="register.php">SignUp</a></li></ul></nav>
                <div class="ads">
                    <div>
                        <figure>
                            <img src="img/study.jpg" alt="">
                        </figure>
                    </div>
                    <div>
                        <figure>
                            <img src="img/Cooking.jpg" alt="">
                        </figure>
                    </div>
                    <div>
                        <h2>TimeLess</h2>
                        <p>TimeLess helps you manage<br>
                        your time and organize your day<br>
                        to day task. Our aim is to help you<br>
                        in being highly productive and use<br>
                        time more efficiently.
                        </p>
                    </div>
                </div>
            </header>
        
        
            <div id="main">
                
                <div id="fhead"><h2>Login</h2></div>
                
                <div id="form">
                    <form action="processLogin.php" method="post" onsubmit="return validateLogin(this)">
                        <div id="username"> 
                        <span id="msgUsername"></span>
                        <label for="username" class="label">Username</label>
                        <br>
                        <input type="text" name="username" size="43" class="textfield" placeholder="Enter Username:">
                        </div>
                        
                        <div id="password">
                       <span id="msgPassword"></span>
                        <label for="password" class="label">Password</label>
                        <br>
                        <input type="password" name="password" size="43" class="textfield" placeholder="Enter Password:">
                        <br>
                        </div>
                        <div id="recoverpwd"><em><a href="password-recovery.php">forgot password</a></em></div>
                            
                        <div id="btn">
                        <input type="submit" value="signIn" class="btn"> <input type="button" value="signUp" class="btn">
                        </div>
                    </form>
                </div>
            </div>

            <footer>

            </footer>
            
        </div>
        <?php
        // put your code here
        ?>
        <script type="text/javascript" src="script/main.js"></script>
    </body>
</html>
