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
            <img src="<?php print template_url(); ?>modules/layouts/templates/svg/news_inner/skin-15.svg">
        </a>
    <?php } ?>

    <?php if ($twitter_enabled) { ?>
        <a href="//twitter.com/<?php print $twitter_url; ?>" target="_blank">
            <img src="<?php print template_url(); ?>modules/layouts/templates/svg/news_inner/skin-16.svg">
        </a>
    <?php } ?>

    <?php if ($linkedin_enabled) { ?>
        <a href="//linkedin.com/<?php print $linkedin_url; ?>" target="_blank">
            <img src="<?php print template_url(); ?>modules/layouts/templates/svg/news_inner/skin-17.svg">
        </a>
    <?php } ?>
</div>
