<?php

/*

type: layout

name: Footer

description: Footer menu

*/


?>

<?php

$menu_filter['return_data'] = true;

$menuTree = menu_tree($menu_filter);


/*function rendItems($items): string
{
    $html = '<ul>';
    if(!isset($items) || !is_array($items)) {
        return '';
    }
    foreach ($items as $item) {
        $html .= ('<li><a href="'.$item['url'].'">' . $item['title'] . '</a>' . rendItems($item['children']) . '</li>');
    }
    return $html . '</ul>';
}*/





if(!function_exists('rendItemsSporta')) {
    function rendItemsSporta($items, $level = -1): string
    {


        $level++;
        $ulClass = $level === 0 ? 'list-unstyled footer__menu' : 'list-unstyled footer__submenu';
        $aClass = $level === 0 ? 'footer__menu-link' : '';
        $html = '<ul class="'.$ulClass.'">';
        if(!isset($items) || !is_array($items)) {
            return '';
        }
        foreach ($items as $item) {
            $html .= ('<li><a class="'.$aClass.'" href="'.$item['url'].'">' . $item['title'] . '</a>' . rendItemsSporta($item['children'], $level) . '</li>');
        }
        return $html . ($level > 0 ? '</ul>' : '');
    }
}

$contactBlock = '<div class="contact-block edit" rel="module" field="module-'.$params['id'].'"> <a href="#" class="footer__menu-link">Get in touch</a> <a href="mailto:Federatie@sporta.be" class="st-email">Federatie@sporta.be</a> <a href="tel:+32033615340" class="st-phone">+32 (0) 3 361 53 40</a><p class="st-address">Boomgaardstraat 22 Bus 50 B-2600 Berchem</p> <a href="#" class="btn btn-animate btn-red">Contact us</a></div>';

print is_array($menuTree) ? rendItemsSporta($menuTree) : lnotif("There are no items in the menu <b>" . $params['menu-name'] . '</b>');
print is_array($menuTree) ? ('<li>' . $contactBlock . '</li></ul>') : $contactBlock;



?>


<div class="dropdown-menu w-100 megamenu">
    <div class="row justify-content-between flex-xl-nowrap">
        <div class="megamenu__column">
            <a class="dropdown-item" href="#">
                                        <span class="dropdown-item__icon">
                                            <img src="<?php print template_url(); ?>modules/layouts/svg/header/skin-4.svg">
                                        </span>
                <span>Insurance</span>
            </a>
            <ul class="list-unstyled dropdown-item__sublist">
                <li>
                    <a href="#">Our sports insurance</a>
                </li>
                <li>
                    <a href="#">Additional options</a>
                </li>
                <li>
                    <a href="#">What to do in the event of an accident?</a>
                </li>
            </ul>


        </div>



    </div>
</div>


