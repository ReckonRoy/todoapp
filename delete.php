<?php

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

if(!empty($_POST['title']))
{
    $del_val = $_POST['title'];
    $sql = "DELETE FROM user_task WHERE title='$del_val'";
    $result = $connection->query($sql);
    if($result)
    {
        echo json_encode("deleted");

    }  else {
        echo json_encode("could not delete");
    }
    $connection->close();        
}
?>