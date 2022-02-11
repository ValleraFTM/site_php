<!DOCTYPE html>
<html lang="en"
<head>
    <meta charset="UTF-8">
    <title>bamboo_bamboo</title>
</head>
<body>
<p>the material for the site is taken from bambubatu.com for educational purposes,
     and completely belongs to them, I'm just learning how to make websites and 
     will remove all articles on the first demand. my telegram <a href="https://t.me/ValleraFTM">Vallera</a>
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
    case ($route[0] =='cat' AND isset($route[1])):
            $url = $route[1];
            $cat = getCat($url);
            $result = getCatArticle($cat[0]['id']);
            require_once 'template/cat.php';
            break;
    case ($route[0] =='register'):
       require_once 'template/register.php';
        break;
    case ($route[0] =='login'):
        require_once 'template/login.php';
        break; 
     

    default:
        require_once 'template/404.php';
        
}
?>
</body>
</html>