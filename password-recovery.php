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
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>password recovery</title>
        <link rel="stylesheet" href="css/main.css" type="text/css">
        
    </head>
    
    <body>
        <div class="container">
            <header id="header">
                <h1>TimeLess</h1>
                
                <nav id="nav"><ul><li><a href="index.php">Login</a></li>|<li><a href="#">Help</a></li>|<li><a href="#">AboutUs</a></li>|<li><a href="#">SignUp</a></li></ul></nav>
                <div class="ads">
                    <div>
                        <h2>Forgot you password?<em> Recover your Time-Less account</em></h2>
                        <h3>Follow the steps to recover your account</h3>
                        <ol>
                            <li>Enter your email address on the email field below.</li>
                            <li>Click submit to send your password request</li>
                            <li>Go to your email account and confirm password recovery</li>
                            <li>Enter new strong password</li>
                            <li>Change password to finish the procedure</li>
                            <li>Good Luck</li>
                        </ol>
                    </div>
                </div>
            </header>
            
            <section class="section">
                <div id="form2">
                    <form>
                        <div id="recover_password">
                            <label for="email">Recovery Email</label>
                            <br>
                            <input type="email" name="email" id="re-email">
                        </div>
                        
                        <div id="re_btn">
                            <input type="submit" value="submit" id="re_pwd_btn">
                        </div>
                    </form>
                </div>
            </section>
            
            <footer></footer>
        </div> 
    </body>
</html>