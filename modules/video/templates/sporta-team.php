<?php
/*
type: layout
name: Inline video
description: Opens video Inline
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
    .mwembed{
        height: 100% !important;
    }
</style>
<template id="video-dialog-template-<?php echo $params['id']; ?>" style="display: none"><?php echo $code; ?></template>
<div class="poster-video">
    <img src="<?php print isset($thumb) ? $thumb : '#'; ?>" />
    <div class="btn-play btn-play--green js-video-play" id="video-dialog-button-<?php echo $params['id']; ?>"></div>
</div>
