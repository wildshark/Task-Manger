<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 22-Apr-17
 * Time: 10:14 AM
 */

//header("location: template/default.php");

//include database connection
//  include_once"db/db.php";

//include configuration
// include_once "config/config.php";

//include session
//    include_once"module/session.php";

//include widgets (side menu bar)
// include_once"template/widgets.php";

//display default template on index
// $pageTemplate=include_once "template/form.php";
 //echo $pageTemplate;
session_start();

 if (empty($_SESSION['userID'])){
     $login=include_once "login.php";
     echo $login;
 }else {
     header("location: navigation.php?page=dashboard&success");
 }

