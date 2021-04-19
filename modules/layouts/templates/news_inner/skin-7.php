<?php
/*

  type: layout

  name: News article - 7

  position: 7

 */
?>
<div class="row no-gutters about-card useful-document edit safe-mode nodrop" field="layout-news-article-skin-7-<?php print $params['id'] ?>" rel="content">
    <div class="col-lg-6">
        <div class="about-card__img">
            <div class="rect rect--top-left rect--yellow d-none d-lg-block"></div>
            <picture>
                <source srcset="<?php print template_url(); ?>images/insurance-img-mobile.jpg" media="(max-width: 479px)">
                <source srcset="<?php print template_url(); ?>images/insurance-img-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                <img src="<?php print template_url(); ?>images/insurance-img.jpg" alt="">
            </picture>
        </div>
    </div>
    <div class="col-lg-5 offset-lg-1">
        <div class="about-card-content">
            <div class="circles circles--right d-none d-xl-block">
                <img src="<?php print template_url(); ?>modules/layouts/templates/svg/news_inner/skin-13.svg">
            </div>
            <h2 class="about-card__title mt-0">Useful documents:</h2>
            <p class="about-card__text about-card__text--max-width">
                Geneeskundig
                <a href="#" class="text-red link-download text-nowrap">
                    <span class="link-download__text link-download__text--decoration">getuigschrift.pdf</span>
                    <span class="link-download__icon">
                                <img src="<?php print template_url(); ?>modules/layouts/templates/svg/news_inner/skin-14.svg">
                            </span>
                </a>
            </p>
            <p class="about-card__text  about-card__text--max-width">
                Aangifteformulier
                <a href="#" class="text-red link-download text-nowrap">
                    <span class="link-download__text link-download__text--decoration">Sporta.pdf</span>
                    <span class="link-download__icon">
                                <img src="<?php print template_url(); ?>modules/layouts/templates/svg/news_inner/skin-14.svg">
                        </span>
                </a>
            </p>
            <p class="about-card__text  about-card__text--max-width">
                Aangifteformulier-individu gezin
                <a href="#" class="text-red link-download text-nowrap">
                    <span class="link-download__text link-download__text--decoration">ZS.pdf</span>
                    <span class="link-download__icon">
                                <img src="<?php print template_url(); ?>modules/layouts/templates/svg/news_inner/skin-14.svg">
                        </span>
                </a>
            </p>
            <p class="about-card__text  about-card__text--max-width">
                Aangifteformulier- bedrijf
                <a href="#" class="text-red link-download text-nowrap">
                    <span class="link-download__text link-download__text--decoration">ZS.pdf</span>
                    <span class="link-download__icon">
                                <img src="<?php print template_url(); ?>modules/layouts/templates/svg/news_inner/skin-14.svg">
                            </span>
                </a>
            </p>
            <h4>Links</h4>
            <p><a href="#">Dag van de trainer</a></p>
            <p><a href="#">Kalender</a></p>
            <p><a href="#">Vlaamse traininschool</a></p>
        </div>
    </div>
</div>
