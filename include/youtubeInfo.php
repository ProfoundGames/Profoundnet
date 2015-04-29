<?php
    
    include '/settings.php';
    
    $channelInfo = file_get_contents('https://www.googleapis.com/youtube/v3/channels?part=contentDetails&id='. $settings[youtubeInfo][channelID] .'&maxResults=15&key=' . $settings[youtubeInfo][devKey]);
    $channelInfo = json_decode($channelInfo);
    $channelUploadID = $channelInfo->items[0]->contentDetails->relatedPlaylists->uploads;
    
    $channelUploads = file_get_contents('https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=5&playlistId=' . $channelUploadID . '&key='. $settings[youtubeInfo][devKey]);
    $channelUploads = json_decode($channelUploads);   
    $channelUploadItems = $channelUploads->items;
    
    $pageContent;
    
    $pageContent .= '';
    
    foreach ($channelUploadItems as $value) {
    
        $pageContent .= '<div class="parallax-container">
                            <div class="parallax"><img src="'. $value->snippet->thumbnails->maxres->url .'"></div>
                        </div>
                        <div class="section white youtube z-depth-2 '. $value->snippet->resourceId->videoId .'">
                            <div class="row container" style="width: 100%; max-width: none;">
                                <h3 class="header" style="height: auto !important;">'. $value->snippet->title .'</h3>
                               <div class="videoWrapper">
                                    <iframe class="z-depth-1 YoutubePlayer YoutubePlayer'. $value->snippet->resourceId->videoId .'" width="640" height="390" src="http://www.youtube.com/embed/'. $value->snippet->resourceId->videoId .'?controls=2" frameborder="0" allowfullscreen controls=0></iframe>
                                </div>
                            </div>
                        </div>
                        <script>
                        $(document).ready(function () {
                            $( ".YoutubePlayer'. $value->snippet->resourceId->videoId .'" ).hover(
                                function() {
                                    $(this).addClass("z-depth-5");
                                    $(this).addClass("youtubePlayerHover");
                                    $(this).removeClass("z-depth-1");
                                }, function() {
                                    $(this).addClass("z-depth-1");
                                    $(this).removeClass("z-depth-5");
                                    $(this).removeClass("youtubePlayerHover");
                                }
                            );
                        });
                        </script>

';        
}
    
    //var_dump($settings[youtubeInfo][channelID]);
    
?>

<script>
    $(document).ready(function(){
      $('.parallax').parallax();
    });
</script>

<?php echo $pageContent; ?>