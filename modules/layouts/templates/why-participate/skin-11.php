<?php

/*

type: layout

name: Why participate 11

position: 11

*/

?>
<section class="section section-information-package edit safe-mode nodrop" field="layout-why-participate-skin-11-<?php print $params['id'] ?>" rel="content">
    <div class="container">
        <div class="block-information-package">
            <div class="block-information-package__left-side">
                <picture>
                    <source srcset="<?php print template_url(); ?>images/why-participate-img-5-mobile.jpg" media="(max-width: 479px)">
                    <source srcset="<?php print template_url(); ?>images/why-participate-img-5-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                    <img src="<?php print template_url(); ?>images/why-participate-img-5.jpg" alt="" class="img-cover">
                </picture>
                <div class="block-information-package__top">
                    <h5 class="block-information-package__title">Still have questions?</h5>
                    <p class="block-information-package__text font-weight-normal">Glad to hear from you!</p>
                </div>
                <div class="block-information-package__bottom">
                    <a href="#" class="link-contact">Contact us</a>
                </div>
            </div>
            <div class="block-information-package__right-side">
                <div class="block-information-package__top">
                    <h5 class="block-information-package__title">Request your free information package</h5>
                    <p class="block-information-package__text">Enter your email below and we’ll send it to you</p>
                </div>
                <div class="block-information-package__bottom">
                    <form class="form-information-package needs-validation" novalidate>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="your.email@domain.com" required>
                            <div class="invalid-feedback">Error text</div>
                        </div>
                        <module type="btn" template="sporta-buttons" button_style="Red" button_text="Get">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
