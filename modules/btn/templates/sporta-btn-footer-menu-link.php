<?php

/*

type: layout

name: Sporta footer menu link

description: Sporta template for footer link buttons

*/
?>

<?php if($action == 'submit'): ?>
    <button type="submit" id="<?php print $btn_id ?>" class="btn <?php print $style . ' ' . $size; ?>"><?php print $text; ?></button>
<?php else: ?>
    <a id="<?php print $btn_id ?>" href="<?php print $url; ?>" <?php if ($blank) {
        print ' target="_blank" ';
    } ?>class="footer__menu-link">
        <span><?php print $text; ?></span>
    </a>
<?php endif; ?>




