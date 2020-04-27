<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'credentials.php';

$connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);

if( $connection -> connect_error)
{
    die($connection -> connect_error);
}else{
    echo "Connected!!!";
}