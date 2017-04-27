<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 25-Apr-17
 * Time: 9:57 PM
 */

include_once"../db/db.php";

//get value from resign form

$user_FullName=$_GET['full_name'];
$user_Name=$_GET['username'];
$user_Password=$_GET['password'];
$user_Email=$_GET['email'];

if (!$user_Name) {
    echo"You don't have login detail";
}else{
    //pass value to session
    $_SESSION['username'] = $user_Name;
    $_SESSION['password'] = $user_Password;
    $_SESSION['email'] = $user_Email;
    $_SESSION['FullName'] = $user_FullName;

    $sql = "INSERT INTO user_account(FullName,UserName,Email,Passwd)
            VALUES('$user_FullName','$user_Name','$user_Email','$user_Password')";
    $result = $conn->query($sql);

    header("location: ../index.php");
}