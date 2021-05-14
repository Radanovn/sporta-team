<?php

/*

type: layout

name: Default mobile

description: Default mobile Menu skin

*/

?>
<?php
$menu_filter['return_data'] = true;

$menuTree = menu_tree($menu_filter);

if(!isset($menuTree) || !is_array($menuTree)) {
    return '';
}
$html = '';
?>

<div class="nav-bar">
    <?php
    foreach ($menuTree as $item) {
        $html .= '<a class="nav-link" href="'.$item['url'].'">';
        $html .= '<span>'.$item['title'].'</span></a>';
    }
    print $html;
    ?>
</div>
