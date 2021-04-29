<?php

/*

type: layout

name: Why participate 7

position: 7

*/

?>
<section class="section section-about section-participate-about edit safe-mode nodrop" field="layout-why-participate-skin-7-<?php print $params['id'] ?>" rel="content">
    <div class="container">
        <div class="row no-gutters about-card about-card--more-options">
            <div class="col-lg-6">
                <div class="about-card__img">
                    <div class="rect rect--top-left rect--yellow d-none d-lg-block"></div>
                    <div class="circles circles--bottom-left d-none d-lg-block">
                        <img src="<?php print template_url(); ?>modules/layouts/svg/why-participate/skin-16.svg">
                    </div>
                    <picture>
                        <source srcset="<?php print template_url(); ?>images/vizit-img-mobile.jpg" media="(max-width: 479px)">
                        <source srcset="<?php print template_url(); ?>images/vizit-img-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                        <img src="<?php print template_url(); ?>images/vizit-img.jpg" alt="">
                    </picture>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="about-card-content">
                    <h3 class="about-card__title">Want more options?</h3>
                    <p class="about-card__text">Find out how to expand your insurance options here. policy details and insurance manual.</p>
                    <div class="about-card__wrap-btn">
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur elit</p>
                        <module type="btn" template="download-button-with-icon" button_style="btn btn-animate btn-red" button_text="Download">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
