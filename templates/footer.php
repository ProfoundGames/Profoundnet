<?php
    
    $dv = new DV();
    
?>

<footer class="page-footer blue-grey">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">About me</h5>
                <p class="grey-text text-lighten-4">Well because you are at the bottom of the page, you might want to know more about me! Then be sure you check out my twitter. that is the place where i'm the most active!</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Site map</h5>
                <ul>
                    <?php $dv->genMenufooter() ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            &copy; 2015 - <?php echo date("Y"); ?> Copyright Profound Games
            <a class="grey-text text-lighten-4 right" href="http://materializecss.com/" target="_blank">Proudly build using materializecss</a>
        </div>
    </div>
</footer>