<?php

/*

type: layout

name: sporta buttons with icons

description: sporta buttons with icons

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
<span class="btn__icon">
    <img src="<?php print template_url(); ?>modules/layouts/svg/why-participate/skin-17.svg">
</span>
    <?php print $text; ?>
</a>
<?php endif; ?>

