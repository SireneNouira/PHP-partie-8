<?php

$userAgent = $_SERVER['HTTP_USER_AGENT'];


$adressIp = $_SERVER['REMOTE_ADDR'];

$servername = $_SERVER['SERVER_NAME'];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?php
        echo $userAgent . '<br>';
        
        echo $adressIp . '<br>';
        echo  $servername ;
        ?>
    </p>
</body>

</html>