<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'login.php';

//connect to the database
$connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);

if($connection -> connect_error)
{
    die($connection -> connect_error);
}
    
//check if $_POST['...'] isset and is not empty
if(isset($_POST['name']) && isset($_POST['surname'])&& isset($_POST['username']) && isset($_POST['password']) && isset($_POST['cpassword']) && isset($_POST['email']))
{
    if(!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['cpassword']) && !empty($_POST['email']))
    {
        $name = mysql_entities_fix_string($connection, $_POST['name']);
        $surname = mysql_entities_fix_string($connection, $_POST['surname']);
        $username = mysql_entities_fix_string($connection, $_POST['username']);
        $password = mysql_entities_fix_string($connection, $_POST['password']);
        $cpassword = mysql_entities_fix_string($connection, $_POST['cpassword']); 
        $email = mysql_entities_fix_string($connection, $_POST['email']);
        
        $query = "SELECT username FROM user_data WHERE username='$password'";
        //query the database 
        $result = $connection->query($query);
        if(!$result)
        {
            die($connection->connect_error);
        }else if($result->num_rows)
        {
            $row = $result->fetch_array(MYSQLI_ASSOC);
            if($username == $row['username'])
            {
                echo "Username is already taken";  
            }else
            {
                die("Inavalid username/password combination");
            }
        }  else {
            if($password != $cpassword )
            {
                echo "passwords do not match";
            }else{
                $salt1 = "qm&h*";
                $salt2 = "ph!@";
                $token = hash('ripemd128', "$salt1$password$salt2");
                $query = "INSERT INTO user_data VALUES('', '$name', '$surname', '$username', '$token', '$email')";
                $result = $connection -> query($query);
                
                if(!$result)
                {
                    die($connection->error);
                }else{
                    header('Location: index.php');
                }
            }
        }
    }
}else
{
    die("Please enter your username and password");
}

$connection->close();

function mysql_entities_fix_string($connection, $string)
{
    return htmlentities(mysql_fix_string($connection, $string));
}

function mysql_fix_string($connection, $string)
{
    if(get_magic_quotes_gpc())
    {
        $string = stripslashes($string);
    }
    return $connection->real_escape_string($string);
}
