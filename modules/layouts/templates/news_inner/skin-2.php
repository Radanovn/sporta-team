<?php
/*

  type: layout

  name: News article - 2

  position: 2

 */
?>
<div class="section-about edit safe-mode nodrop" field="layout-news-article-skin-2-<?php print $params['id'] ?>" rel="content">
    <div class="row no-gutters about-card">
        <div class="col-lg-6">
            <div class="about-card__img">
                <div class="rect rect--top-left rect--yellow d-none d-lg-block"></div>
                <div class="circles circles--bottom-left d-none d-lg-block">
                    <img src="<?php print template_url(); ?>modules/layouts/templates/svg/news_inner/skin-4.svg">
                </div>
                <picture>
                    <source srcset="<?php print template_url(); ?>images/about-img-2-mobile.jpg" media="(max-width: 479px)">
                    <source srcset="<?php print template_url(); ?>images/about-img-2-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                    <img src="<?php print template_url(); ?>images/about-img-2.jpg" alt="">
                </picture>
            </div>
        </div>
        <div class="col-lg-5 offset-lg-1 position-relative">
            <div class="circles circles--bottom-right d-none d-xl-block">
                <img src="<?php print template_url(); ?>modules/layouts/templates/svg/news_inner/skin-5.svg">
            </div>
            <div class="about-card-content">
                <h3 class="about-card__title">Subtitle</h3>
                <p class="about-card__text  about-card__text--max-width">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                <div class="about-card__wrap-link">
                    <module type="btn" template="sporta-card-links-with-icons" button_style="red text-decoration-none"/>
                </div>
            </div>
        </div>
    </div>

    <div class="row no-gutters about-card">
        <div class="col-lg-5 order-1">
            <div class="about-card-content pl-lg-1">
                <h3 class="about-card__title">Subtitle</h3>
                <p class="about-card__text  about-card__text--max-width">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                <ul class="list-unstyled list-custom list-custom-check list-custom-check--green">
                    <li>Lorem ipsum dolor</li>
                    <li>Lorem ipsum dolor</li>
                </ul>
                <div class="about-card__wrap-link">
                    <module type="btn" template="sporta-card-links-with-icons" button_style="green text-decoration-none"/>
                </div>
            </div>
        </div>
        <div class="col-lg-6 order-0 order-lg-1">
            <div class="about-card__img about-card__img--ml">
                <div class="rect rect--top-right rect--green d-none d-lg-block"></div>
                <picture>
                    <source srcset="<?php print template_url(); ?>images/single-post-img-1-mobile.jpg" media="(max-width: 479px)">
                    <source srcset="<?php print template_url(); ?>images/single-post-img-1-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                    <img src="<?php print template_url(); ?>images/single-post-img-1.jpg" alt="">
                </picture>
            </div>
        </div>
    </div>
</div>
