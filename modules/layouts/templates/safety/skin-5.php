<?php

/*

type: layout

name: Safety 5

position: 5

*/

?>
<section class="section section-about section-safety-sport edit safe-mode nodrop" field="layout-safety-skin-5-<?php print $params['id'] ?>" rel="content">
    <div class="container">
        <div class="row no-gutters about-card">
            <div class="col-lg-6">
                <div class="about-card__img">
                    <div class="rect rect--top-left rect--green d-none d-lg-block"></div>
                    <div class="circles circles--bottom-left d-none d-lg-block">
                        <img src="<?php print template_url(); ?>modules/layouts/svg/safety/skin-4.svg">
                    </div>
                    <picture>
                        <source srcset="<?php print template_url(); ?>images/safety-img-3-mobile.jpg" media="(max-width: 479px)">
                        <source srcset="<?php print template_url(); ?>images/safety-img-3-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                        <img src="<?php print template_url(); ?>images/safety-img-3.jpg" alt="">
                    </picture>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="about-card-content">
                    <h3 class="about-card__title">Sportlight</h3>
                    <p class="about-card__text  about-card__text--max-width">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem ipsum dolor sit amet, consectetur </p>
                    <div class="about-card__wrap-link">
                        <module type="btn" template="sporta-card-links-with-icons" button_style="green text-decoration-none" button_text="Find out more"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
