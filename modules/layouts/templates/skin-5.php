<?php

/*

type: layout

name: skin-5

position: 5

*/

?>

<section class="section section-about nodrop edit" field="layout-skin-5-<?php print $params['id'] ?>" rel="content">
    <div class="container">
        <div class="row no-gutters about-card">
            <div class="col-12 col-lg-6">
                <div class="about-card__img">
                    <div class="rect rect--top-left rect--green d-none d-lg-block"></div>
                    <div class="circles circles--bottom-left d-none d-lg-block">
                        <img src="<?php print template_url(); ?>modules/layouts/svg/skin-5-svg-2.svg">
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
                        <module type="btn" class="allow-drop"  template="sporta-card-links-with-icons" button-style="green text-decoration-none" button_text="Find out more"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
