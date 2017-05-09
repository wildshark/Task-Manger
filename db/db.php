<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 22-Apr-17
 * Time: 10:46 AM
 */


    $server="localhost";
    //user name
    $username="root";
    //password
    $password="usbw";
    //database name
    $database="cu_task";
    //server port
    $port="3307";


    // Create connection
    $conn = mysqli_connect($server, $username, $password, $database, $port);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    /* Create connection
    $conn = new mysqli('localhost', 'root', 'usbw', 'cu_task','3307');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
*/