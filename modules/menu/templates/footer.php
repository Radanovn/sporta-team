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
var_dump($mt);
if (is_array($mt)) { ?>
    <ul class="list-unstyled footer__submenu">
        <?php foreach($mt as $item) {
            if (isset($item['url']) AND $item['url']): ?>
            <?php var_dump($item['children']); ?>
                <li>
                    <a itemprop='<?php print $item['url'] ?>' data-item-id='<?php print $item['id'] ?>' href='<?php print $item['url'] ?>'>
                        <?php print $item['title'] ?>
                    </a>
                </li>
            <?php else : ?>
                <li>
                    <a class="footer__menu-link"><?php print $item['title'] ?></a>
                </li>
            <?php endif;
        } ?>
    </ul>
    <?php


} else {
    print lnotif("There are no items in the menu <b>" . $params['menu-name'] . '</b>');
}
?>

