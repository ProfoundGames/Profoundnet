<?php
    
    include '/settings.php';
    
    $channelInfo = file_get_contents('https://www.googleapis.com/youtube/v3/channels?part=contentDetails&id='. $settings[youtubeInfo][channelID] .'&maxResults=15&key=' . $settings[youtubeInfo][devKey]);
    //var_dump($channelInfo);
    $channelInfo = json_decode($channelInfo);
    $channelUploadID = $channelInfo->items[0]->contentDetails->relatedPlaylists->uploads;
    
    $channelUploads = file_get_contents('https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults='. $settings[youtubeInfo][amountOfItems] .'&playlistId=' . $channelUploadID . '&key='. $settings[youtubeInfo][devKey]);
    $channelUploads = json_decode($channelUploads);   
    $channelUploadItems = $channelUploads->items;
    
    $pageContent;
    
    $pageContent .= '<script>
                        $(document).on("pagecontainerload",function(){
                            alert("pagecontainerload event fired!");
                        });
                        $(document).ready(function () {
                            $(".page-footer").css({ "margin-top": "0px"});
                            $(".tooltipped").tooltip({delay: 50});
                        });
                        </script>'
                        
            ;
    
    foreach ($channelUploadItems as $value) {
    
        $pageContent .= '
                        <div class="section white youtube z-depth-2 '. $value->snippet->resourceId->videoId .'">
                            <div class="row container youtubeContainer" style="width: 100%; max-width: none;">
                                <h3 class="header" style="height: auto !important;">'. $value->snippet->title .'</h3>
                                <a class="waves-effect waves-light btn tooltipped" data-position="left" data-delay="50" data-tooltip="Open on Youtube" href="https://www.youtube.com/watch?v='. $value->snippet->resourceId->videoId .'">Youtube</a>
                                <div class="videoWrapper">
                                    <iframe class="YoutubePlayer YoutubePlayer'. $value->snippet->resourceId->videoId .'" width="1920" height="1080" src="http://www.youtube.com/embed/'. $value->snippet->resourceId->videoId .'?controls=2" frameborder="0" allowfullscreen controls=0></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="parallax-container">
                            <div class="parallax"><img src="'. $value->snippet->thumbnails->maxres->url .'"></div>
                        </div>
                        <script>
                        $(document).ready(function () {
                            $( ".YoutubePlayer'. $value->snippet->resourceId->videoId .'" ).hover(
                                function() {
                                    $(this).addClass("z-depth-5");
                                    $(this).addClass("youtubePlayerHover");
                                }, function() {
                                    $(this).removeClass("z-depth-5");
                                    $(this).removeClass("youtubePlayerHover");
                                }
                            );
                        });
                        </script>

';        
}
    
    
    
?>

<script>
    $(document).ready(function(){
      $('.parallax').parallax();
    });
</script>

<?php echo $pageContent; ?>