<?php

/*

type: layout

name: Projects 1

position: 1

*/

?>
<section class="hero-section projects-hero pb-0 edit safe-mode nodrop" field="layout-projects-skin-1-<?php print $params['id'] ?>" rel="content">
    <div class="row no-gutters">
        <div class="col-md-4 order-1 hero__content">
            <h1 class="hero__title w-100">PROJECTS</h1>
            <p class="hero__text w-100">Sed do eiusmod tempor incididunt u tempor incididun.</p>
            <div class="hero__wrap-btn">
                <module type="btn" template="sporta-buttons" button_style="btn btn-animate btn-red" button_text="GTA"/>
            </div>
        </div>
        <div class="col-md-8 order-0 order-md-1 hero__img">
            <picture>
                <source srcset="<?php print template_url(); ?>images/projects-hero-img-mobile.jpg"
                        media="(max-width: 767px)">
                <img src="<?php print template_url(); ?>images/projects-hero-img.jpg" alt="" class="img-cover">
            </picture>
            <div class="hero__img-decor-left bg-yellow d-none d-md-block"></div>
            <div class="hero__img-decor-right d-none d-md-block"></div>
        </div>
    </div>
</section>
