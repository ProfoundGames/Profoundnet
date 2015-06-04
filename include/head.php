<?php
    $css = array(
        'materialize.min',
    );
    
    $jScript = array(
        'jquery-2.1.4.min',
        'materialize.min',
    );
    
    foreach ($jScript as $value) {
?>

<script src="/js/<?= $value ?>.js" type="text/javascript"></script>
<?php } 

 foreach ($css as $value) {
    ?>
<script src="/css/<?= $value ?>.css"></script>
 <?php } ?>

