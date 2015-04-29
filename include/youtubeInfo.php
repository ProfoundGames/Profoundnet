<?php
    
    include '/settings.php';
    
    $channelInfo = file_get_contents('https://www.googleapis.com/youtube/v3/channels?part=contentDetails&id='. $settings[youtubeInfo][channelID] .'&maxResults=15&key=' . $settings[youtubeInfo][devKey]);
    $channelInfo = json_decode($channelInfo);
    $channelUploadID = $channelInfo->items[0]->contentDetails->relatedPlaylists->uploads;
    
    $channelUploads = file_get_contents('https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=5&playlistId=' . $channelUploadID . '&key='. $settings[youtubeInfo][devKey]);
    $channelUploads = json_decode($channelUploads);   
    $channelUploadItems = $channelUploads->items;
    
    $pageContent;
    
    foreach ($channelUploadItems as $value) {
    
        $pageContent .= '<div class="parallax-container">
                            <div class="parallax"><img src="'. $value->snippet->thumbnails->maxres->url .'"></div>
                        </div>
                        <div class="section white">
                            <div class="row container" style="width: 100%; max-width: none;">
                                <h3 class="header" style="height: auto !important;">'. $value->snippet->title .'</h3>
                               <div class="videoWrapper">
                                    <iframe width="560" height="349" src="http://www.youtube.com/embed/'. $value->snippet->resourceId->videoId .'" frameborder="0" allowfullscreen controls=0></iframe>
                                </div>
                            </div>
                        </div>';
                
        
}
    
    //var_dump($settings[youtubeInfo][channelID]);
    
?>

<script>
    $(document).ready(function(){
      $('.parallax').parallax();
    });
</script>

<?php echo $pageContent; ?>