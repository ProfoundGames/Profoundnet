<?php
    
    @include '/include/social.php';
    
     if (empty($page)) {
                include '/page/home.php';
            }elseif ($page == home){
                header('Location: /');
            }elseif ($page == i){
                header('Location: /i/index.php');
            } else {
                if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/page/' . $page . '.php')) {
                    include $_SERVER['DOCUMENT_ROOT'] . '/page/' . $page . '.php';
                } else {
                    include '/error/404.php';
                }
            }
    
?>