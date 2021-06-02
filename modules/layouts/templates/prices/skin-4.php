<?php

/*

type: layout

name: Prices 4

position: 4

*/

?>
<section class="section-fullwidth-img section-prices-info edit safe-mode allow-drop" field="layout-prices-skin-4-<?php print $params['id'] ?>" rel="content">
    <div class="wrap-img">
        <picture>
            <source srcset="<?php print template_url(); ?>images/volleyball-tablet.jpg" media="(max-width: 991px)">
            <img src="<?php print template_url(); ?>images/volleyball.jpg" alt="" class="img-cover">
        </picture>
    </div>

    <div class="container position-relative">
        <div class="card-info text-center">
            <h3 class="card-info__title">Ready to get started?</h3>
            <div class="card-info__wrap-btn">
                <module type="btn" class="cloneable"  template="sporta-buttons" button_style="btn btn-animate btn-red" button_text="SLUIT JE NU AAN">
            </div>
            <p class="card-info__text">Not sure yet, questions?</p>
            <p><module type="btn" class="cloneable"  template="sporta-buttons" button_style="card-info__link-contact" button_text="contact us"></p>
        </div>
    </div>
</section>
