<?php

/*

type: layout

name: Template for the main navigation

description: The menu which is just before content

*/

$menu_filter['return_data'] = true;
$menuTree = menu_tree($menu_filter);
$isMega = isset($params["is-mega"]) and $params["is-mega"] === 'true';

if(!function_exists('headerSportaMenuItem')) {
    function headerSportaMenuItem($items, $level = -1): string
    {
        $level++;
        if(!isset($items) || !is_array($items)) {
            return '';
        }
        $html = '';
        if ($level === 0) {
            foreach ($items as $item) {
                $html .= '<a class="dropdown-item" href="'.$item['url'].'">';
                if($item['default_image']) {
                    $html .= '<span class="dropdown-item__icon"><img alt="" src="'.$item['default_image'].'"></span>';
                }
                $html .= '<span>'.$item['title'].'</span></a>';
                $html .= headerSportaMenuItem($item['children'], $level);
            }
        } else {
            $html .= '<ul class="list-unstyled dropdown-item__sublist">';
            foreach ($items as $item) {
                $html .= ('<li><a href="'.$item['url'].'">' . $item['title'] . '</a>' . headerSportaMenuItem($item['children'], $level) . '</li>');
            }
            $html .= '</ul>';
        }
        return $html;
    }
}
is_array($menuTree) ? print headerSportaMenuItem($menuTree) : print lnotif("There are no items in the menu <b>" . $params['menu-name'] . '</b>')
?>
