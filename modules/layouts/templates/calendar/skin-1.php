<?php

/*

type: layout

name: Calendar 1

position: 1

*/

?>
<section class="hero-section section-calendar-hero edit safe-mode allow-drop" field="layout-calendar-skin-1-<?php print $params['id'] ?>" rel="content">
    <div class="row no-gutters">
        <div class="col-md-4 order-1 hero__content">
            <h1 class="hero__title w-100"><span class="text-red">PROJECTS</span></h1>
            <p class="hero__text w-100">Sed do eiusmod tempor incididunt u tempor incididun.</p>
        </div>
        <div class="col-md-8 order-0 order-md-1 hero__img">
            <picture>
                <source srcset="<?php print template_url(); ?>images/calendar-hero-img-mobile.jpg"
                        media="(max-width: 767px)">
                <img src="<?php print template_url(); ?>images/calendar-hero-img.jpg" alt="" class="img-cover">
            </picture>
            <div class="hero__img-decor-left bg-yellow d-none d-md-block"></div>
            <div class="hero__img-decor-right d-none d-md-block"></div>
        </div>
    </div>
    <div class="circles circles--bottom-right d-none d-lg-block">
        <img src="<?php print template_url(); ?>modules/layouts/svg/calendar/skin-1.svg">
    </div>
</section>
