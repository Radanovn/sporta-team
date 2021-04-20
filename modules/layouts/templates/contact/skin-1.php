<?php

/*

type: layout

name: Contacts 1

position: 1

*/

?>
<section class="section section-contact contact-page edit safe-mode nodrop" field="layout-contact-skin-1-<?php print $params['id'] ?>" rel="content">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class="section-contact__content mx-auto ml-lg-0">
                    <div class="section__block-title text-center text-sm-left">
                        <h1>Feel free<br class="d-none d-lg-inline"> to call or email us.</h1>
                        <p class="lead-text">We are happy to help you.</p>
                    </div>

                    <module type="contact_form" template="contact-page-form"/>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <div class="section-contact__wrap-img">
                    <div class="rect rect--top-right rect--yellow"></div>
                    <div class="circles circles--top-right">
                        <img src="<?php print template_url(); ?>modules/layouts/svg/contact/skin-1.svg">
                    </div>
                    <img src="<?php print template_url(); ?>images/contact-img-1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
