<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 26-Apr-17
 * Time: 6:56 AM
 */
    include_once"config/config.php";
    $page=$_GET['page'];
    $pageData->name=$_GET['name'];
    $pageData->password=$_GET['password'];
    if ($page="password"){

        $pageData->contenttitle="Retrieve Login Details";
        $pageData->message1="We are excited to have you join us in Ace community";
        $pageData->message2="Please confirm your registration to continue";
        $pageData->button="Login";

        $pageData->url="index.php";

        $page= include_once "template/message.php";
        echo $page;
    }else{
        $pageLogin=include_once"template/login.php";
        echo$pageLogin;
    }