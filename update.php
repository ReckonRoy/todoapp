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
    
    $sql = "UPDATE user_task SET username='$su', time='$time', description='$descr', due_date='$date' WHERE title='$title'";
    $result = $connection -> query($sql);
    if($result)
    {
        $message_success = [true, "task has been successfuly updated"];
        echo json_encode($message_success);
    }  else {
        $message_error = [false, "Failed to update task please try again later"];
        echo json_encode($message_error); 
    }
    
}  


?>