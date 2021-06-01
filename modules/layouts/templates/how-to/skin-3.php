<?php

/*

type: layout

name: How to 4

position: 4

*/

?>
<section class="section section-about section-how-to edit safe-mode nodrop" field="layout-how-to-skin-4-<?php print $params['id'] ?>" rel="content">
    <div class="container">
        <div class="row no-gutters about-card">
            <div class="circles circles--top-right d-none d-lg-block">
                <img src="<?php print template_url(); ?>modules/layouts/svg/how-to/skin-6.svg">
            </div>
            <div class="col-md-5 col-lg-6">
                <div class="about-card__img">
                    <div class="rect rect--top-left rect--yellow d-none d-md-block"></div>
                    <div class="circles circles--bottom-left d-none d-lg-block">
                        <img src="<?php print template_url(); ?>modules/layouts/svg/how-to/skin-7.svg">
                    </div>
                    <picture>
                        <source srcset="<?php print template_url(); ?>images/how-to-img-2-mobile.jpg" media="(max-width: 479px)">
                        <source srcset="<?php print template_url(); ?>images/how-to-img-2.jpg" media="(min-width: 480px) and (max-width: 767px)">
                        <source srcset="<?php print template_url(); ?>images/how-to-img-2-tablet.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <img src="<?php print template_url(); ?>images/how-to-img-2.jpg" alt="">
                    </picture>
                </div>
            </div>
            <div class="col-md-7 col-lg-6 col-xl-5 offset-xl-1">
                <div class="about-card-content">
                    <h2 class="about-card__title">Useful documents:</h2>
                    <p class="about-card__text  about-card__text--max-width">
                        Geneeskundig
                        <module type="btn" class="allow-drop"  template="link-download-icon" button_style="text-red link-download text-nowrap" button_text="getuigschrift.pdf">
                    </p>
                    <p class="about-card__text  about-card__text--max-width">
                        Aangifteformulier
                        <module type="btn" class="allow-drop"  template="link-download-icon" button_style="text-red link-download text-nowrap" button_text="Sporta.pdf">
                    </p>
                    <p class="about-card__text  about-card__text--max-width">
                        Aangifteformulier-individu gezin
                        <module type="btn" class="allow-drop"  template="link-download-icon" button_style="text-red link-download text-nowrap" button_text="ZS.pdf">
                    </p>
                    <p class="about-card__text  about-card__text--max-width">
                        Aangifteformulier- bedrijf
                        <module type="btn" class="allow-drop"  template="link-download-icon" button_style="text-red link-download text-nowrap" button_text="ZS.pdf">
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
