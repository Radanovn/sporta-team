<?php

/*

type: layout

name: Club support 3

position: 3

*/

?>
<section class="section section-guidance pb-0 edit safe-mode allow-drop" field="layout-club-support-skin-3-<?php print $params['id'] ?>" rel="content">
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
                        <module type="btn" class="cloneable"  template="sporta-buttons" button_style="btn btn-animate btn-green" button_text="Invite us">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-0 order-lg-1">
                <div class="guidance-card__wrap-img guidance-card__wrap-img--ml">
                    <div class="rect rect--bottom-right rect--yellow d-none d-lg-block"></div>
                    <div class="circles circles--top-left d-none d-lg-block">
                        <img src="<?php print template_url(); ?>modules/layouts/svg/club-support/skin-9.svg">
                    </div>
                    <div class="circles circles--bottom-center d-none d-lg-block">
                        <img src="<?php print template_url(); ?>modules/layouts/svg/club-support/skin-10.svg">
                    </div>
                    <picture>
                        <source srcset="<?php print template_url(); ?>images/guidance-img-mobile.jpg" media="(max-width: 479px)">
                        <source srcset="<?php print template_url(); ?>images/guidance-img-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                        <img src="<?php print template_url(); ?>images/guidance-img.jpg" alt="">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</section>
