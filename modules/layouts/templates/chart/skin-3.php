<?php

/*

type: layout

name: Chart 3

position: 3

*/

?>
<section class="section section-about section-chart-help edit safe-mode nodrop" field="layout-chart-skin-3-<?php print $params['id'] ?>" rel="content">
    <div class="container">
        <div class="row no-gutters about-card position-relative">
            <div class="circles circles--top-right d-none d-lg-block">
                <img src="<?php print template_url(); ?>modules/layouts/svg/chart/skin-4.svg">
            </div>
            <div class="col-md-6 order-md-2 order-lg-1">
                <div class="about-card__img">
                    <div class="rect rect--top-left rect--yellow d-none d-md-block"></div>
                    <div class="circles circles--bottom-left d-none d-lg-block">
                        <img src="<?php print template_url(); ?>modules/layouts/svg/chart/skin-5.svg">
                    </div>
                    <picture>
                        <source srcset="<?php print template_url(); ?>images/chart-img-1-mobile.jpg" media="(max-width: 767px)">
                        <source srcset="<?php print template_url(); ?>images/chart-img-1-tablet.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <img src="<?php print template_url(); ?>images/chart-img-1.jpg" alt="">
                    </picture>
                </div>
            </div>
            <div class="col-md-6 col-lg-5 offset-lg-1 order-1">
                <div class="about-card-content">
                    <h2 class="about-card__title">Heed help?</h2>
                    <p class="about-card__text  about-card__text--max-width">We are happy to help you.</p>
                    <div class="about-card__wrap-btn">
                        <module type="btn" template="sporta-buttons" button_style="btn btn-animate btn-green" button_text="Contact us"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
