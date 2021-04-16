<?php

/*

type: layout

name: skin-5

position: 5

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

<section class="section section-about<?php print $layout_classes; ?> nodrop edit" field="layout-skin-5-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="section__block-title text-center edit safe-element">
            <h2>About Sporta Team</h2>
        </div>
        <div class="row no-gutters about-card">
            <div class="col-12 col-lg-5 order-1">
                <div class="about-card-content pl-lg-1 ">
                    <h3 class="about-card__title">Our <span class="text-red">mission</span> and vision</h3>
                    <p class="about-card__text  about-card__text--max-width">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                    <div class="about-card__wrap-link">
                        <module type="btn" template="sporta-links-with-icons" button-style="red text-decoration-none"/>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 order-0 order-lg-1">
                <div class="about-card__img about-card__img--ml">
                    <div class="rect rect--top-right rect--red d-none d-lg-block"></div>
                    <div class="circles circles--top-right d-none d-lg-block">
                        <img src="<?php print template_url(); ?>modules/layouts/templates/svg/skin-5-svg-1.svg">
                    </div>
                    <picture>
                        <source srcset="<?php print template_url(); ?>images/about-img-1-mobile.jpg" media="(max-width: 479px)">
                        <source srcset="<?php print template_url(); ?>images/about-img-1-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                        <img src="<?php print template_url(); ?>images/about-img-1.jpg" alt="">
                    </picture>

                </div>
            </div>
        </div>
        <div class="row no-gutters about-card">
            <div class="col-12 col-lg-6">
                <div class="about-card__img">
                    <div class="rect rect--top-left rect--green d-none d-lg-block"></div>
                    <div class="circles circles--bottom-left d-none d-lg-block">
                        <img src="<?php print template_url(); ?>modules/layouts/templates/svg/skin-5-svg-2.svg">
                    </div>
                    <picture>
                        <source srcset="<?php print template_url(); ?>images/about-img-2-mobile.jpg" media="(max-width: 479px)">
                        <source srcset="<?php print template_url(); ?>images/about-img-2-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                        <img src="<?php print template_url(); ?>images/about-img-2.jpg" alt="">
                    </picture>
                </div>
            </div>
            <div class="col-12 col-lg-5 offset-lg-1">
                <div class="about-card-content">
                    <h3 class="about-card__title">Our team <span class="text-green">support</span></h3>
                    <p class="about-card__text  about-card__text--max-width">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet. Exercitation veniam consequat sunt nostrud amet.</p>
                    <div class="about-card__wrap-link">
                        <module type="btn" template="sporta-links-with-icons" button-style="green text-decoration-none"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
