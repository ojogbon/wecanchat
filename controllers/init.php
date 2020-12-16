<?php

use http\Client;

session_start();

$dev_path = "pro";
$companyname = "CompanyName";

$parent_path = $dev_path == "dev" ? "wecanchat/" : "app/";


    include ($_SERVER['DOCUMENT_ROOT']."/". $parent_path.'models/MainModel.php');
    $mainModel = new MainModel();
