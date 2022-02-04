<?php
function explodeURL($url) {
    return explode("/", $url);
}

function getArticle($url) {
    $query = "SELECT * FROM info WHERE URL='".$url."'";
    return select($query);
}