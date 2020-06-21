<?php session_start(); ?>

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
        <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Libre+Franklin:wght@100&family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&family=Concert+One&display=swap" rel="stylesheet">  
    </head>
    <body>
        <button onclick="request_sort_search();" class="sort" id="sort">SORT</button>
        <?php
        if(isset($_SESSION['username']))
        {
        ?>
        <div id="container">
            <header id="header">
                <span><center><h1>Welcome <?php echo $_SESSION['name']." ".$_SESSION['surname'];?></h1></center></span>
                <nav id="nav">
                    <div id="logo_wrap">
                    <div id="logo"><img src="img/logo.jpg" id="logoimg" alt="image here"></div>
                    <div id="logocaption"><h1>TimeLess</h1></div>
                    </div>
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
                        <input type="button" value="ADD NEW TASK" id="add_btn">
                    </div>
                    <div id="track_btn_div">
                        <input type="button" value="TRACK MY TASK" id="track_btn">
                    </div>
                    <div id="form">
                        <form>
                            <fieldset>
                                <legend>Create Task:</legend>
                            <div id="title_div">
                                <label for="due_time">Name</label>
                                <br>
                                <input type="text" placeholder="Title" name="task_title" id="task_title">
                            </div>
                            <div id="time_div">
                                <label for="due_time">Due Time</label>
                                <br>
                                <input type="time" name="due_time" id="due_time">
                            </div>
                            
                            <div id="due_date_div">
                                <label for="due_date">Due Date</label>
                                <br>
                                <input type="date" name="due_date" id="due_date">
                            </div>
                            
                            <div id="task_div">
                                <label for="due_time">Description</label>
                                <br>
                                <textarea cols="50" rows="5" name="task_descr" placeholder="Description" id="descr" ></textarea>
                            </div>
                            <div id="task_sub_div">
                                <input type="button" id="task_btn" onclick=" request(this.form)" value="create task">
                            </div>
                            </fieldset>
                        </form>
                        
                        <div id="msg"></div>
                    </div>
                    
                    <div id="task">
                        <div>
                            <div id="form_second">
                                <form>
                                    <fieldset>
                                        <legend>Search for Task:</legend>
                                    <div id="title_div">
                                        <input type="text" name="taskInput" placeholder="Type something..." id="task_title"> <input type="button" id="search" onclick="request_search(this.form)" value="search">
                                    </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                        <div id="task_b">
                            
                        </div>
                    
                </div>
            </div>
                <div id="msg"></div>
            <footer>

            </footer>
        </div>
        
        
        <?php
        }else{
            echo "Please login to view this page";
        }
        ?>
        <script src="script/jquery.js"></script>
        <script type="text/javascript" src="script/home.js"></script>
        <script type="text/javascript" src="script/home_display.js"></script>
        <script type="text/javascript" src="script/home_sort_display.js"></script>
        <script type="text/javascript">
            $( "#form" ).hide( "fast");
            $( "#task" ).hide( "fast");
            
            // With the element initially shown, we can hide it slowly:
                $( "#track_btn" ).click(function() {
                    $( "#form" ).hide( "fast");
                    $( "#task" ).show( "fast");
                    $( "#task_b" ).show( "fast");
                    $("#sort").show("fast");
                });
                
                $( "#add_btn" ).click(function() {
                  $( "#form" ).show( "fast");
                  $( "#task" ).hide( "fast");
                  $( "#task_b" ).hide( "fast");
                  $("#sort").hide("fast");
                  });
        </script>
    </body>
</html>


