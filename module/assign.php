<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 25-Apr-17
 * Time: 6:46 AM
 */

include_once"db/db.php";

    $sql_user="SELECT * FROM user_account WHERE StatusID = 2";
    $result=$conn->query($sql_user);
        while ($row = $result->fetch_assoc()) {
            $p= "<option value='" . $row['FullName'] . "'>" . $row['FullName'] . "</option>";
        }
return $p;
