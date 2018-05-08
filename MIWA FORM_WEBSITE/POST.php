<?php
//Post.php


if((isset($POST["Username"]))&&(isset($POST["Password"]))){
    $name=$_POST["Username"];
    $password=$_POST["Password"];
    if(!empty($name)&&(!empty($password)))
    {
        echo 'Username:'.$_POST["Username"];
        echo 'Password:'.$_POST["Password"];
    }
    else
    {
        echo "Login is failure. Please type it again.";
    }
}

?>