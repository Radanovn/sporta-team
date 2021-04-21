<?php

/*

type: layout

name: Chart 1

position: 1

*/

?>
<section class="section section-about section-chart-hero edit safe-mode nodrop" field="layout-chart-skin-1-<?php print $params['id'] ?>" rel="content">
    <div class="container">
        <div class="row no-gutters about-card position-relative">
            <div class="circles circles--top-right d-none d-lg-block">
                <img src="<?php print template_url(); ?>modules/layouts/svg/chart/skin-1.svg">
            </div>
            <div class="col-lg-6">
                <div class="about-card-content">
                    <h1 class="about-card__title"><span class="text-green">EXTRA OPTIONS</span> YEAR-BASED SPORTS IN&#8209;SURANCE</h1>
                    <p class="about-card__text">The pinnacle of versatility ... is giving sports clubs the opportunity to request additional insurance options.</p>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="about-card__img about-card__img--ml">
                    <picture>
                        <source srcset="<?php print template_url(); ?>images/chart-hero-img-mobile.svg" media="(max-width: 479px)">
                        <img src="<?php print template_url(); ?>images/chart-hero-img.svg" alt="">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</section>
