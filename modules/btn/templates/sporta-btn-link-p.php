<?php

/*

type: layout

name: Sporta link p

description: Sporta template for link buttons paragraph

*/
?>

<?php if($action == 'submit'): ?>
    <button type="submit" id="<?php print $btn_id ?>" class="btn <?php print $style . ' ' . $size; ?>"><?php print $text; ?></button>
<?php else: ?>
    <p id="<?php print $btn_id ?>" href="<?php print $url; ?>" <?php if ($blank) {
        print ' target="_blank" ';
    } ?>class="st-address">
        <span><?php print $text; ?></span>
    </p>
<?php endif; ?>




