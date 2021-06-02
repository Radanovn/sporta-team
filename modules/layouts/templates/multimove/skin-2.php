<?php

/*

type: layout

name: Multimove 2

position: 2

*/

?>
<section class="section section-about section-multimove-connection edit safe-mode allow-drop" field="layout-multimove-skin-2-<?php print $params['id'] ?>" rel="content">
    <div class="container">
        <div class="row about-card no-gutters">
            <div class="col-lg-6">
                <div class="about-card__img">
                    <div class="rect rect--top-left rect--green d-none d-lg-block"></div>
                    <div class="circles circles--bottom-left d-none d-lg-block">
                        <img src="<?php print template_url(); ?>modules/layouts/svg/multimove/skin-2.svg">

                    </div>
                    <picture>
                        <source srcset="<?php print template_url(); ?>images/multimove-img-1-mobile.jpg" media="(max-width: 479px)">
                        <source srcset="<?php print template_url(); ?>images/multimove-img-1-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                        <img src="<?php print template_url(); ?>images/safety-img.jpg" alt="">
                    </picture>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="about-card-content">
                    <div class="circles circles--top-right d-none d-lg-block">
                        <img src="<?php print template_url(); ?>modules/layouts/svg/multimove/skin-3.svg">
                    </div>
                    <h3 class="about-card__title">Voordelig aansluitingstar</h3>
                    <p class="about-card__text  about-card__text--max-width">De kinderen en lesgevers kan je aansluiten aan het voordelige M-tarief dat slechts €5/jaar bedraagt. Hiermee zijn zij verzekerd voor BA en LO.</p>
                    <div class="about-card__wrap-btn">
                        <module type="btn" class="cloneable"  template="sporta-buttons" button_style="btn btn-animate btn-red" button_text="Yes, ik sluit me aan">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
