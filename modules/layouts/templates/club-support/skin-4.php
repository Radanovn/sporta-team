<?php

/*

type: layout

name: Club support 4

position: 4

*/

?>
<section class="section section-guidance pb-0 edit safe-mode nodrop" field="layout-club-support-skin-4-<?php print $params['id'] ?>" rel="content">
    <div class="container">
        <div class="row no-gutters benefits-guide-card">
            <div class="col-md-6">
                <picture>
                    <source srcset="<?php print template_url(); ?>images/benefits-guide-img-tablet.svg" media="(max-width: 991px)">
                    <img src="<?php print template_url(); ?>images/benefits-guide-img.svg" alt="">
                </picture>
            </div>
            <div class="col-md-6">
                <div class="benefits-guide-card__content">
                    <h2 class="benefits-guide-card__title">Download this handy club benefits guide</h2>
                    <p class="benefits-guide-card__text">Seeing all those bonuses like this is great fun, but when it comes down to it, how does my club benefit from it? Well, that is clearly explained in this Club Benefits Guide.</p>
                    <div class="benefits-guide-card__wrap-btn text-center text-sm-left">
                        <module type="btn" class="allow-drop"  template="download-button-with-icon" button_style="btn btn-animate btn-red" button_text="Download">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
