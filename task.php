<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'login.php';

$connection = @new MySQLi($db_hostname, $db_username, $db_password, $db_database);
    //if fails to connect die
    if($connection -> connect_error)
    {
        die($connection->connect_error);
    }


function search($conn, $input)
{
    $sql = "SELECT title, time, description, due_date FROM user_task WHERE title='$input'";
    $result = $conn->query($sql);
    if($result)
    {
        //check num_rows
        if($result -> num_rows == 0)
        {
            echo json_encode([false, "does not exist"]);
        }else{
            while($each_row = $result -> fetch_assoc())
            {
                $all_rows[] = $each_row; 
            }
            echo json_encode([true, $all_rows]);
        }
        $result->free();
    }  else {
        //SQL error
    }
    $conn->close();
}

function allReasults($conn)
{
    $sql = "SELECT title, time, description, due_date FROM user_task";
    $result = $conn->query($sql);
    if($result)
    {
        //check num_rows
        if($result -> num_rows == 0)
        {
            echo json_encode([false, "No current task are availabe"]);
        }else{
            while($each_row = $result -> fetch_assoc())
            {
                $all_rows[] = $each_row;
                
            }
            echo json_encode([true, $all_rows]); 
        }
        $result->free();
    }  else {
        //SQL error
    }
    $conn->close();
}

//free(), close()
if(!empty($_POST['taskInput']))
{
    $task = $_POST['taskInput'];
    search($connection, $task);
}  else {
    allReasults($connection);
}