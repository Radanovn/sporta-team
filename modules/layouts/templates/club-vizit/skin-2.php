<?php

/*

type: layout

name: Club vizit 2

position: 2

*/

?>
<section class="section section-about section-custom-accompaniment edit safe-mode nodrop" field="layout-club-vizit-skin-2-<?php print $params['id'] ?>" rel="content">
    <div class="container position-relative">
        <div class="circles circles--top-left d-none d-lg-block">
            <img src="<?php print template_url(); ?>modules/layouts/svg/club-vizit/skin-1.svg">
        </div>
        <div class="row">
            <div class="col-lg-9 mx-lg-auto">
                <div class="section__block-title text-sm-center">
                    <h2>
                        The pinnacle of custom<br>
                        accompaniment
                    </h2>
                    <p class="lead-text">... is a curious Sporta employee received at your club. His mission: to meet personally and listen to how Sporta can strengthen your club. If you have a sports club problem and you do not immediately see a solution, get a club visit at home!</p>
                </div>
            </div>
        </div>
        <div class="row no-gutters about-card">
            <div class="circles circles--top-right d-none d-lg-block">
                <img src="<?php print template_url(); ?>modules/layouts/svg/club-vizit/skin-2.svg">
            </div>
            <div class="col-lg-6">
                <div class="about-card__img">
                    <div class="rect rect--top-left rect--green d-none d-lg-block"></div>
                    <div class="circles circles--bottom-left d-none d-lg-block">
                        <img src="<?php print template_url(); ?>modules/layouts/svg/club-vizit/skin-3.svg">
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
                    <h3 class="about-card__title">We vizit you</h3>
                    <p class="about-card__text  about-card__text--max-width">Specifically, a club visit works like this: a Sporta employee visits your club to meet personally and to listen to the questions and feedback your club has. In addition, during the club visit there is room to view the possibilities of the services of Sporta together, so that your club makes optimal use of the Sporta advantages. Together we invest in your club activities!</p>
                    <div class="about-card__wrap-link">
                        <module type="btn" template="sporta-card-links-with-icons" button-style="red text-decoration-none" button_text="Find out more">
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
        <div class="row no-gutters about-card">
            <div class="col-lg-6">
                <div class="about-card__img">
                    <div class="rect rect--top-left rect--yellow d-none d-lg-block"></div>
                    <div class="circles circles--bottom-left d-none d-lg-block">
                        <img src="<?php print template_url(); ?>modules/layouts/svg/club-vizit/skin-4.svg">
                    </div>
                    <picture>
                        <source srcset="<?php print template_url(); ?>images/vizit-img-3-mobile.jpg" media="(max-width: 479px)">
                        <source srcset="<?php print template_url(); ?>images/vizit-img-3-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                        <img src="<?php print template_url(); ?>images/vizit-img-3.jpg" alt="">
                    </picture>
                </div>

            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="about-card-content">
                    <h3 class="about-card__title">Short & Powerful</h3>
                    <p class="about-card__text  about-card__text--max-width">The time investment consciously remains minimal. It is therefore not necessary to prepare or find out certain things for the club visit. In order to work effectively, we ask that the number of board members at the club visit be limited to 2 people.<br>It is recommended that one of those two persons<br class="d-sm-none"> is familiar with <a href="#" class="text-green font-weight-bold">My Account</a>.</p>
                    <div class="about-card__wrap-link">
                        <module type="btn" template="sporta-card-links-with-icons" button-style="red text-decoration-none" button_text="Find out more">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
