<?php

/*

type: layout

name: Safety 6

position: 6

*/

?>
<section class="section section-contact section-safety-subscribe edit safe-mode nodrop" field="layout-safety-skin-6-<?php print $params['id'] ?>" rel="content">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-6 d-none d-md-block">
                <div class="section-contact__wrap-img">
                    <div class="rect rect--bottom-left rect--yellow d-none d-lg-block"></div>
                    <div class="circles circles--bottom-left d-none d-lg-block">
                        <img src="<?php print template_url(); ?>modules/layouts/svg/safety/skin-5.svg">
                    </div>
                    <picture>
                        <source srcset="<?php print template_url(); ?>images/contact-img-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                        <img src="<?php print template_url(); ?>images/contact-img.jpg" alt="">
                    </picture>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-contact__content">
                    <div class="section__block-title text-center text-lg-left">
                        <h2>Meer tips in je mailbox?</h2>
                        <p class="lead-text">Schrijf je in op onze nieuwsbrief en blijf op de hoogte</p>
                    </div>

                    <module type="contact_form" template="sporta-newsletter-form"/>
                </div>
            </div>
        </div>
    </div>
</section>
