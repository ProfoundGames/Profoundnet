<?php
    
    @include '/include/social.php';
    
     if (empty($page)) {
                include '/page/home.php';
            }elseif ($page == 'home'){
                header('Location: /');
            }elseif ($page == 'i'){
                header('Location: /i/index.php');
            }elseif ($page == 'pdfGen'){
                header('Location: /pdfGen/index.php');
            } else {
                if (file_exists(filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/page/' . $page . '.php')) {
                    include filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/page/' . $page . '.php';
                } else {
                    include '/error/404.php';
                }
            }
    
?>