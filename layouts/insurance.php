<?php

/*

type: layout
content_type: static
name: Insurance
position: 13
description: Insurance

*/

?>
<?php include template_dir() . "header.php"; ?>

<div class="edit main-content" rel="content" field="sporta-insurance_content">

    <section class="hero-insurance hero-section pb-lg-0">
        <div class="row no-gutters">
            <div class="col-md-4 order-1 hero__content">
                <h1 class="hero__title w-100">INSURANCE</h1>
                <p class="hero__text w-100">Sed do eiusmod tempor incididunt u tempor incididun.</p>
            </div>
            <div class="col-md-8 order-0 order-md-1 hero__img">
                <picture>
                    <source srcset="<?php print template_url(); ?>images/insurance-hero-img-mobile.jpg" media="(max-width: 767px)">
                    <img src="<?php print template_url(); ?>images/insurance-hero-img.jpg" alt="" class="img-cover">
                </picture>
                <div class="hero__img-decor-left bg-yellow d-none d-md-block"></div>
                <div class="hero__img-decor-right d-none d-md-block"></div>
            </div>
        </div>
    </section>

    <section class="section section-insurance">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <div class="section__block-title text-sm-center">
                        <h2>Peace of mind</h2>
                        <p class="lead-text">... is feeling that there is an insurer behind you, which does what has to be done. When practicing sports, there is a real chance that you will run into an injury. Fortunately, you don’t have to worry about the administrative handling of your sports accident, thanks to sports insurance tailored to recreational sports clubs.</p>
                    </div>
                </div>
            </div>
            <div class="row no-gutters about-card">
                <div class="col-lg-6 pt-lg-3">
                    <div class="about-card__img">
                        <div class="rect rect--top-left rect--yellow d-none d-lg-block"></div>
                        <div class="circles circles--bottom-left d-none d-lg-block">
                            <img src="<?php print template_url(); ?>modules/layouts/svg/insurance/skin-1.svg">
                        </div>
                        <picture>
                            <source srcset="<?php print template_url(); ?>images/insurance-img-mobile.jpg" media="(max-width: 479px)">
                            <source srcset="<?php print template_url(); ?>images/insurance-img-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                            <img src="<?php print template_url(); ?>images/insurance-img.jpg" alt="">
                        </picture>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="about-card-content">
                        <h4 class="about-card__title">That reassuring insurance policy from ethias covers your club members against:</h4>
                        <ul class="list-unstyled list-custom list-custom-bullet list-custom-bullet--green">
                            <li>Physical accidents</li>
                            <li>Heart failure and strokes</li>
                            <li>Civil liability</li>
                            <li>Legal counsel</li>
                        </ul>
                        <p class="about-card__text">The insurance applies to all club activities listed in the My account club agenda. You can read the exact guarantees and terms and conditions in the insurance manual below and in <a href="#" class="text-red text-nowrap font-weight-bold">My Account</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-reminders">
        <div class="container position-relative">
            <div class="circles circles--bottom-right d-none d-lg-block">
                <img src="<?php print template_url(); ?>modules/layouts/svg/insurance/skin-2.svg">
            </div>
            <div class="section__block-title text-sm-center">
                <h2>Just a refresher. Did you know...</h2>
            </div>
            <div class="row no-gutters">
                <div class="col-md-10 col-lg-12 col-xl-11 mx-auto">
                    <div class="row wrap-cards">
                        <div class="col-sm-6 col-lg-3">
                            <div class="card h-100 border-0 color-yellow">
                                <div class="card-header bg-transparent border-0">
                                    <div class="card-header__icon">
                                        <img src="<?php print template_url(); ?>modules/layouts/svg/insurance/skin-3.svg">

                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">There is no franchise, so your members will be reimbursed for all eligible costs, even if it concerns smaller amounts?</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card h-100 border-0 color-red">
                                <div class="card-header bg-transparent border-0">
                                    <div class="card-header__icon">
                                        <img src="<?php print template_url(); ?>modules/layouts/svg/insurance/skin-4.svg">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Are your club members also insured for jog-ging, walking, cycling, swimming, yoga, fit-ness and roller skating outside of a club?</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card h-100 border-0 color-green">
                                <div class="card-header bg-transparent border-0">
                                    <div class="card-header__icon">
                                        <img src="<?php print template_url(); ?>modules/layouts/svg/insurance/skin-5.svg">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">In addition to me-dical and pharmacy costs, can also glasses damage be reimbur-sed after a physical accident with a head injury.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card h-100 border-0 color-green">
                                <div class="card-header bg-transparent border-0">
                                    <div class="card-header__icon">
                                        <img src="<?php print template_url(); ?>modules/layouts/svg/insurance/skin-6.svg">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Are your members insured worldwide around the clock? And there is no cost ceiling for physical accidents (including stroke or heart failure)?</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="section-wrapper-btn text-center">
                <a href="#" class="btn btn-animate btn-green">your insurance</a>
            </div>
        </div>
    </section>

    <section class="section section-insurance-cards bg-gray">
        <div class="container position-relative">
            <div class="circles circles--top-left d-none d-lg-block">
                <img src="<?php print template_url(); ?>modules/layouts/svg/insurance/skin-7.svg">
            </div>
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <div class="row wrap-cards">
                        <div class="col-md-6 col-lg-4 mx-auto">
                            <div class="card color-red text-center mx-auto border-0 h-100">
                                <div class="card-header bg-transparent border-0">
                                    <span class="card-header__icon">
                                        <img src="<?php print template_url(); ?>modules/layouts/svg/insurance/skin-8.svg">
                                    </span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Verzekerings-handleiding</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                </div>
                                <div class="card-footer card-footer bg-transparent border-0">
                                    <a href="#" class="btn btn-animate">DOWNLOAD</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mx-auto">
                            <div class="card color-green text-center mx-auto border-0 h-100">
                                <div class="card-header bg-transparent border-0">
                                    <span class="card-header__icon">
                                        <img src="<?php print template_url(); ?>modules/layouts/svg/insurance/skin-9.svg">
                                    </span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Wat te doen bij een ongeval?</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                </div>
                                <div class="card-footer card-footer bg-transparent border-0">
                                    <a href="#" class="btn btn-animate">MEER INFO</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mx-auto">
                            <div class="card color-green text-center mx-auto border-0 h-100">
                                <div class="card-header bg-transparent border-0">
                                    <span class="card-header__icon">
                                        <img src="<?php print template_url(); ?>modules/layouts/svg/insurance/skin-10.svg">
                                    </span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Bijkomende<br>opties</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                </div>
                                <div class="card-footer card-footer bg-transparent border-0">
                                    <a href="#" class="btn btn-animate">MEER INFO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include template_dir() . "footer.php"; ?>
