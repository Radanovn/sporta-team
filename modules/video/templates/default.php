<?php
/*
type: layout
name: Default
description: Default
*/
?>

<script>
    $(document).ready(function () {
        $('#video-dialog-button-<?php echo $params['id']; ?>').on('click', function (){
            $(this).parent().html('<div class="embed-responsive-item js-video-player" id="player-<?php echo $params['id']; ?>">' + $('#video-dialog-template-<?php echo $params['id']; ?>').html() + '</div>')
        })
    });
</script>
<style>
    #poster-video-<?php echo $params['id']; ?>{
        position: relative;
        height: <?php print $w ?>px;
        width:  <?php print $h ?>px;
    }
    #poster-video-<?php echo $params['id']; ?>:before {
        content: none;
        display: none;
    }
</style>
<template id="video-dialog-template-<?php echo $params['id']; ?>" style="display: none"><?php    echo $code; ?></template>
<div class="poster-video" id="poster-video-<?php echo $params['id']; ?>">
    <img src="<?php print isset($thumb) ? $thumb : pixum(300, 200); ?>" />
    <div class="btn-play btn-play--green js-video-play" id="video-dialog-button-<?php echo $params['id']; ?>"></div>
</div>


