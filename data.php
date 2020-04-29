<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'login.php';
$connection = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

$query = "SELECT * FROM user_task";
$result = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($result))
{
    $data[] = $row;
}
//returning response in JSON format
echo json_encode($data);
?>