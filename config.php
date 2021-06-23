<?php

$config = array();
$config['name'] = "Sporta";
$config['description'] = "";
$config['author'] = "Microweber";
$config['version'] = 1.0;
$config['standalone_module_skins'] = true;
//$config['use_dynamic_layouts_for_posts'] = false;
$config['framework'] = "bootstrap4";


$config['data-fields-category'] = array();
$config['data-fields-category'][] = array(
    'title' => 'Category color',
    'name' => 'category-color',
    'type' => 'text'
);

$config['data-fields-post'] = array();

$config['data-fields-post'][] = array(
    'title' => 'Card title',
    'name' => 'card_title',
    'type' => 'text'
);

$config['data-fields-post'][] = array(
    'title' => 'Card text',
    'name' => 'card_text',
    'type' => 'textarea'
);

$config['data-fields-post'][] = array(
    'title' => 'Info card label',
    'name' => 'info_card_label',
    'type' => 'text'
);
$config['data-fields-post'][] = array(
    'title' => 'Info card description',
    'name' => 'info_card_description',
    'type' => 'textarea'
);
