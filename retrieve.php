<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 26-Apr-17
 * Time: 6:56 AM
 */
    include_once"config/config.php";
    $page=$_GET['page'];
    $pageConfig->name=$_GET['name'];
    $pageConfig->password=$_GET['password'];
    if ($page="password"){

        $pageConfig->contenttitle="Retrieve Login Details";
        $pageConfig->message1="We are excited to have you join us in Ace community";
        $pageConfig->message2="Please confirm your registration to continue";
        $pageConfig->button="Login";

        $pageConfig->url="index.php";

        $page= include_once "template/message.php";
        echo $page;
    }else{
        $pageLogin=include_once"template/login.php";
        echo$pageLogin;
    }