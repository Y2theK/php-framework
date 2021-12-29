<?php

// $router->register([
//     ""=>"controllers/IndexController.php",
//     "about"=>"controllers/AboutController.php",
//     "contactus"=>"controllers/ContactController.php",
//     "order"=>"controllers/OrderController.php",
//     "customer"=>"controllers/CustomerController.php",
//     "names"=>"controllers/add-name.php",

// ]);

//laravel 7
// $router->get("","PagesController@home");
// $router->get("about","PagesController@about");
// $router->get("order","PagesController@order");
// $router->get("customer","PagesController@customer");
// $router->get("contactus","PagesController@contact");
// $router->post("names","PagesController@createUser");
// $router->get("users","UserController@index");
// dd($router->routes);

//laravel 8
use controller\PagesController;
// PagesController::class == path of PagesController / controller/PagesController
$router->get('',[PagesController::class,'home']);
$router->get('about',[PagesController::class,'about']);
$router->get('order',[PagesController::class,'order']);
$router->get('customer',[PagesController::class,'customer']);
$router->get('contactus',[PagesController::class,'contact']);
$router->post('names',[PagesController::class,'createUser']);
?>