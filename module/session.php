<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 22-Apr-17
 * Time: 12:31 PM
 */

session_start();
    if( !isset($_SESSION['userID']) ){
        header("location: login.php");
    }else{
        /*
         *get full name and image and display it on
         * the template dashboard
         */
        $pageData->usernamelabel=$_SESSION['FullName'];
        $pageData->userimages=$_SESSION['photo'];
    }

        // die("Login is required <br> <a href='../login.php'>login</a> "); //"Login required." );

