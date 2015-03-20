<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of head
 *
 * @author ian
 */
/*
 * CHANGELOG
 * 20-3-15 15:12: initial creation
 */

$headContent;

//CSS INCLUDE
$includeCSS = array();

if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/css/materialize.min.css')) {
    $includeCSS[] = '/css/materialize.min.css';
}
else {
    echo'<h1>Something went wrong</p>';
    die();
}

if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/css/default.css')) {
    $includeCSS[] = '/css/default.css';
}
else {
    echo'<h1>Something went wrong</p>';
    die();
}

foreach ($includeCSS as $value) {
    $headContent .= '<link href="' . $value . '" rel="stylesheet" type="text/css"/>';
}

//JAVASCRIPT INCLUDE
$includeJS = array();

if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/js/materialize.min.js')) {
    $includeJS[] .= '/js/materialize.min.js';
}
else {
    echo'<h1>Something went wrong</p>';
    die();
}

foreach ($includeJS as $value) {
    $headContent .= '<script src="' . $value . '" type="text/javascript"></script>';
}
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="/js/materialize.min.js"></script>
<script type="text/javascript" src="/js/default.js"></script>

<?php echo $headContent; ?>