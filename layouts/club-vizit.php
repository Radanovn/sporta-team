<?php

/*

type: layout
content_type: static
name: Club vizit
position: 20
description: Club vizit

*/

?>
<?php include template_dir() . "header.php"; ?>

<div class="edit main-content" rel="content" field="sporta-club-vizit_content">
    <section class="hero-section hero-club-vizit pb-lg-0">
        <div class="row no-gutters">
            <div class="col-md-4 order-1 hero__content">
                <h1 class="hero__title w-100">WE <span class="text-red">VISIT</span> YOUR CLUB</h1>
                <p class="hero__text w-100">Sed do eiusmod tempor incididunt u tempor incididun</p>
            </div>
            <div class="col-md-8 order-0 order-md-1 hero__img">
                <picture>
                    <source srcset="<?php print template_url(); ?>images/club-vizit-img-hero-mobile.jpg" media="(max-width: 767px)">
                    <img src="<?php print template_url(); ?>images/club-vizit-img-hero.jpg" alt="" class="img-cover">
                </picture>
                <div class="hero__img-decor-left bg-green d-none d-md-block"></div>
                <div class="hero__img-decor-right d-none d-md-block"></div>
            </div>
        </div>
    </section>

    <section class="section section-about section-custom-accompaniment">
        <div class="container position-relative">
            <div class="circles circles--top-left d-none d-lg-block">
                <img src="<?php print template_url(); ?>modules/layouts/svg/club-vizit/skin-1.svg">
            </div>
            <div class="row">
                <div class="col-lg-9 mx-lg-auto">
                    <div class="section__block-title text-sm-center">
                        <h2>
                            The pinnacle of custom<br>
                            accompaniment
                        </h2>
                        <p class="lead-text">... is a curious Sporta employee received at your club. His mission: to meet personally and listen to how Sporta can strengthen your club. If you have a sports club problem and you do not immediately see a solution, get a club visit at home!</p>
                    </div>
                </div>
            </div>
            <div class="row no-gutters about-card">
                <div class="circles circles--top-right d-none d-lg-block">
                    <img src="<?php print template_url(); ?>modules/layouts/svg/club-vizit/skin-2.svg">
                </div>
                <div class="col-lg-6">
                    <div class="about-card__img">
                        <div class="rect rect--top-left rect--green d-none d-lg-block"></div>
                        <div class="circles circles--bottom-left d-none d-lg-block">
                            <img src="<?php print template_url(); ?>modules/layouts/svg/club-vizit/skin-3.svg">
                        </div>
                        <picture>
                            <source srcset="<?php print template_url(); ?>images/vizit-img-mobile.jpg" media="(max-width: 479px)">
                            <source srcset="<?php print template_url(); ?>images/vizit-img-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                            <img src="<?php print template_url(); ?>images/vizit-img.jpg" alt="">
                        </picture>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="about-card-content">
                        <h3 class="about-card__title">We vizit you</h3>
                        <p class="about-card__text  about-card__text--max-width">Specifically, a club visit works like this: a Sporta employee visits your club to meet personally and to listen to the questions and feedback your club has. In addition, during the club visit there is room to view the possibilities of the services of Sporta together, so that your club makes optimal use of the Sporta advantages. Together we invest in your club activities!</p>
                        <div class="about-card__wrap-link">
                            <module type="btn" template="sporta-card-links-with-icons" button-style="red text-decoration-none" button_text="Find out more">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters quote-card">
                <div class="col-lg-6">
                    <div class="quote-card-content">
                        <blockquote>
                            <p>The Sporta manager contributed to the items that were requested from our club. Opportunities were offered that were appropriate for our club. There was a constructive atmosphere.</p>
                            <div class="author-wrap">
                                <div class="author__img">
                                    <img src="<?php print template_url(); ?>images/photo.jpg" class="d-block" alt="">
                                </div>
                                <div class="author__info">
                                    <div class="author__name">jan janssens</div>
                                    <div class="author__location">volleyclub westerlo</div>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 d-none d-lg-block">
                    <div class="quote-card__img">
                        <img src="<?php print template_url(); ?>images/vizit-img-2.jpg" class="d-block ml-auto" alt="">
                    </div>
                </div>
            </div>
            <div class="row no-gutters about-card">
                <div class="col-lg-6">
                    <div class="about-card__img">
                        <div class="rect rect--top-left rect--yellow d-none d-lg-block"></div>
                        <div class="circles circles--bottom-left d-none d-lg-block">
                            <img src="<?php print template_url(); ?>modules/layouts/svg/club-vizit/skin-4.svg">
                        </div>
                        <picture>
                            <source srcset="<?php print template_url(); ?>images/vizit-img-3-mobile.jpg" media="(max-width: 479px)">
                            <source srcset="<?php print template_url(); ?>images/vizit-img-3-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                            <img src="<?php print template_url(); ?>images/vizit-img-3.jpg" alt="">
                        </picture>
                    </div>

                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="about-card-content">
                        <h3 class="about-card__title">Short & Powerful</h3>
                        <p class="about-card__text  about-card__text--max-width">The time investment consciously remains minimal. It is therefore not necessary to prepare or find out certain things for the club visit. In order to work effectively, we ask that the number of board members at the club visit be limited to 2 people.<br>It is recommended that one of those two persons<br class="d-sm-none"> is familiar with <a href="#" class="text-green font-weight-bold">My Account</a>.</p>
                        <div class="about-card__wrap-link">
                            <module type="btn" template="sporta-card-links-with-icons" button-style="red text-decoration-none" button_text="Find out more">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-testimonials bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-lg-auto">
                    <div class="section__block-title text-sm-center">
                        <h2>Our fine customers have their say</h2>
                    </div>
                </div>
            </div>

            <div class="row wrap-cards">
                <div class="col-md-6 col-lg-4 mx-auto">
                    <div class="card text-center border-0 mx-auto ml-lg-0">
                        <div class="card-body">
                            <div class="author__img mx-auto">
                                <img src="<?php print template_url(); ?>images/photo.jpg" class="d-block" alt="">
                            </div>
                            <div class="author__info">
                                <div class="author__name">jan janssens</div>
                                <div class="author__location">volleyclub westerlo</div>
                            </div>
                            <p class="card-text">Heel fijn om persoonlijk contact te hebben. Door de mensen achter Sporta te leren kennen, verlaagt de drempel om hulp te vragen.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mx-auto">
                    <div class="card text-center border-0 mx-auto">
                        <div class="card-body">
                            <div class="author__img mx-auto">
                                <img src="<?php print template_url(); ?>images/photo.jpg" class="d-block" alt="">
                            </div>
                            <div class="author__info">
                                <div class="author__name">jan janssens</div>
                                <div class="author__location">volleyclub westerlo</div>
                            </div>
                            <p class="card-text">Heel fijn om persoonlijk contact te hebben. Door de mensen achter Sporta te leren kennen, verlaagt de drempel om hulp te vragen.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mx-auto">
                    <div class="card text-center border-0 mx-auto mr-lg-0">
                        <div class="card-body">
                            <div class="author__img mx-auto">
                                <img src="<?php print template_url(); ?>images/photo.jpg" class="d-block" alt="">
                            </div>
                            <div class="author__info">
                                <div class="author__name">jan janssens</div>
                                <div class="author__location">volleyclub westerlo</div>
                            </div>
                            <p class="card-text">Door de persoonlijke aanpak bespreek je makkelijker kleinere zaken die je anders niet aan bod laat komen.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include template_dir() . "footer.php"; ?>
