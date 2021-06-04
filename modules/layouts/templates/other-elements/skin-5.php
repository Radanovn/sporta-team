<?php

/*

type: layout

name: other elements 5

position: 5

*/

?>
<section class="section section-about section-about-other edit safe-mode allow-drop" field="layout-other-elements-skin-5-<?php print $params['id'] ?>" rel="content">
    <div class="container">
        <div class="row no-gutters about-card noelement">
            <div class="col-lg-6 noelement nodrop">
                <div class="about-card__img noelement">
                    <div class="rect rect--top-left rect--green d-none d-lg-block noelement"></div>
                    <div class="circles circles--bottom-left d-none d-lg-block noelement">
                        <img src="<?php print template_url(); ?>modules/layouts/svg/other-elements/skin-2.svg">
                    </div>
                    <figure class="wrapper-video-content mb-0 noelement nodrop">
                        <div class="embed-responsive embed-responsive-16by9 video-wrap noelement">
                            <module type="video" template="sporta-team">
                        </div>
                    </figure>

                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="about-card-content">
                    <h3 class="about-card__title">Our team <span class="text-green">support</span></h3>
                    <p class="about-card__text  about-card__text--max-width">Amet minim mollit non deserunt ullamco
                        est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.
                        Exercitation veniam consequat sunt nostrud amet. Velit officia consequat duis enim velit
                        mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                    <div class="about-card__wrap-link">
                        <module type="btn" class="allow-drop"  template="sporta-card-links-with-icons" button_style="green text-decoration-none" button_text="Find out more"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
