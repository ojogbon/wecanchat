<?php

use http\Client;

session_start();

$dev_path = "dev";
$companyname = "CompanyName";

$parent_path = $dev_path == "dev" ? "wecanchat/" : "thegeniusadmin/";


    include ($_SERVER['DOCUMENT_ROOT']."/". $parent_path.'models/MainModel.php');
    $mainModel = new MainModel();
