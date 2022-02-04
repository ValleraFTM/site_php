<?php
require_once 'config/db.php';
require_once 'core/function_db.php';
require_once "core/function.php";

$conn = connect();
$route = $_GET['route'];
$route = explodeURL($route);

//main page
// cat category page
// article статьи 
switch ($route) {
    case ($route[0] == '') :
        require_once "template/main.php";
        break;
    case ($route[0] =='article' AND isset($route[1])):
        $url = $route[1];
        $result = getArticle($url);
        require_once 'template/article.php';
        break;

    default:
        echo "i not 0";
}