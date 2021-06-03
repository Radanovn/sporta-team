<?php
/*
type: layout
name: Demo video (with circles)
description: Demo video
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
            $('iframe,video', dialog.dialogContainer).on('load canplay', function (){
                mw.spinner(({element: dialog.dialogContainer, size: 30})).remove();
            })
        })

    });
</script>
<style>

    #video-dialog-button-<?php echo $params['id']; ?>{
        font-size: 0;
        font-fa
    }

</style>
<template id="video-dialog-template-<?php echo $params['id']; ?>" style="display: none"><?php echo $code; ?></template>


<div class="poster-video background-image-holder">
    <div class="btn-play btn-play--back btn-play--green position-absolute d-none d-md-block">
        <div class="btn-play__circle btn-play__circle--1"></div>
        <div class="btn-play__circle btn-play__circle--2"></div>
        <div class="btn-play__circle btn-play__circle--3"></div>
    </div>
    <img src="<?php print isset($thumb) ? $thumb : '#'; ?>" class="img-cover" alt="">
    <div class="btn-play btn-play--green position-absolute js-video-modal-play" id="video-dialog-button-<?php echo $params['id']; ?>"></div>
</div>
