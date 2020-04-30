<?php
session_start();
require_once 'login.php';

$connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);

if($connection -> connect_error)
{
    die($connection->connect_error);
}
$username;
$password;
    
if(isset($_POST['username']) && isset($_POST['password']))
{
    if(!empty($_POST['username']) && !empty($_POST['password']))
    {
        $username = mysql_entities_fix_string($connection, $_POST['username']);
        $password = mysql_entities_fix_string($connection, $_POST['password']);
        
        $query = "SELECT password, name, surname, username FROM user_data WHERE username='$username'";
        
        $result = $connection->query($query);
        if(!$result)
        {
            die($connection->connect_error);
        }else if($result->num_rows)
        {
            $row = $result->fetch_array(MYSQLI_ASSOC);

                $salt1 = "qm&h*";
                $salt2 = "ph!@";
                $token = hash('ripemd128', "$salt1$password$salt2");
                echo "password ". $row['password'];
                if( $row['password']==$token)
                {
                    
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['surname'] = $row['surname'];
                    
                    $un = $_SESSION['username'];
                    $sn = $_SESSION['name'];
                    $ss = $_SESSION['surname'];
                    header('Locaion: home.php');
                }else
                {
                    die("Inavalid username/password combination");
                }
        }  else {
            die("Inavalid username/password combination");
        }
    }
}else
{
    die("Please enter your username add password");
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
?>