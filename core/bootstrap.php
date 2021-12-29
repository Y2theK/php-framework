<?php

// $config = require "config.php";
// $database = new QueryBuilder(
//     Connection::make(App::get("config")['database'])
// );/
use core\App;
require 'core/function.php';

//dependecies
App::bind("config",require "config.php");
App::bind("database",new QueryBuilder(
        Connection::make(App::get("config")['database'])
));


        // dd(App::get("config"));

?>