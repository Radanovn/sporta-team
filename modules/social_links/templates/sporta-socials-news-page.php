<?php

/*

type: layout

name: Sporta socials

description: Sporta socials

*/
?>
<div class="single-post__socials-links">
    <?php if ($social_links_has_enabled == false) {
        print lnotif('Social links');
    } ?>


    <?php if ($facebook_enabled) { ?>
        <a href="//facebook.com/<?php print $facebook_url; ?>" target="_blank">
            <img src="<?php print template_url(); ?>modules/layouts/svg/news_inner/skin-15.svg">
        </a>
    <?php } ?>

    <?php if ($twitter_enabled) { ?>
        <a href="//twitter.com/<?php print $twitter_url; ?>" target="_blank">
            <img src="<?php print template_url(); ?>modules/layouts/svg/news_inner/skin-16.svg">
        </a>
    <?php } ?>

    <?php if ($linkedin_enabled) { ?>
        <a href="//linkedin.com/<?php print $linkedin_url; ?>" target="_blank">
            <img src="<?php print template_url(); ?>modules/layouts/svg/news_inner/skin-17.svg">
        </a>
    <?php } ?>

    <!-- MW -->
    <?php if ($googleplus_enabled) { ?>
        <li class="mx-1"><a href="//plus.google.com/<?php print $googleplus_url; ?>" target="_blank" class="text-primary"><i class="mdi mdi-google-plus mdi-24px"></i></a></li>
    <?php } ?>

    <?php if ($pinterest_enabled) { ?>
        <li class="mx-1"><a href="//pinterest.com/<?php print $pinterest_url; ?>" target="_blank" class="text-primary"><i class="mdi mdi-pinterest mdi-24px"></i></a></li>
    <?php } ?>

    <?php if ($youtube_enabled) { ?>
        <li class="mx-1"><a href="//youtube.com/<?php print $youtube_url; ?>" target="_blank" class="text-primary"><i class="mdi mdi-youtube mdi-24px"></i></a></li>
    <?php } ?>

    <?php if ($instagram_enabled) { ?>
        <li class="mx-1"><a href="https://instagram.com/<?php print $instagram_url; ?>" target="_blank" class="text-primary"><i class="mdi mdi-instagram mdi-24px"></i></a></li>
    <?php } ?>

    <?php if ($github_enabled) { ?>
        <li class="mx-1"><a href="//github.com/<?php print $github_url; ?>" target="_blank" class="text-primary"><i class="mdi mdi-github mdi-24px"></i></a></li>
    <?php } ?>

    <?php if ($soundcloud_enabled) { ?>
        <li class="mx-1"><a href="//soundcloud.com/<?php print $soundcloud_url; ?>" target="_blank" class="text-primary"><i class="mdi mdi-soundcloud mdi-24px"></i></a></li>
    <?php } ?>

    <?php if ($mixcloud_enabled) { ?>
        <li class="mx-1"><a href="//mixcloud.com/<?php print $mixcloud_url; ?>" target="_blank" class="text-primary"><i class="fab fa-mixcloud mdi-24px"></i></a></li>
    <?php } ?>

    <?php if ($medium_enabled) { ?>
        <li class="mx-1"><a href="//medium.com/<?php print $medium_url; ?>" target="_blank" class="text-primary"><i class="fab fa-medium mdi-24px"></i></a></li>
    <?php } ?>
</div>
