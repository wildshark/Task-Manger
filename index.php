<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 22-Apr-17
 * Time: 10:14 AM
 */

session_start();

 if (empty($_SESSION['userID'])){
     $login=include_once "login.php";
     echo $login;
 }else {
     header("location: navigation.php?page=dashboard&success");
 }

