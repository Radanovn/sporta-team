<?php

/*

type: layout

name: Contacts 2

position: 2

*/

?>
<section class="section-map edit safe-mode nodrop" field="layout-contact-skin-2-<?php print $params['id'] ?>" rel="content">
    <div id="map">
        <img src="<?php print template_url(); ?>images/map-img.jpg" class="img-cover" alt="">
    </div>
    <div class="container">
        <div class="section-map__content">
            <div class="section-map__content-col-left">
                <div class="font-weight-600 pb-2 mb-3">
                    <module type="btn" template="sporta-buttons" button_style="link-email" button_text="federatie@sporta.be"/>
                    <module type="btn" template="sporta-buttons" button_style="link-phone" button_text="+32 (0) 3 361 53 40"/>
                </div>
                <div>
                    Boomgaardstraat 22<br>
                    Bus 50 B- 2600 Berchem
                </div>
            </div>
            <div class="section-map__content-col-right">
                <div class="font-weight-600 pb-2 mb-3">
                    Coontact details of the point of contact integrity (api):
                </div>
                <div>
                    Charlotte Verboven<br>
                    <module type="btn" template="sporta-buttons" button_style="link-email" button_text="cverboven@sporta.be"/>
                    <module type="btn" template="sporta-buttons" button_style="link-phone" button_text="+32 (0) 3 361 53 40"/>
                </div>
            </div>
        </div>
    </div>
</section>




