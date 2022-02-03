<?php
require_once 'config/db.php';
require_once 'core/function_db.php';
require_once "core/function.php";

$conn = connect();
$route = $_GET['route'];


//main page
// cat category page
// article статьи 
switch ($route) {
    case NULL :
        require_once "template/main.php";
        break;

    default:
        echo "i not 0";
}