<?php
require_once __DIR__.'/../../../include/config.php';

$username=filter_var($_REQUEST["username"], FILTER_SANITIZE_STRING);
$output=checkHospital($username);     //checking user with function! everything in function.php

echo $output;
mysqli_close($con);
?>