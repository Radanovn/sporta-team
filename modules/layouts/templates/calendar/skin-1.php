<?php

/*

type: layout

name: Calendar 1

position: 1

*/

?>
<section class="hero-section section-calendar-hero edit safe-mode nodrop" field="layout-calendar-skin-1-<?php print $params['id'] ?>" rel="content">
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
        <svg width="36" height="34" viewBox="0 0 36 34" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="3.3646" cy="3.20945" r="2.78745" fill="#52B392"/>
            <circle cx="17.1551" cy="3.20945" r="2.78745" fill="#52B392"/>
            <circle cx="32.4128" cy="3.20945" r="2.78745" fill="#52B392"/>
            <circle cx="32.4128" cy="17" r="2.78745" fill="#52B392"/>
            <circle cx="17.1551" cy="17" r="2.78745" fill="#52B392"/>
            <circle cx="3.3646" cy="17" r="2.78745" fill="#52B392"/>
            <circle cx="3.3646" cy="30.7905" r="2.78745" fill="#52B392"/>
            <circle cx="17.1551" cy="30.7905" r="2.78745" fill="#52B392"/>
            <circle cx="32.4128" cy="30.7905" r="2.78745" fill="#52B392"/>
        </svg>
    </div>
</section>
