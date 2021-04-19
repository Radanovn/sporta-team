<?php

/*

type: layout

name: skin-1

position: 1

*/

?>
<section class="hero-section nodrop edit" field="layout-skin-1-<?php print $params['id'] ?>" rel="content">
    <div id="heroSlider" class="carousel slide" data-ride="carousel" data-interval="false">
        <ol class="carousel-indicators">
            <li data-target="#heroSlider" data-slide-to="0" class="active"></li>
            <li data-target="#heroSlider" data-slide-to="1"></li>
            <li data-target="#heroSlider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row no-gutters">
                    <div class="col-12 col-md-4 order-1 slide__text">
                        <h1 class="slide__text-title">YOU THE SPORT, WE THE <span class="text-red">SUPPORT</span></h1>
                    </div>
                    <div class="col-12 col-md-8 order-0 order-md-1 slide__img">
                        <picture>
                            <source srcset="<?php print template_url(); ?>images/slide1-mobile.jpg" media="(max-width: 767px)">
                            <img src="<?php print template_url(); ?>images/slide1.jpg" alt="" class="img-cover">
                        </picture>
                        <div class="slide__img-decor-left bg-yellow d-none d-md-block"></div>
                        <div class="slide__img-decor-right d-none d-md-block"></div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row no-gutters">
                    <div class="col-12 col-md-4 order-1 slide__text">
                        <div class="slide__text-title">YOU THE SPORT, WE THE <span class="text-red">SUPPORT</span></div>
                    </div>
                    <div class="col-12 col-md-8 order-0 order-md-1 slide__img">
                        <picture>
                            <source srcset="<?php print template_url(); ?>images/slide2-mobile.jpg" media="(max-width: 767px)">
                            <img src="<?php print template_url(); ?>images/slide2.jpg" alt="" class="img-cover">
                        </picture>
                        <div class="slide__img-decor-left bg-green d-none d-md-block"></div>
                        <div class="slide__img-decor-right d-none d-md-block"></div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row no-gutters">
                    <div class="col-12 col-md-4 order-1 slide__text">
                        <div class="slide__text-title">YOU THE SPORT, WE THE <span class="text-green">SUPPORT</span></div>
                    </div>
                    <div class="col-12 col-md-8 order-0 order-md-1 slide__img">
                        <picture>
                            <source srcset="<?php print template_url(); ?>images/slide3-mobile.jpg" media="(max-width: 767px)">
                            <img src="<?php print template_url(); ?>images/slide3.jpg" alt="" class="img-cover">
                        </picture>
                        <div class="slide__img-decor-left bg-red d-none d-md-block"></div>
                        <div class="slide__img-decor-right d-none d-md-block"></div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-next d-none d-md-flex" href="#heroSlider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="circles circles--bottom-right d-none d-lg-block">
        <img src="<?php print template_url(); ?>modules/layouts/templates/svg/home-slider.svg">
    </div>
</section>
