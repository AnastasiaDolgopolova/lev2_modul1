<?php
//include __DIR__ . '/../functions.php';

$routes = [
    "/" => 'controllers/homepage.php',
    "/about" => 'controllers/about.php',
    "/add" => 'controllers/create.php',

    "/delete" => 'controllers/delete.php',
    "/edit" => 'controllers/edit.php',
    "/show" => 'controllers/show.php',
    "/store" => 'controllers/store.php',
    "/update" => 'controllers/update.php'

];

$route = $_SERVER['REQUEST_URI'];

$get_param = stripos($route, '?');//использование функция strpos ( поиск вхождения одной строки в другую) при сопоставлении роута и url'a;
if($get_param !== false){
    $route = substr($route, 0, $get_param);
}
if(array_key_exists($route, $routes)) {
    require_once __DIR__ . '/../'. $routes[$route];
    die;
} else {
    require_once __DIR__ . '/../controllers/404.php';
}



/*if(array_key_exists($route, $routes)){
 include __DIR__ . '/../' . $routes[$route] ;
  exit;
}else{
  dd(404);
}
*/
?>