<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 23-Apr-17
 * Time: 8:37 PM
 */

//Destroy all session and
//and load my login page
include_once "db/db.php";
$conn->close();
session_destroy();
