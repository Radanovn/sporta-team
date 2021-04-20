<?php

/*

type: layout

name: Download links red

description: Download links red

*/
?>
 
<?php if($action == 'submit'): ?>
<button type="submit" id="<?php print $btn_id ?>" class="<?php print $style ?>">
    <?php print $text; ?>
</button>
<?php else: ?>
<a id="<?php print $btn_id ?>" href="<?php print $url; ?>" <?php if ($blank) {
    print ' target="_blank" ';
} ?> class="<?php print $style ?>">
    <span class="link-download__text link-download__text--decoration"> <?php print $text; ?> </span>
    <span class="link-download__icon"><img src="<?php print template_url(); ?>modules/layouts/svg/news_inner/skin-14.svg"></span>
</a>
<?php endif; ?>
