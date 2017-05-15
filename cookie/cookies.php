<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 09-May-17
 * Time: 2:15 PM
 */

if ($checkbox==1){
    $cook_username='UserName';
    $cook_pwd='Password';
    setcookie($cook_username,$username,time()+(86400*1),"/");
    setcookie($cook_pwd,$password,time()+(86400*1),"/");
}else{
    $user=$_COOKIE[$cook_username];
    $pwd=$_COOKIE[$cook_pwd];

    echo $user;
    echo $pwd;
    // header("location: ../login.php?user_name=$user&user_password=$pwd");
    }
