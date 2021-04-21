<?php

/*

type: layout

name: Projects 3

position: 3

*/

?>
<section class="section-fullwidth-img section-projects-info edit safe-mode nodrop" field="layout-projects-skin-3-<?php print $params['id'] ?>" rel="content">
    <div class="wrap-img">
        <picture>
            <source srcset="<?php print template_url(); ?>images/volleyball-projects-mobile.jpg"
                    media="(max-width: 991px)">
            <img src="<?php print template_url(); ?>images/volleyball.jpg" alt="" class="img-cover">
        </picture>
    </div>

    <div class="container position-relative">
        <div class="card-info text-center">
            <h4 class="card-info__title">Are you a<br>multisport club?</h4>
            <p class="card-info__text">Secure your members and trainers</p>
            <div class="card-info__for-only">
                <div class="card-info__for-only-title">for only</div>
                <div class="card-info__for-only-quantity">5,-</div>
            </div>
            <module type="btn" template="sporta-buttons" button_style="btn btn-animate btn-small" button_text="Meer info"/>
        </div>
    </div>
</section>
