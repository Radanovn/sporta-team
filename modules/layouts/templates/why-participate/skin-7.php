<?php

/*

type: layout

name: Why participate 7

position: 7

*/

?>
<section class="section section-about section-participate-about edit safe-mode nodrop" field="layout-why-participate-skin-7-<?php print $params['id'] ?>" rel="content">
    <div class="container">
        <div class="row no-gutters about-card about-card--more-options">
            <div class="col-lg-6">
                <div class="about-card__img">
                    <div class="rect rect--top-left rect--yellow d-none d-lg-block"></div>
                    <div class="circles circles--bottom-left d-none d-lg-block">
                        <img src="<?php print template_url(); ?>modules/layouts/templates/svg/why-participate/skin-16.svg">
                    </div>
                    <picture>
                        <source srcset="<?php print template_url(); ?>images/vizit-img-mobile.jpg" media="(max-width: 479px)">
                        <source srcset="<?php print template_url(); ?>images/vizit-img-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                        <img src="<?php print template_url(); ?>images/vizit-img.jpg" alt="">
                    </picture>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="about-card-content">
                    <h3 class="about-card__title">Want more options?</h3>
                    <p class="about-card__text">Find out how to expand your insurance options here. policy details and insurance manual.</p>
                    <div class="about-card__wrap-btn">
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur elit</p>
                        <a href="#" class="btn btn-animate btn-red">
                            <span class="btn__icon">
                                <img src="<?php print template_url(); ?>modules/layouts/templates/svg/why-participate/skin-17.svg">
                            </span>
                            download
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-gutters quote-card">
            <div class="col-lg-6">
                <div class="quote-card-content">
                    <blockquote>
                        <p>The Sporta manager contributed to the items that were requested from our club. Opportunities were offered that were appropriate for our club. There was a constructive atmosphere.</p>
                        <div class="author-wrap">
                            <div class="author__img">
                                <img src="<?php print template_url(); ?>images/photo.jpg" class="d-block" alt="">
                            </div>
                            <div class="author__info">
                                <div class="author__name">jan janssens</div>
                                <div class="author__location">volleyclub westerlo</div>
                            </div>
                        </div>
                    </blockquote>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 d-none d-lg-block">
                <div class="quote-card__img">
                    <img src="<?php print template_url(); ?>images/vizit-img-2.jpg" class="d-block ml-auto" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
