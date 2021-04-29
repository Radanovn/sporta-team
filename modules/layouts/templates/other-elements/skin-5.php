<?php

/*

type: layout

name: other elements 5

position: 5

*/

?>
<section class="section section-about section-about-other edit safe-mode nodrop" field="layout-other-elements-skin-5-<?php print $params['id'] ?>" rel="content">
    <div class="container">
        <div class="row no-gutters about-card">
            <div class="col-lg-6">
                <div class="about-card__img">
                    <div class="rect rect--top-left rect--green d-none d-lg-block"></div>
                    <div class="circles circles--bottom-left d-none d-lg-block">
                        <img src="<?php print template_url(); ?>modules/layouts/svg/other-elements/skin-2.svg">
                    </div>
                    <figure class="wrapper-video-content mb-0">
                        <div class="embed-responsive embed-responsive-16by9 video-wrap">
                            <div class="poster-video">
                                <img src="<?php print template_url(); ?>images/about-img-2.jpg" class="img-cover"
                                     alt="">
                                <div class="btn-play btn-play--green js-video-play"></div>
                            </div>

                            <div class="embed-responsive-item js-video-player" data-youtube-id="DnGdoEa1tPg"
                                 id="player2"></div>
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
                        <module type="btn" template="sporta-card-links-with-icons" button_style="green text-decoration-none" button_text="Find out more"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
