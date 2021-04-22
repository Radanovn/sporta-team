<?php

/*

type: layout

name: Sporta gallery

description: Sporta gallery picture list template

*/

?>
<?php if (is_array($data)): ?>
    <?php $rand = uniqid(); ?>
    <div class="mw-module-images<?php if ($no_img) { ?> no-image<?php } ?>">
        <div class="gallery-slider js-gallery-slider" id="mw-gallery-<?php print $rand; ?>">
            <?php $count = -1; foreach ($data as $item): ?>
                <?php $count++; ?>
                <div>
                    <img src="<?php print thumbnail($item['filename'], 600); ?>"/>
                </div>
            <?php endforeach;  ?>
        </div>
    </div>
<?php else : ?>
<?php endif; ?>

