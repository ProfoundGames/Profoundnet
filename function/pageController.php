<?php
    
    @include '/include/social.php';
    
    $page = htmlspecialchars($_GET["page"]);
    
     if (empty($page)) {
                include '/page/home.php';
            }elseif ($page == home){
                header('Location: /');
            } else {
                if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/page/' . $page . '.php')) {
                    include $_SERVER['DOCUMENT_ROOT'] . '/page/' . $page . '.php';
                } else {
                    include '/error/404.php';
                }
            }
    
?>