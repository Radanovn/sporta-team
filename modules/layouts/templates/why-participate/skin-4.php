<?php

/*

type: layout

name: Why participate 4

position: 4

*/

?>
<section class="section section-video-tool edit safe-mode nodrop" field="layout-why-participate-skin-4-<?php print $params['id'] ?>" rel="content">
    <div class="container position-relative">
        <div class="circles circles--top-left d-none d-lg-block">
            <img src="<?php print template_url(); ?>modules/layouts/svg/why-participate/skin-11.svg">
        </div>
        <div class="row">
            <div class="col-lg-9 mx-lg-auto">
                <div class="section__block-title text-center">
                    <h2>Did you know… </h2>
                </div>
            </div>
        </div>
        <div class="row section-video-tool__row">
            <div class="col-md-4 col-lg-5 order-1">
                <div class="section-video-tool__content">
                    <h4 class="section-video-tool__content-title"><span class="text-green">Demo video</span> of the tool</h4>
                    <div class="wrap-count">
                        <div class="count">
                            <div class="count__number text-green">1400+</div>
                            <p class="count__text">Clubs are already<br>using this program</p>
                        </div>
                        <div class="count">
                            <div class="count__number text-green">200+</div>
                            <p class="count__text">Users
                                <br>have registered</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 offset-md-1 offset-lg-0 order-0 order-md-1">
                <figure class="wrapper-poster-video">
                    <div class="poster-video">
                        <div class="btn-play btn-play--back btn-play--green position-absolute d-none d-md-block">
                            <div class="btn-play__circle btn-play__circle--1"></div>
                            <div class="btn-play__circle btn-play__circle--2"></div>
                            <div class="btn-play__circle btn-play__circle--3"></div>
                        </div>
                        <img src="<?php print template_url(); ?>images/why-participate-img-4.jpg" class="img-cover" alt="">
                        <div class="btn-play btn-play--green position-absolute js-video-modal-play" data-toggle="modal" data-target="#videoModal"></div>
                    </div>
                </figure>
            </div>
        </div>
    </div>
    <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-transparent rounded-0 border-0">
                <div class="modal-header border-0 rounded-0 p-0">
                    <button type="button" class="close p-2 mb-n2 mb-sm-n3 mt-n2 mt-sm-n3 mr-n2" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body rounded-0 p-2 p-sm-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <div class="embed-responsive-item js-video-player" data-youtube-id="DnGdoEa1tPg" id="player1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
