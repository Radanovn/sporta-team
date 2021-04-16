<?php

/*

type: layout

name: skin-6

position: 6

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-100';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-100';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section section-news bg-gray <?php print $layout_classes; ?> nodrop edit" field="layout-skin-6-<?php print $params['id'] ?>" rel="module">
        <div class="container">
            <div class="section__block-title text-center">
                <h2>News</h2>
            </div>
            <!--MODULE POSTLIST-->
            <module type="posts" template="default"/>
            <div class="section-wrapper-btn text-center">
                <module type="btn" template="sporta-buttons" button_style="btn-green"/>
            </div>
        </div>
</section>
