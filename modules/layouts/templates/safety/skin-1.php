<?php

/*

type: layout

name: Safety 1

position: 1

*/

?>
<section class="section section-about section-safety-hero edit safe-mode nodrop" field="layout-safety-skin-1-<?php print $params['id'] ?>" rel="content">
    <div class="container">
        <div class="row no-gutters about-card">
            <div class="col-lg-6">
                <div class="about-card__img">
                    <div class="rect rect--top-left rect--yellow d-none d-lg-block"></div>
                    <div class="circles circles--bottom-left d-none d-lg-block">
                        <img src="<?php print template_url(); ?>modules/layouts/svg/safety/skin-1.svg">
                    </div>
                    <picture>
                        <source srcset="<?php print template_url(); ?>images/safety-img-mobile.jpg" media="(max-width: 479px)">
                        <source srcset="<?php print template_url(); ?>images/safety-img-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                        <img src="<?php print template_url(); ?>images/safety-img.jpg" alt="">
                    </picture>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="about-card-content">
                    <h1 class="about-card__title">Het toppunt van waar voor je geld krijgen</h1>
                    <p class="about-card__text  about-card__text--max-width">De kinderen en lesgevers kan je aansluiten aan het voordelige M-tarief dat slechts €5/jaar bedraagt. Hiermee zijn zij verzekerd voor BA en LO.</p>
                    <div class="about-card__wrap-btn">
                        <module type="btn" template="sporta-buttons" button_style="btn btn-animate btn-red" button_text="Sluit je nu aan"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
