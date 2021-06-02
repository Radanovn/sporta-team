<?php
/*

  type: layout

  name: News - article 4

  position: 4

 */
?>
<div class="section-about section-about--column edit safe-mode allow-drop" field="layout-news-inner-skin-4-<?php print $params['id'] ?>" rel="content">
    <div class="row no-gutters about-card">
        <div class="col-md-5 col-lg-6">
            <div class="about-card__img">
                <div class="rect rect--top-left rect--yellow d-none d-md-block"></div>
                <div class="circles circles--bottom-left d-none d-lg-block">
                    <img src="<?php print template_url(); ?>modules/layouts/svg/news_inner/skin-7.svg">
                </div>
                <picture>
                    <source srcset="<?php print template_url(); ?>images/about-img-2-mobile.jpg" media="(max-width: 479px)">
                    <source srcset="<?php print template_url(); ?>images/about-img-2-tablet.jpg" media="(min-width: 480px) and (max-width: 767px)">
                    <source srcset="<?php print template_url(); ?>images/how-to-img-2-tablet.jpg" media="(min-width: 768px) and (max-width: 991px)">
                    <img src="<?php print template_url(); ?>images/about-img-2.jpg" alt="">
                </picture>
            </div>
        </div>
        <div class="col-md-6 col-lg-5 offset-md-1 position-relative">
            <div class="circles circles--bottom-right d-none d-xl-block">
                <img src="<?php print template_url(); ?>modules/layouts/svg/news_inner/skin-8.svg">
            </div>
            <div class="about-card-content">
                <h3 class="about-card__title">Column 1</h3>
                <p class="about-card__text  about-card__text--max-width">Lorem ipsum dolor sit amet, consec&#8209;tetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </div>

    <div class="row no-gutters about-card">
        <div class="col-md-6 col-lg-5 order-1">
            <div class="about-card-content pl-lg-1">
                <h3 class="about-card__title">Column 2</h3>
                <p class="about-card__text  about-card__text--max-width">Lorem ipsum dolor sit amet, consec&#8209;tetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 order-0 order-md-1">
            <div class="about-card__img about-card__img--ml">
                <div class="rect rect--top-right rect--green d-none d-md-block"></div>
                <picture>
                    <source srcset="<?php print template_url(); ?>images/single-post-img-1-mobile.jpg" media="(max-width: 479px)">
                    <source srcset="<?php print template_url(); ?>images/single-post-img-1-tablet.jpg" media="(min-width: 480px) and (max-width: 767px)">
                    <source srcset="<?php print template_url(); ?>images/how-to-img-3.jpg" media="(min-width: 768px) and (max-width: 991px)">
                    <img src="<?php print template_url(); ?>images/single-post-img-1.jpg" alt="">
                </picture>
            </div>
        </div>
    </div>
</div>
