<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="css/home.css">
    </head>
    <body>
        
        <div id="container">
            <header id="header">
                <div>
                    <div><img src="img/logo.jpg" alt="logo"></div><div><h1>TimeLess</h1></div> 
                </div>
                <nav id="nav">
                    <ul>
                        <li><a href="Home.php">Home</a></li>
                        <li><a href="task-manager.php">Task Manager</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
            </header>
            
            <div id="main">
                <div id="wrapper">
                    <div id="add_btn_div">
                        <input type="button" value="Add New Task" id="add_btn">
                    </div>
                    <div id="track_btn_div">
                        <input type="button" value="Track My Task" id="track_btn">
                    </div>
                    <div id="form">
                        <form>
                            <div id="title_div">
                                <label for="title">Title</label>
                                <br>
                                <input type="text" id="task_title">
                            </div>
                            <div id="time_div">
                                <label for="time">Time</label>
                                <br>
                                <input type="time" id="time">
                            </div>
                            <div id="task_div">
                                <label for="description">Description</label>
                                <br>
                                <textarea cols="50" rows="10" name="task_descr"></textarea>
                            </div>
                            <div id="task_sub_div">
                                <input type="submit" id="task_btn" value="create task">
                            </div>
                        </form>
                    </div>
                </div>
            </div>>
            <aside>

            </aside>

            <footer>

            </footer>
        </div>
        
        
        <?php
        // put your code here
        ?>
        <script type="text/javascript" src="script/jquery.js"></script>
        <script type="text/javascript" src="home.js"></script>
    </body>
</html>
