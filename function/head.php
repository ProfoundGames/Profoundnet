<?php

if (file_exists('DV.php')) {
    include_once 'DV.php';
}

$dv = new DV();

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
    $includeCSS[] .= $_SERVER['DOCUMENT_ROOT'] . '/css/materialize.min.css';
}else {
    echo'<h1>Something went wrong</p>';
    die();
}

if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/css/default.css')) {
    $includeCSS[] .= $_SERVER['DOCUMENT_ROOT'] . '/css/default.min.css';
}else {
    echo'<h1>Something went wrong</p>';
    die();
}

foreach ($includeCSS as $value) {
    $headContent .= '<link href="' . $value . '" rel="stylesheet" type="text/css"/>';
}

?>

<?php echo $headContent; ?>