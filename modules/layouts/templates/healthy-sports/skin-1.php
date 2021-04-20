<?php

/*

type: layout

name: Healthy sports 1

position: 1

*/

?>
<section class="hero-section hero-healthy-sports pb-0 edit safe-mode nodrop" field="layout-healthy-sports-skin-1-<?php print $params['id'] ?>" rel="content">
    <div class="row no-gutters">
        <div class="col-md-4 order-1 hero__content">
            <h1 class="hero__title w-100"><span class="text-green">HEALTHY</span> SPORTS</h1>
            <p class="hero__text w-100">Sed do eiusmod tempor incididunt u tempor incididun.</p>
        </div>
        <div class="col-md-8 order-0 order-md-1 hero__img">
            <picture>
                <source srcset="<?php print template_url(); ?>images/healthy-sports-hero-img-mobile.jpg" media="(max-width: 767px)">
                <img src="<?php print template_url(); ?>images/healthy-sports-hero-img.jpg" alt="" class="img-cover">
            </picture>
            <div class="hero__img-decor-left bg-green d-none d-md-block"></div>
            <div class="hero__img-decor-right d-none d-md-block"></div>
        </div>
    </div>
</section>
