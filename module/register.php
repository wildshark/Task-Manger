<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 25-Apr-17
 * Time: 9:57 PM
 */

include_once"../db/db.php";
//get date and time
date_default_timezone_set("America/New_York");
//get value from resign form

$user_FullName=$_GET['full_name'];
$user_Name=$_GET['username'];
$user_Password=$_GET['password'];
$user_Email=$_GET['email'];
$user_dept=$_GET['dept'];
$user_mou=$_GET['ckBox'];
$user_created_date=date("Y-m-d h:i:sa");

if ($user_mou==1) {

    if (!$user_Name) {
        echo "You don't have login detail";
    } else {
        //pass value to session
        $_SESSION['username'] = $user_Name;
        $_SESSION['password'] = $user_Password;
        $_SESSION['email'] = $user_Email;
        $_SESSION['FullName'] = $user_FullName;

        $sql = "INSERT INTO user_account(FullName,UserName,Email,Department,Passwd,CreatedDate)
            VALUES('$user_FullName','$user_Name','$user_Email','$user_dept','$user_Password','$user_created_date')";
        $result = $conn->query($sql);

        header("location: ../index.php");
    }
}else{

    //pass value to session
    $_GET['full_name'] =$user_FullName;
    $_GET['username']=$user_Name;
    $_GET['password']=$user_Password;
    $_GET['email']=$user_Email;
    $_GET['dept']=$user_dept;

    header("location: ../login.php");
}