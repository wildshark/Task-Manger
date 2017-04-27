<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 25-Apr-17
 * Time: 5:10 PM
 */
    include_once"../db/db.php";
//set date and time
    date_default_timezone_set("Africa/Accra");

    $to=$_GET['receiver'];
    $from=$_GET['sender'];
    $message=$_GET['message'];
    $senderDate= date_create('now')->format('d-m-Y H:i:s');

    $client_reference='1234';
    $client_id='fjmrdahz';
    $client_secret='ksejbdxx';
    $reg_delivery='true';


    if (empty($from)){
        echo'No number to send from';
        exit();
    }
    if(empty($to)){
        echo'No Number to send to';
        exit();
    }
    if (empty($message)){
        echo'No Content';
        exit();
    }else {

        $sql_sms = "INSERT INTO sms(sms_from,sms_to,sms_message,send_date )
          VALUES ('$from','$to','$message','$senderDate')";
        $result = $conn->query($sql_sms);

        $sms = 'http://api.mytxtbox.com/v3/messages/send?';

        $uri = $sms .
                'From=%2B' . $from .
                '&To=%2B'. $to .
                '&Content='. $message .
                '&ClientReference='. $client_reference .
                '&ClientId='. $client_id .
                '&ClientSecret='. $client_secret .
                '&RegisteredDelivery='. $reg_delivery;


        // create a new cURL resource
        $ch = curl_init();

        // set URL and other appropriate options
        curl_setopt($ch, CURLOPT_URL, $uri);
        //curl_setopt($h, CURLOPT_HTTPGET,true);


        // grab URL and pass it to the browser
        curl_exec($ch);

        // close cURL resource, and free up system resources
        curl_close($ch);

        header("location: ../navigation.php?page=sms&success=ok");


    }

