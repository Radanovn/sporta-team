<?php

/*

type: layout

name: Sporta link

description: Sporta template for link buttons

*/
?>

<?php if($action == 'submit'): ?>
    <button type="submit" id="<?php print $btn_id ?>" class="btn <?php print $style . ' ' . $size; ?>"><?php print $text; ?></button>
<?php else: ?>
    <a id="<?php print $btn_id ?>" href="<?php print $url; ?>" <?php if ($blank) {
        print ' target="_blank" ';
    } ?>class="st-email">
        <span><?php print $text; ?></span>
    </a>
<?php endif; ?>




