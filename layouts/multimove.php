<?php

/*

type: layout
content_type: static
name: Multimove
position: 8
description: Multimove

*/

?>
<?php include template_dir() . "header.php"; ?>

<div class="edit main-content" rel="content" field="sporta-multimove_content">
    <section class="section section-about section-multimove-hero">
        <div class="container">
            <div class="row no-gutters about-card">
                <div class="col-lg-5 order-1">
                    <div class="about-card-content">
                        <h1 class="about-card__title">MULTIMOVE</h1>
                        <p class="about-card__text">Multimove is a varied movement program where preschoo-lers improve their movement skills based on twelve crucial movement skills. Because these “moves” are independent of a sport, the child does not yet cling to one sport, so that it can discover for itself what kind of sport he or she prefers to do.</p>
                    </div>
                </div>
                <div class="col-lg-6 order-0 order-lg-1">
                    <div class="about-card__img about-card__img--ml">
                        <div class="rect rect--top-right rect--yellow d-none d-lg-block"></div>
                        <div class="circles circles--top-right d-none d-lg-block">
                            <img src="<?php print template_url(); ?>modules/layouts/templates/svg/multimove/skin-1.svg">
                        </div>
                        <picture>
                            <source srcset="<?php print template_url(); ?>images/multimove-hero-img-mobile.jpg" media="(max-width: 479px)">
                            <source srcset="<?php print template_url(); ?>images/multimove-hero-img-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                            <img src="<?php print template_url(); ?>images/multimove-hero-img.jpg" alt="">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-about section-multimove-connection">
        <div class="container">
            <div class="row about-card no-gutters">
                <div class="col-lg-6">
                    <div class="about-card__img">
                        <div class="rect rect--top-left rect--green d-none d-lg-block"></div>
                        <div class="circles circles--bottom-left d-none d-lg-block">
                            <img src="<?php print template_url(); ?>modules/layouts/templates/svg/multimove/skin-2.svg">

                        </div>
                        <picture>
                            <source srcset="<?php print template_url(); ?>images/multimove-img-1-mobile.jpg" media="(max-width: 479px)">
                            <source srcset="<?php print template_url(); ?>images/multimove-img-1-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                            <img src="<?php print template_url(); ?>images/safety-img.jpg" alt="">
                        </picture>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="about-card-content">
                        <div class="circles circles--top-right d-none d-lg-block">
                            <img src="<?php print template_url(); ?>modules/layouts/templates/svg/multimove/skin-3.svg">

                        </div>
                        <h3 class="about-card__title">Voordelig aansluitingstar</h3>
                        <p class="about-card__text  about-card__text--max-width">De kinderen en lesgevers kan je aansluiten aan het voordelige M-tarief dat slechts €5/jaar bedraagt. Hiermee zijn zij verzekerd voor BA en LO.</p>
                        <div class="about-card__wrap-btn">
                           <module type="btn" template="sporta-buttons" button_style="btn btn-animate btn-red">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-filter section-multimove-advantages">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <div class="section__block-title text-sm-center">
                        <h2>Nog meer voordelen</h2>
                        <p class="lead-text">Sporta-clubs, die multimove in hun bewegingsaanbod integreren, alleen of in samenwerking met (een) andere sportclub(s) en/of sportdienst(en) uit de regio en door Sport Vlaanderen officieel erkend zijn als multimove&#8209;aanbieder, krijgen extra hulp.</p>
                    </div>
                </div>
            </div>
            <div class="row cards-wrap mx-lg-auto position-relative">
                <div class="circles circles--bottom-right d-none d-lg-block">
                    <img src="<?php print template_url(); ?>modules/layouts/templates/svg/multimove/skin-4.svg">

                </div>
                <div class="col-lg-4">
                    <div class="card border-0 bg-transparent color-red rounded-0">
                        <div class="card-hover-block d-none d-lg-flex">
                            <div class="card-hover-block__body">
                                <h5 class="card-hover-block__title">Jouw voordeel</h5>
                                <ul class="list-unstyled list-custom list-custom-check list-custom-check--white">
                                    <li>Sporta-federatie betaalt €200 terug bij de aankoop van didactisch materiaal nodig voor de Multimove-lessen</li>
                                    <li>12 gratis strandballen van Sporta voor gebruik in de Multimove-lessen</li>
                                </ul>
                            </div>
                            <div class="card-hover-block__footer">
                                <module type="btn" template="sporta-buttons" button_style="default">
                            </div>
                        </div>
                        <a href="#" class="d-block card-img-top rounded-0">
                            <img src="<?php print template_url(); ?>images/filter-img-1.jpg" class="img-cover" alt="">
                        </a>
                        <div class="card-body">
                            <div class="categories">
                                <a href="#" class="categories__item categories__item--red">financieel</a>
                                <a href="#" class="categories__item categories__item--green">promotioneel</a>
                            </div>
                            <h5 class="card-title">
                                <a href="#">Srefund ‘day of the trainer’</a>
                            </h5>
                            <p class="card-text">Every two years, all trainers in Flanders gather for a day full of workshops, practical sessions, refresher courses and information about new developments, trends and tips. Both for certi-fied and (yet) non-qualified trainers or sports coaches.</p>
                        </div>
                        <div class="card-footer border-0 bg-transparent rounded-0">
                            <module type="btn" template="sporta-card-links-with-icons" button_style="red">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0 bg-transparent color-green">
                        <div class="card-hover-block d-none d-lg-flex">
                            <div class="card-hover-block__body">
                                <h5 class="card-hover-block__title">Jouw voordeel</h5>
                                <ul class="list-unstyled list-custom list-custom-check list-custom-check--white">
                                    <li>Sporta-federatie betaalt €200 terug bij de aankoop van didactisch materiaal nodig voor de Multimove-lessen</li>
                                    <li>12 gratis strandballen van Sporta voor gebruik in de Multimove-lessen</li>
                                </ul>
                            </div>
                            <div class="card-hover-block__footer">
                                <module type="btn" template="sporta-buttons" button_style="default">

                            </div>
                        </div>
                        <a href="#" class="d-block card-img-top rounded-0">
                            <img src="<?php print template_url(); ?>images/news-2.jpg" class="img-cover" alt="">
                        </a>
                        <div class="card-body">
                            <div class="categories">
                                <a href="#" class="categories__item categories__item--red">financieel</a>
                                <a href="#" class="categories__item categories__item--green">promotioneel</a>
                            </div>
                            <h5 class="card-title">
                                <a href="#">Srefund ‘day of the trainer’</a>
                            </h5>
                            <p class="card-text">Every two years, all trainers in Flanders gather for a day full of workshops, practical sessions, refresher courses and information about new developments, trends and tips. Both for certi-fied and (yet) non-qualified trainers or sports coaches.</p>
                        </div>
                        <div class="card-footer border-0 bg-transparent">
                            <module type="btn" template="sporta-card-links-with-icons" button_style="green">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0 bg-transparent color-yellow">
                        <div class="card-hover-block d-none d-lg-flex">
                            <div class="card-hover-block__body">
                                <h5 class="card-hover-block__title">Jouw voordeel</h5>
                                <ul class="list-unstyled list-custom list-custom-check list-custom-check--white">
                                    <li>Sporta-federatie betaalt €200 terug bij de aankoop van didactisch materiaal nodig voor de Multimove-lessen</li>
                                    <li>12 gratis strandballen van Sporta voor gebruik in de Multimove-lessen</li>
                                </ul>
                            </div>
                            <div class="card-hover-block__footer">
                                <module type="btn" template="sporta-buttons" button_style="default">
                            </div>
                        </div>
                        <a href="#" class="d-block card-img-top rounded-0">
                            <img src="<?php print template_url(); ?>images/filter-img-3.jpg" class="img-cover" alt="">
                        </a>
                        <div class="card-body">
                            <div class="categories">
                                <a href="#" class="categories__item categories__item--green">sociaal</a>
                                <a href="#" class="categories__item categories__item--red">management</a>
                            </div>
                            <h5 class="card-title">
                                <a href="#">Srefund ‘day of the trainer’</a>
                            </h5>
                            <p class="card-text">Every two years, all trainers in Flanders gather for a day full of workshops, practical sessions, refresher courses and information about new developments, trends and tips. Both for certi-fied and (yet) non-qualified trainers or sports coaches.</p>
                        </div>
                        <div class="card-footer border-0 bg-transparent">
                            <module type="btn" template="sporta-card-links-with-icons" button_style="yellow">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-about section-multimove-training">
        <div class="container position-relative">
            <div class="circles circles--top-left d-none d-lg-block">
                <img src="<?php print template_url(); ?>modules/layouts/templates/svg/multimove/skin-5.svg">

            </div>
            <div class="row no-gutters about-card">
                <div class="col-lg-5 order-1">
                    <div class="about-card-content">
                        <h4 class="about-card__title">Opleidingen en bijscholing<br class="d-none d-lg-inline"> voor multi&#8209;movebegeleiders</h4>
                        <p class="about-card__text  about-card__text--max-width">De kinderen en lesgevers kan je aansluiten aan het voordelige M-tarief dat slechts €5/jaar bedraagt. Hiermee zijn zij verzekerd voor BA en LO.</p>
                        <div class="about-card__wrap-link">
                            <module type="btn" template="sporta-card-links-with-icons" button_style="red text-decoration-none">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-0 order-lg-1">
                    <div class="about-card__img about-card__img--ml">
                        <div class="rect rect--top-right rect--red d-none d-lg-block"></div>
                        <div class="circles circles--top-right d-none d-lg-block">
                            <img src="<?php print template_url(); ?>modules/layouts/templates/svg/multimove/skin-6.svg">

                        </div>
                        <picture>
                            <source srcset="<?php print template_url(); ?>images/safety-img-2-mobile.jpg" media="(max-width: 479px)">
                            <source srcset="<?php print template_url(); ?>images/safety-img-2-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                            <img src="<?php print template_url(); ?>images/safety-img-2.jpg" alt="">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-about section-multimove-more-tips">
        <div class="container">
            <div class="row no-gutters about-card">
                <div class="col-md-5 col-lg-6">
                    <div class="about-card__img">
                        <div class="rect rect--top-left rect--green d-none d-md-block"></div>
                        <div class="circles circles--bottom-left d-none d-lg-block">
                            <img src="<?php print template_url(); ?>modules/layouts/templates/svg/multimove/skin-7.svg">

                        </div>
                        <picture>
                            <source srcset="<?php print template_url(); ?>images/safety-img-3-mobile.jpg" media="(max-width: 479px)">
                            <source srcset="<?php print template_url(); ?>images/safety-img-3-tablet.jpg" media="(min-width: 480px) and (max-width: 767px)">
                            <source srcset="<?php print template_url(); ?>images/multimove-img-2-tablet.jpg" media="(min-width: 768px) and (max-width: 991px)">
                            <img src="<?php print template_url(); ?>images/safety-img-3.jpg" alt="">
                        </picture>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 offset-lg-1">
                    <div class="about-card-content">
                        <h4 class="about-card__title">Nog meer tips op www.multimove.be</h4>
                        <ul class="list-unstyled list-custom list-custom-bullet list-custom-bullet--green">
                            <li>Waar je kan multimoven</li>
                            <li>Voorleesboekje Moovie is jarig</li>
                            <li>Beweegkalender</li>
                            <li>Tips voor ouders</li>
                            <li>Multimove-lied</li>
                        </ul>
                        <div class="about-card__wrap-link">
                            <module type="btn" template="sporta-card-links-with-icons" button_style="green text-decoration-none">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include template_dir() . "footer.php"; ?>
