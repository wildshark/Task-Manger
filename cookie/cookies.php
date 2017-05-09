<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 09-May-17
 * Time: 2:15 PM
 */


if ($checkbox==1){
    setcookie('Username',$username,time()+(86400*1),"/");
}else{
    $user=$_COOKIE[$username];
    //$_GET['user_name']=$user;
    echo $user;

}