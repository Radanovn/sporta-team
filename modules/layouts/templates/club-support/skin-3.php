<?php

/*

type: layout

name: Club support 3

position: 3

*/

?>
<section class="section section-guidance pb-0 edit safe-mode nodrop" field="layout-club-support-skin-3-<?php print $params['id'] ?>" rel="content">
    <div class="container">
        <div class="row guidance-card">
            <div class="col-lg-6 order-1">
                <div class="guidance-card__content">
                    <h2 class="guidance-card__title">Guidance</h2>
                    <p class="guidance-card__text">
                        Do you have a sports club problem?<br>
                        Do you want to make the most of all the advanta-ges but you don’t know where to start?<br>
                        Would you like to work with a Sporta Team employee?<br>
                        Would you like to meet us?
                    </p>
                    <p class="guidance-card__text-bold">
                        We are happy to visit your club and offer a listening ear for all your questions.
                    </p>
                    <div class="guidance-card__wrap-btn">
                        <module type="btn" template="sporta-buttons" button_style="btn btn-animate btn-green">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-0 order-lg-1">
                <div class="guidance-card__wrap-img guidance-card__wrap-img--ml">
                    <div class="rect rect--bottom-right rect--yellow d-none d-lg-block"></div>
                    <div class="circles circles--top-left d-none d-lg-block">
                        <img src="<?php print template_url(); ?>modules/layouts/templates/svg/club-support/skin-9.svg">
                    </div>
                    <div class="circles circles--bottom-center d-none d-lg-block">
                        <img src="<?php print template_url(); ?>modules/layouts/templates/svg/club-support/skin-10.svg">
                    </div>
                    <picture>
                        <source srcset="<?php print template_url(); ?>images/guidance-img-mobile.jpg" media="(max-width: 479px)">
                        <source srcset="<?php print template_url(); ?>images/guidance-img-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                        <img src="<?php print template_url(); ?>images/guidance-img.jpg" alt="">
                    </picture>
                </div>
            </div>
        </div>
        <div class="row no-gutters benefits-guide-card">
            <div class="col-md-6">
                <picture>
                    <source srcset="<?php print template_url(); ?>images/benefits-guide-img-tablet.svg" media="(max-width: 991px)">
                    <img src="<?php print template_url(); ?>images/benefits-guide-img.svg" alt="">
                </picture>
            </div>
            <div class="col-md-6">
                <div class="benefits-guide-card__content">
                    <h2 class="benefits-guide-card__title">Download this handy club benefits guide</h2>
                    <p class="benefits-guide-card__text">Seeing all those bonuses like this is great fun, but when it comes down to it, how does my club benefit from it? Well, that is clearly explained in this Club Benefits Guide.</p>
                    <div class="benefits-guide-card__wrap-btn text-center text-sm-left">
                        <module type="btn" template="download-button-with-icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
