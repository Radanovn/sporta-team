<?php

/*

type: layout

name: other elements 4

position: 4

*/

?>
<section class="section section-about section-about-other edit safe-mode allow-drop" field="layout-other-elements-skin-4-<?php print $params['id'] ?>" rel="content">
    <div class="container">
        <div class="row no-gutters about-card">
            <div class="col-lg-5 order-1">
                <div class="about-card-content pl-lg-1">
                    <h3 class="about-card__title">Our <span class="text-red">mission</span> and vision</h3>
                    <p class="about-card__text  about-card__text--max-width">Amet minim mollit non deserunt ullamco
                        est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.
                        Exercitation veniam consequat sunt nostrud amet. Velit officia consequat duis enim velit
                        mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                    <div class="about-card__wrap-link">
                        <module type="btn" class="allow-drop"  template="sporta-card-links-with-icons" button_style="red text-decoration-none" button_text="Find out more"/>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-0 order-lg-1 noelement nodrop">
                <div class="about-card__img about-card__img--ml noelement">
                    <div class="circles circles--top-right d-none d-lg-block">
                        <img src="<?php print template_url(); ?>modules/layouts/svg/other-elements/skin-1.svg">
                    </div>
                    <figure class="wrapper-video-content mb-0 noelement nodrop">
                        <div class="embed-responsive embed-responsive-16by9 video-wrap noelement">
                            <module type="video" template="sporta-team" upload_thumb="<?php print template_url(); ?>images/about-img-1.jpg">
                        </div>
                    </figure>
                    <!--<figure class="wrapper-video-content mb-0">
                        <div class="embed-responsive embed-responsive-16by9 video-wrap">
                            <div class="poster-video">
                                <img src="<?php /*print template_url(); */?>images/about-img-1.jpg" class="img-cover"
                                     alt="">
                                <div class="btn-play btn-play--green js-video-play"></div>
                            </div>

                            <div class="embed-responsive-item js-video-player" data-youtube-id="DnGdoEa1tPg"
                                 id="player1"></div>
                        </div>
                    </figure>-->
                </div>
            </div>
        </div>
    </div>
</section>
