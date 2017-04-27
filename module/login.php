<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 22-Apr-17
 * Time: 12:52 PM
 */

include_once"../db/db.php";
session_start();
$username=$_GET['user_name'];
$password=$_GET['user_password'];

$sql="SELECT * FROM user_account WHERE StatusID='2' AND UserName='$username' AND Passwd='$password'";
$result=$conn->query($sql);

if (!$row= $result->fetch_assoc()){
    //if the username and password don't exist load login page
    header("location: ../login.php");
}else{

    /*  get value from user_account to Session
        and load the start page
    */
    $userID=$row['userID'];
    $fullName=$row['FullName'];
    $userEmail=$row['email'];
    $userPath=$row['Path'];
    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
    $_SESSION['email']=$userEmail;
    $_SESSION['FullName']=$fullName;
    $_SESSION['userID']=$userID;
    $_SESSION['photo']=$userPath;

   header("location: ../navigation.php?page=dashboard&success");
}