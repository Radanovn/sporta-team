<?php

/*

type: layout

name: How to 1

position: 1

*/

?>
<section class="section section-about section-how-to-hero pt-0 edit safe-mode nodrop" field="layout-how-to-skin-1-<?php print $params['id'] ?>" rel="content">
    <div class="container">
        <div class="row no-gutters about-card">
            <div class="col-lg-5 order-1">
                <div class="about-card-content pl-lg-0 pl-xl-2">
                    <h1 class="about-card__title"><span class="text-red">WHAT TO DO</span><br class="d-none d-xl-inline"> WITH A ACCIDENT?</h1>
                    <p class="about-card__text">The pinnacle of peace of mind ... while waiting for a speedy recovery, rest assured that the accident report will be hand-led quickly, correctly and completely painlessly. You choose how you report your accident: in the fast, modern way via extranet or via the classic and slower form to fill in. This is how it works:</p>
                </div>
            </div>
            <div class="col-lg-6 order-0 order-lg-1">
                <div class="about-card__img about-card__img--ml">
                    <div class="rect rect--top-right rect--red d-none d-lg-block"></div>
                    <div class="circles circles--top-right d-none d-lg-block">
                        <img src="<?php print template_url(); ?>modules/layouts/svg/how-to/skin-1.svg">
                    </div>
                    <picture>
                        <source srcset="<?php print template_url(); ?>images/how-to-img-1-mobile.jpg" media="(max-width: 479px)">
                        <source srcset="<?php print template_url(); ?>images/how-to-img-1-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                        <img src="<?php print template_url(); ?>images/how-to-img-1.jpg" alt="">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</section>
