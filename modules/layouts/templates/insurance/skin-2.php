<?php

/*

type: layout

name: Insurance 2

position: 2

*/

?>
<section class="hsection section-insurance edit safe-mode allow-drop" field="layout-insurance-skin-2-<?php print $params['id'] ?>" rel="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <div class="section__block-title text-sm-center">
                    <h2>Peace of mind</h2>
                    <p class="lead-text">... is feeling that there is an insurer behind you, which does what has to be done. When practicing sports, there is a real chance that you will run into an injury. Fortunately, you don’t have to worry about the administrative handling of your sports accident, thanks to sports insurance tailored to recreational sports clubs.</p>
                </div>
            </div>
        </div>
        <div class="row no-gutters about-card">
            <div class="col-lg-6 pt-lg-3">
                <div class="about-card__img">
                    <div class="rect rect--top-left rect--yellow d-none d-lg-block"></div>
                    <div class="circles circles--bottom-left d-none d-lg-block">
                        <img src="<?php print template_url(); ?>modules/layouts/svg/insurance/skin-1.svg">
                    </div>
                    <picture>
                        <source srcset="<?php print template_url(); ?>images/insurance-img-mobile.jpg" media="(max-width: 479px)">
                        <source srcset="<?php print template_url(); ?>images/insurance-img-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                        <img src="<?php print template_url(); ?>images/insurance-img.jpg" alt="">
                    </picture>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="about-card-content">
                    <h4 class="about-card__title">That reassuring insurance policy from ethias covers your club members against:</h4>
                    <ul class="list-unstyled list-custom list-custom-bullet list-custom-bullet--green">
                        <li>Physical accidents</li>
                        <li>Heart failure and strokes</li>
                        <li>Civil liability</li>
                        <li>Legal counsel</li>
                    </ul>
                    <p class="about-card__text">The insurance applies to all club activities listed in the My account club agenda. You can read the exact guarantees and terms and conditions in the insurance manual below and in <a href="#" class="text-red text-nowrap font-weight-bold">My Account</a>.</p>
                </div>
            </div>
        </div>
    </div>
</section>
