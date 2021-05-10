<?php

/*

type: layout

name: Footer

description: Footer menu

*/
?>

<?php
$menu_filter['return_data'] = true;
$mt = menu_tree($menu_filter);

if (is_array($mt)) {
    foreach($mt as $item) {
        if (isset($item['url'])): ?>
            <ul class="list-unstyled footer__submenu">
                <a itemprop='<?php print $item['url'] ?>' data-item-id='<?php print $item['id'] ?>' href='<?php print $item['url'] ?>'>
                    <?php print $item['title'] ?>
                </a>
            </ul>

        <?php else : ?>
            <a>
                <?php print $item['title'] ?>
            </a>
        <?php endif;
    }

} else {
    print lnotif("There are no items in the menu <b>" . $params['menu-name'] . '</b>');
}
?>

