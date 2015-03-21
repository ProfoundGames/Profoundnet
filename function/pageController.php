<?php

$page = '';

if (!empty(htmlspecialchars($_GET["page"]))) {
    $page = htmlspecialchars($_GET["page"]);
}


kint::dump($page);

if (empty($page)) {
    include '/page/home.php';
}
else {
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/page/' . $page . '.php')) {
        include $_SERVER['DOCUMENT_ROOT'] . '/page/' . $page . '.php';
    }
    else {
        include '/error/404.php';
    }
}
?>