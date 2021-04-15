<?php

/*

type: layout

name: Header bottom

description: bottom menu

*/

?>


<?php
$menu_filter['ul_class'] = 'navbar-nav nav-justified w-100';
$menu_filter['ul_class_deep'] = 'dropdown-menu';
$menu_filter['li_class'] = 'nav-item dropdown';
$menu_filter['a_class'] = 'nav-link dropdown-toggle';

$menu_filter['li_submenu_class'] = 'dropdown';
$menu_filter['li_submenu_a_class'] = 'dropdown-toggle';

$menu_filter['link'] = '<a itemprop="url" data-item-id="{id}" class="menu_element_link {active_class} {exteded_classes} {nest_level} {a_class}"  href="{url}" role="button" aria-haspopup="true" aria-expanded="false"><span>{title}</span></a>';
$menu_filter['li_submenu_a_link'] = '<a itemprop="url" data-item-id="{id}" href="{url}" class="menu_element_link {active_class} {exteded_classes} {nest_level} {li_submenu_a_class}" aria-haspopup="true" aria-expanded="false"><span class="name">{title}</span> <span class="caret"></span></a>';

$mt = menu_tree($menu_filter);

if ($mt != false) {
    print ($mt);
} else {
    print lnotif("There are no items in the menu <b>" . $params['menu-name'] . '</b>');
}
?>



