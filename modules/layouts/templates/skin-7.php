<?php

/*

type: layout

name: skin-7

position: 7

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

<section class="section section-contact <?php print $layout_classes; ?> nodrop edit" field="layout-skin-7-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row no-gutters">
            <div class="d-none d-lg-block col-lg-6">
                <div class="section-contact__wrap-img edit safe-mode">
                    <div class="rect rect--bottom-left rect--yellow d-none d-lg-block"></div>
                    <div class="circles circles--bottom-left d-none d-lg-block">
                        <img src="<?php print template_url(); ?>modules/layouts/templates/svg/skin-7-svg-1.svg">
                    </div>
                    <img src="<?php print template_url(); ?>images/contact-img.jpg" alt="">
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="section-contact__content mx-auto ml-lg-0">
                    <div class="section__block-title text-center text-lg-left mx-auto ml-lg-0 edit safe-mode">
                        <h2>Request <span class="d-none d-lg-inline"><br></span>a free price-offer</h2>
                        <p class="lead-text">Nog niet overtuigd? Of heb je nog hulp nodig? Sed do eiusmod tempor incididunt u tempor incididun. Sed do eiusmod tempor.</p>
                    </div>
                    <module type="contact_form" template="sporta-newsletter-form"/>
                </div>
            </div>
        </div>
    </div>
</section>
