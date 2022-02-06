<?php
function explodeURL($url) {
    return explode("/", $url);
}

function getArticle($url) {
    $query = "SELECT * FROM info WHERE URL='".$url."'";
    return select($query);
}
function getCat($url) {
    $query = "SELECT * FROM category WHERE URL='".$url."'";
    return select($query);
}

function getCatArticle($cid) {
    $query = "SELECT * FROM info WHERE cid='".$cid."';";
    return select($query);
}