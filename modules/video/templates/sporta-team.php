<?php
/*
type: layout
name: Button dialog sporta team
description: Opens video in a popup
*/
?>

<script>
    $(document).ready(function () {

        $('#video-dialog-button-<?php echo $params['id']; ?>').on('click', function (){
            $('#video-dialog-template-<?php echo $params['id']; ?>').mwDialog({
                header: false,
                skin: 'video',
                closeButtonAppendTo: '.mw-dialog-holder'
            });
            var dialog = mw.dialog.get()

            mw.spinner(({element: dialog.dialogContainer, size: 30})).show();
            $('iframe', dialog.dialogContainer).on('load', function (){
                mw.spinner(({element: dialog.dialogContainer, size: 30})).remove();
            })
        })

    });
</script>




<template id="video-dialog-template-<?php echo $params['id']; ?>" style="display: none"><?php echo $code; ?></template>
<span id="video-dialog-button-<?php echo $params['id']; ?>">Play</span>


<figure class="wrapper-video-content mb-0">
    <div class="embed-responsive embed-responsive-16by9 video-wrap">
        <div class="poster-video">
            <img src="<?php print template_url(); ?>images/about-img-2.jpg" class="img-cover"
                 alt="">
            <div class="btn-play btn-play--green js-video-play"></div>
        </div>

        <div class="embed-responsive-item js-video-player" data-youtube-id="DnGdoEa1tPg"
             id="player2"></div>
    </div>
</figure>
