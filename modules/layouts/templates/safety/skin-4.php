<?php

/*

type: layout

name: Safety 4

position: 4

*/

?>
<section class="section section-about section-safety-sport edit safe-mode nodrop" field="layout-safety-skin-4-<?php print $params['id'] ?>" rel="content">
    <div class="container">
        <div class="row no-gutters about-card">
            <div class="col-lg-5 order-1">
                <div class="about-card-content pl-lg-1">
                    <h3 class="about-card__title">Sport & Traffic</h3>
                    <p class="about-card__text  about-card__text--max-width">On the way to road safety sport? the online traffic guide Sport & Traffic of the Associations for Road Safety is the guide to follow. There you will find all the tips for safe sports on one digital information highway.</p>
                    <div class="about-card__wrap-link">
                        <module type="btn" class="allow-drop"  template="sporta-card-links-with-icons" button_style="red text-decoration-none" button_text="Find out more"/>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-0 order-lg-1">
                <div class="about-card__img about-card__img--ml">
                    <div class="rect rect--top-right rect--yellow d-none d-lg-block"></div>
                    <div class="circles circles--top-right d-none d-lg-block">
                        <img src="<?php print template_url(); ?>modules/layouts/svg/safety/skin-3.svg">
                    </div>
                    <picture>
                        <source srcset="<?php print template_url(); ?>images/safety-img-2-mobile.jpg" media="(max-width: 479px)">
                        <source srcset="<?php print template_url(); ?>images/safety-img-2-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                        <img src="<?php print template_url(); ?>images/safety-img-2.jpg" alt="">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</section>
