<?php

/*

type: layout

name: Default

description: Default Menu skin

*/

?>
<?php
$menu_filter['a_class'] = 'nav-link';
$menu_filter['link'] = '<a itemprop="url" data-item-id="{id}" class="{a_class}"  href="{url}"><span>{title}</span></a>';

$mt = menu_tree($menu_filter);

if ($mt != false) {
    print ($mt);
} else {
    print lnotif("There are no items in the menu <b>" . $params['menu-name'] . '</b>');
}
?>

