<?php
ob_start();
require_once "vendor/autoload.php";
require "core/bootstrap.php";





// dd($_SERVER["REQUEST_METHOD"]);
 Router::load("routes.php")->direct(Request::uri(),$_SERVER["REQUEST_METHOD"]);
  
?>
