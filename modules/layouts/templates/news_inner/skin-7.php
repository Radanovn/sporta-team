<?php
/*

  type: layout

  name: News article - 7

  position: 7

 */
?>
<div class="row no-gutters about-card useful-document edit safe-mode nodrop" field="layout-news-inner-skin-7-<?php print $params['id'] ?>" rel="content">
    <div class="col-lg-6">
        <div class="about-card__img">
            <div class="rect rect--top-left rect--yellow d-none d-lg-block"></div>
            <picture>
                <source srcset="<?php print template_url(); ?>images/insurance-img-mobile.jpg" media="(max-width: 479px)">
                <source srcset="<?php print template_url(); ?>images/insurance-img-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                <img src="<?php print template_url(); ?>images/insurance-img.jpg" alt="">
            </picture>
        </div>
    </div>
    <div class="col-lg-5 offset-lg-1">
        <div class="about-card-content">
            <div class="circles circles--right d-none d-xl-block">
                <img src="<?php print template_url(); ?>modules/layouts/svg/news_inner/skin-13.svg">
            </div>
            <h2 class="about-card__title mt-0">Useful documents:</h2>
            <p class="about-card__text about-card__text--max-width">
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

            <h4>Links</h4>
            <p><module type="btn" class="allow-drop"  template="sporta-buttons" button_style="Clean" button_text="Dag van de trainer"></p>
            <p><module type="btn" class="allow-drop"  template="sporta-buttons" button_style="Clean" button_text="Kalender"></p>
            <p><module type="btn" class="allow-drop"  template="sporta-buttons" button_style="Clean" button_text="Vlaamse traininschool"></p>
        </div>
    </div>
</div>
