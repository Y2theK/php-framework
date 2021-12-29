<?php

// var_dump($_POST['name']);
// var_dump(parse_url(trim($_SERVER["REQUEST_URI"],'/'),PHP_URL_PATH));

App::get("database")->insert([
    'name'=> $_POST['name']

],"users");

header("Location:/");

// $database->insert([
//     'description' => 'to fap',
//     "complete" => false
// ],"tasks");
?>