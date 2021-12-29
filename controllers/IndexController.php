<?php
    
    //database htae ka data swl htote p thet sine yr page ko pya tr controller a loat
    $users = App::get("database")->selectAll("users");
    // require "view/index.view.php";
    // dd($users);
   
    
    view('index',[
        "users" => $users
    ]); //$user ko parameter nae pass
?>