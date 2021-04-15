<?php

/*

type: layout

name: Footer

description: Footer menu

*/

?>

<?php
$menu_filter['ul_class'] = "list-unstyled footer__submenu";


$menu_filter['link'] = '<a itemprop="url" data-item-id="{id}"  href="{url}">{title}</a>';
$mt = menu_tree($menu_filter);

if ($mt != false) {
    print ($mt);
} else {
    print lnotif("There are no items in the menu <b>" . $params['menu-name'] . '</b>');
}
?>

