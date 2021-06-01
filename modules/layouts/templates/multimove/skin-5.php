<?php

/*

type: layout

name: Multimove 5

position: 5

*/

?>
<section class="section section-about section-multimove-more-tips edit safe-mode nodrop" field="layout-multimove-skin-5-<?php print $params['id'] ?>" rel="content">
    <div class="container">
        <div class="row no-gutters about-card">
            <div class="col-md-5 col-lg-6">
                <div class="about-card__img">
                    <div class="rect rect--top-left rect--green d-none d-md-block"></div>
                    <div class="circles circles--bottom-left d-none d-lg-block">
                        <img src="<?php print template_url(); ?>modules/layouts/svg/multimove/skin-7.svg">

                    </div>
                    <picture>
                        <source srcset="<?php print template_url(); ?>images/safety-img-3-mobile.jpg" media="(max-width: 479px)">
                        <source srcset="<?php print template_url(); ?>images/safety-img-3-tablet.jpg" media="(min-width: 480px) and (max-width: 767px)">
                        <source srcset="<?php print template_url(); ?>images/multimove-img-2-tablet.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <img src="<?php print template_url(); ?>images/safety-img-3.jpg" alt="">
                    </picture>
                </div>
            </div>
            <div class="col-md-6 col-lg-5 offset-lg-1">
                <div class="about-card-content">
                    <h4 class="about-card__title">Nog meer tips op www.multimove.be</h4>
                    <ul class="list-unstyled list-custom list-custom-bullet list-custom-bullet--green">
                        <li>Waar je kan multimoven</li>
                        <li>Voorleesboekje Moovie is jarig</li>
                        <li>Beweegkalender</li>
                        <li>Tips voor ouders</li>
                        <li>Multimove-lied</li>
                    </ul>
                    <div class="about-card__wrap-link">
                        <module type="btn" class="allow-drop"  template="sporta-card-links-with-icons" button_style="green text-decoration-none" button_text="Find out more">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
