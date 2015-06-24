    
<title>Ian Wijma (Profound Games)</title>
<meta name=viewport content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" type="image/ico" href="/images/favicon.ico">
<?php
    $css = array(
        'materialize.min',
        'default',
    );
    
    $jScript = array(
        'jquery-2.1.4.min',
        'materialize.min',
        'default',
    );
    
    foreach ($jScript as $value) {
?>

<script src="/js/<?= $value ?>.js" type="text/javascript"></script>
<?php } 

 foreach ($css as $value) {
    ?>
<link href="/css/<?= $value ?>.css" rel="stylesheet" type="text/css"/>
 <?php } ?>

