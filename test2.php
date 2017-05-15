<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 13-May-17
 * Time: 1:43 PM
 */

include_once "db/db.php";
function getDataSheet($conn){

    $sql="SELECT * FROM  user_task";
    $result=$conn->query($sql);
    while ($row= $result->fetch_assoc()){

        echo $row;
    }

}
getDataSheet($conn);
