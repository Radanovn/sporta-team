<?php

/*

type: layout

name: Club vizit 4

position: 4

*/

?>
<section class="section section-about section-custom-accompaniment edit safe-mode allow-drop" field="layout-club-vizit-skin-4-<?php print $params['id'] ?>" rel="content">
    <div class="container position-relative">
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
                        <module type="btn" class="allow-drop"  template="sporta-card-links-with-icons" button-style="red text-decoration-none" button_text="Find out more">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

