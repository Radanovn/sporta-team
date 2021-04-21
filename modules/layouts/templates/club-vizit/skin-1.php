<?php

/*

type: layout

name: Club vizit 1

position: 1

*/

?>
<section class="hero-section hero-club-vizit pb-lg-0 edit safe-mode nodrop" field="layout-club-vizit-skin-1-<?php print $params['id'] ?>" rel="content">
    <div class="row no-gutters">
        <div class="col-md-4 order-1 hero__content">
            <h1 class="hero__title w-100">WE <span class="text-red">VISIT</span> YOUR CLUB</h1>
            <p class="hero__text w-100">Sed do eiusmod tempor incididunt u tempor incididun</p>
        </div>
        <div class="col-md-8 order-0 order-md-1 hero__img">
            <picture>
                <source srcset="<?php print template_url(); ?>images/club-vizit-img-hero-mobile.jpg" media="(max-width: 767px)">
                <img src="<?php print template_url(); ?>images/club-vizit-img-hero.jpg" alt="" class="img-cover">
            </picture>
            <div class="hero__img-decor-left bg-green d-none d-md-block"></div>
            <div class="hero__img-decor-right d-none d-md-block"></div>
        </div>
    </div>
</section>