<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'login.php';
$connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);
if($connection -> connect_error)
{
    echo json_encode("Could not connect");
}

if( !empty($_POST['task_title']) && !empty($_POST['time_vale']) && !empty($_POST['date_val']) && !empty($_POST['descr_val']))
{
    $title = $_POST['task_title'];
    $time = date($_POST['time_vale']);
    $date = date($_POST['date_val']);
    $descr = $_POST['descr_val'];
    $su = $_SESSION['username'];
    
    $sql = "INSERT INTO user_task SET username='$su', title='$title', time='$time', description='$descr', due_date='$date'";
    $connection -> query($sql);
    
    if($connection->connect_error)
    {
        $error_array = [false, "Error Message", "Sorry could not create new task"];
        echo json_encode("error");
    }  else {
        $message = [true, "Task has been succesfully added", "New task: ".$title];
        echo json_encode($message);
    }
}
$connection -> close();
?>