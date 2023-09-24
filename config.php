<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    define('DB_SERVER', 'sql6.freesqldatabase.com');
    define('DB_USERNAME', 'sql6584727');
    define('DB_PASSWORD', '6nqczJpC2U');
    define('DB_NAME', 'sql6584727');
    
    /* Attempt to connect to MySQL database */
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    // 輸入中文也OK的編碼
    mysqli_query($link, 'SET NAMES utf8');

    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    else{
        return $link;
    }
?>    
</body>
</html>
