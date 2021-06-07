<?php
    session_start();
    require_once __DIR__."/../my_config.php";

    // db configration
    $server   = HOSTNAME;
    $username = USERNAME;
    $password = PASSWORD;
    $database = DATABASE;
       
    date_default_timezone_set('Asia/Dhaka');
    $con=mysqli_connect($server,$username,$password,$database) or die ("could not connect to mysql");

    // some global value
    $DATETIME_FORMAT = "l, M j, Y @ g:ia";
    $HOSTNAME = BASE_URL;
    $COMPANY_NAME = "Blood Bank";
    $COMPANY_ADDRESS = "TechTixBD";
    $COMPANY_MOBILE = "+8801680729350";
    $COMPANY_EMAIL = "kafiabdullahil96@gmail.com";

    require_once 'function.php';
?>