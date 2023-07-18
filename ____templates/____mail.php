
<?php

date_default_timezone_set('Asia/Kolkata');
$php_date_time = date('d-m-Y H:i');
$php_date = date('d-m-Y');

    $to = ["hackathon23jec@gmail.com","umarabdul.0121@gmail.com","sanjaikumaran0311@gmail.com"];

    $sub = "Seems Like someone has registered for Hackathon' 23!";

    $message = "Someone has registered for Hackathon '23!
    <br>
    Date and time: $php_date_time 
    ";
    
    $headers = "From: hackathon23jec@gmail.com\r\n";

    for($i = 0;$i <= 2; $i++)
    { 

    $result = mail($to[$i], $sub, $message, $headers);

    if ($result) {
        return true;
    } else {
        return false;
    }

}