<?php

/*

type: layout
content_type: static
name: Projects
position: 11
description: Projects

*/

?>
<?php include template_dir() . "header.php"; ?>

<div class="edit main-content" rel="content" field="sporta-team_projects">
    <section class="hero-section projects-hero pb-0">
        <div class="row no-gutters">
            <div class="col-md-4 order-1 hero__content">
                <h1 class="hero__title w-100">PROJECTS</h1>
                <p class="hero__text w-100">Sed do eiusmod tempor incididunt u tempor incididun.</p>
                <div class="hero__wrap-btn">
                    <module type="btn" template="sporta-buttons" button_style="btn btn-animate btn-red" button_text="GTA"/>
                </div>
            </div>
            <div class="col-md-8 order-0 order-md-1 hero__img">
                <picture>
                    <source srcset="<?php print template_url(); ?>images/projects-hero-img-mobile.jpg"
                            media="(max-width: 767px)">
                    <img src="<?php print template_url(); ?>images/projects-hero-img.jpg" alt="" class="img-cover">
                </picture>
                <div class="hero__img-decor-left bg-yellow d-none d-md-block"></div>
                <div class="hero__img-decor-right d-none d-md-block"></div>
            </div>
        </div>
    </section>

    <section class="section section-filter section-projects-multisport">
        <div class="container position-relative">
            <div class="circles circles--top-right d-none d-lg-block">
                <img src="<?php print template_url(); ?>modules/layouts/svg/projects/skin-1.svg">
            </div>
            <div class="circles circles--top-left d-none d-lg-block">
                <img src="<?php print template_url(); ?>modules/layouts/svg/projects/skin-2.svg">
            </div>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <div class="section__block-title text-sm-center">
                        <h2>Multisport projects</h2>
                        <p class="lead-text">.... has been allowing young people to multisport from childhood. From the
                            medical world, the call for multi&#8209;faceted sports practice for young children is
                            getting louder. This is based on numerous scientific studies that show that practicing a
                            single sport involves a signifi-cantly greater risk of stress fractures and other overuse
                            injuries. Children who move too unilaterally also develop less motor skills.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-11 col-lg-12 mx-auto">
                    <div class="row wrapper-cards">
                        <div class="col-sm-6 col-lg-3">
                            <div class="card border-0 bg-transparent color-red rounded-0">
                                <a href="#" class="d-block card-img-top rounded-0">
                                    <img src="<?php print template_url(); ?>images/filter-img-1.jpg" class="img-cover"
                                         alt="">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="#">Bewegingsschool</a>
                                    </h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipis-cing elit, sed
                                        do eiusmod. Lorem ipsum dolor sit amet, consectetur.</p>
                                </div>
                                <div class="card-footer border-0 bg-transparent rounded-0">
                                    <module type="btn" template="sporta-card-links-with-icons" button_style="yellow" button_text="Find out more"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card border-0 bg-transparent color-yellow">
                                <a href="#" class="d-block card-img-top rounded-0">
                                    <img src="<?php print template_url(); ?>images/news-2.jpg" class="img-cover" alt="">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="#">Multimove</a>
                                    </h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipis-cing elit, sed
                                        do eiusmod. Lorem ipsum dolor sit amet, consectetur.</p>
                                </div>
                                <div class="card-footer border-0 bg-transparent">
                                    <module type="btn" template="sporta-card-links-with-icons" button_style="yellow" button_text="Find out more"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card border-0 bg-transparent color-green">
                                <a href="#" class="d-block card-img-top rounded-0">
                                    <img src="<?php print template_url(); ?>images/filter-img-3.jpg" class="img-cover"
                                         alt="">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="#">Multi skillz</a>
                                    </h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipis-cing elit, sed
                                        do eiusmod. Lorem ipsum dolor sit amet, consectetur.</p>
                                </div>
                                <div class="card-footer border-0 bg-transparent">
                                    <module type="btn" template="sporta-card-links-with-icons" button_style="yellow" button_text="Find out more"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card border-0 bg-transparent color-red">
                                <a href="#" class="d-block card-img-top rounded-0">
                                    <img src="<?php print template_url(); ?>images/filter-img-3.jpg" class="img-cover"
                                         alt="">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="#">Omnisport</a>
                                    </h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipis-cing elit, sed
                                        do eiusmod. Lorem ipsum dolor sit amet, consectetur.</p>
                                </div>
                                <div class="card-footer border-0 bg-transparent">
                                    <module type="btn" template="sporta-card-links-with-icons" button_style="yellow" button_text="Find out more"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-fullwidth-img section-projects-info">
        <div class="wrap-img">
            <picture>
                <source srcset="<?php print template_url(); ?>images/volleyball-projects-mobile.jpg"
                        media="(max-width: 991px)">
                <img src="<?php print template_url(); ?>images/volleyball.jpg" alt="" class="img-cover">
            </picture>
        </div>

        <div class="container position-relative">
            <div class="card-info text-center">
                <h4 class="card-info__title">Are you a<br>multisport club?</h4>
                <p class="card-info__text">Secure your members and trainers</p>
                <div class="card-info__for-only">
                    <div class="card-info__for-only-title">for only</div>
                    <div class="card-info__for-only-quantity">5,-</div>
                </div>
                <module type="btn" template="sporta-buttons" button_style="btn btn-animate btn-small" button_text="Meer info"/>
            </div>
        </div>
    </section>

    <section class="section section-about section-projects-about">
        <div class="container">
            <div class="row no-gutters about-card">
                <div class="col-lg-5 order-1">
                    <div class="about-card-content pl-lg-1">
                        <h3 class="about-card__title">Sport-i-label</h3>
                        <p class="about-card__text  about-card__text--max-width">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        <div class="about-card__wrap-link">
                            <module type="btn" template="sporta-card-links-with-icons" button_style="red text-decoration-none" button_text="Find out more"/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-0 order-lg-1">
                    <div class="about-card__img about-card__img--ml">
                        <div class="rect rect--top-right rect--green d-none d-lg-block"></div>
                        <div class="circles circles--top-right d-none d-lg-block">
                            <img src="<?php print template_url(); ?>modules/layouts/svg/projects/skin-3.svg">
                        </div>
                        <picture>
                            <source srcset="<?php print template_url(); ?>images/single-post-img-1-mobile.jpg"
                                    media="(max-width: 479px)">
                            <source srcset="<?php print template_url(); ?>images/projects-img-1-tablet.jpg"
                                    media="(min-width: 480px) and (max-width: 991px)">
                            <img src="<?php print template_url(); ?>images/single-post-img-1.jpg" alt="">
                        </picture>
                    </div>
                </div>
            </div>
            <div class="row no-gutters about-card">
                <div class="col-lg-6">
                    <div class="about-card__img">
                        <div class="rect rect--top-left rect--yellow d-none d-lg-block"></div>
                        <div class="circles circles--bottom-left d-none d-lg-block">
                            <img src="<?php print template_url(); ?>modules/layouts/svg/projects/skin-4.svg">
                        </div>
                        <picture>
                            <source srcset="<?php print template_url(); ?>images/about-img-2-mobile.jpg"
                                    media="(max-width: 479px)">
                            <source srcset="<?php print template_url(); ?>images/projects-about-img-2-tablet.jpg"
                                    media="(min-width: 480px) and (max-width: 991px)">
                            <img src="<?php print template_url(); ?>images/about-img-2.jpg" alt="">
                        </picture>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="about-card-content">
                        <h3 class="about-card__title">Sportlight</h3>
                        <p class="about-card__text  about-card__text--max-width">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        <div class="about-card__wrap-link">
                            <module type="btn" template="sporta-card-links-with-icons" button_style="red text-decoration-none" button_text="Find out more"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include template_dir() . "footer.php"; ?>
