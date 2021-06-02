<?php

/*

type: layout

name: How to 5

position: 5

*/

?>
<section class="section section-how-to-help edit safe-mode allow-drop" field="layout-how-to-skin-5-<?php print $params['id'] ?>" rel="content">
    <div class="container">
        <div class="row guidance-card">
            <div class="col-md-6 col-lg-5 order-1">
                <div class="guidance-card__content">
                    <h2 class="guidance-card__title">Heed help?</h2>
                    <p class="guidance-card__text">We are happy to help you.</p>
                    <div class="guidance-card__wrap-btn">
                        <module type="btn" class="cloneable"  template="sporta-buttons" button_style="btn btn-animate btn-green" button_text="Contact us"/>
                    </div>
                </div>
            </div>
            <div class="col-md-6 guidance-card__wrap-img order-0 order-md-1">
                <div class="rect rect--bottom-right rect--green d-none d-md-block"></div>
                <div class="circles circles--top-left d-none d-lg-block">
                    <img src="<?php print template_url(); ?>modules/layouts/svg/how-to/skin-8.svg">

                </div>
                <div class="circles circles--bottom-right d-none d-lg-block">
                    <img src="<?php print template_url(); ?>modules/layouts/svg/how-to/skin-9.svg">
                </div>
                <picture>
                    <source srcset="<?php print template_url(); ?>images/how-to-img-3-mobile.jpg" media="(max-width: 479px)">
                    <img src="<?php print template_url(); ?>images/how-to-img-3.jpg" alt="">
                </picture>
            </div>
        </div>
    </div>
</section>
