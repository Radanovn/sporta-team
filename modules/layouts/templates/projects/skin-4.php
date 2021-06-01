<?php

/*

type: layout

name: Projects 4

position: 4

*/

?>
<section class="section section-about section-projects-about edit safe-mode nodrop" field="layout-projects-skin-4-<?php print $params['id'] ?>" rel="content">
    <div class="container">
        <div class="row no-gutters about-card">
            <div class="col-lg-5 order-1">
                <div class="about-card-content pl-lg-1">
                    <h3 class="about-card__title">Sport-i-label</h3>
                    <p class="about-card__text  about-card__text--max-width">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                    <div class="about-card__wrap-link">
                        <module type="btn" class="allow-drop"  template="sporta-card-links-with-icons" button_style="red text-decoration-none" button_text="Find out more"/>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-0 order-lg-1">
                <div class="about-card__img about-card__img--ml">
                    <div class="rect rect--top-right rect--green d-none d-lg-block"></div>
                    <div class="circles circles--top-right d-none d-lg-block">
                        <img src="<?php print template_url(); ?>modules/layouts/svg/projects/skin-3.svg">
                    </div>
                    <picture>
                        <source srcset="<?php print template_url(); ?>images/single-post-img-1-mobile.jpg"
                                media="(max-width: 479px)">
                        <source srcset="<?php print template_url(); ?>images/projects-img-1-tablet.jpg"
                                media="(min-width: 480px) and (max-width: 991px)">
                        <img src="<?php print template_url(); ?>images/single-post-img-1.jpg" alt="">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</section>
