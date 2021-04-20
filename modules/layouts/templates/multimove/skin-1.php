<?php

/*

type: layout

name: Multimove 1

position: 1

*/

?>
<section class="section section-about section-multimove-hero edit safe-mode nodrop" field="layout-multimove-skin-1-<?php print $params['id'] ?>" rel="content">
    <div class="container">
        <div class="row no-gutters about-card">
            <div class="col-lg-5 order-1">
                <div class="about-card-content">
                    <h1 class="about-card__title">MULTIMOVE</h1>
                    <p class="about-card__text">Multimove is a varied movement program where preschoo-lers improve their movement skills based on twelve crucial movement skills. Because these “moves” are independent of a sport, the child does not yet cling to one sport, so that it can discover for itself what kind of sport he or she prefers to do.</p>
                </div>
            </div>
            <div class="col-lg-6 order-0 order-lg-1">
                <div class="about-card__img about-card__img--ml">
                    <div class="rect rect--top-right rect--yellow d-none d-lg-block"></div>
                    <div class="circles circles--top-right d-none d-lg-block">
                        <img src="<?php print template_url(); ?>modules/layouts/templates/svg/multimove/skin-1.svg">
                    </div>
                    <picture>
                        <source srcset="<?php print template_url(); ?>images/multimove-hero-img-mobile.jpg" media="(max-width: 479px)">
                        <source srcset="<?php print template_url(); ?>images/multimove-hero-img-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                        <img src="<?php print template_url(); ?>images/multimove-hero-img.jpg" alt="">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</section>
