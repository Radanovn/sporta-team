<?php
/*

  type: layout

  name: News - 2

  position: 2

 */
?>
<div class="section-about edit safe-mode nodrop" field="layout-news-article-skin-2-<?php print $params['id'] ?>" rel="content">
    <div class="row no-gutters about-card">
        <div class="col-lg-6">
            <div class="about-card__img">
                <div class="rect rect--top-left rect--yellow d-none d-lg-block"></div>
                <div class="circles circles--bottom-left d-none d-lg-block">
                    <img src="<?php print template_url(); ?>modules/layouts/templates/svg/news_inner/skin-4.svg">
                </div>
                <picture>
                    <source srcset="<?php print template_url(); ?>images/about-img-2-mobile.jpg" media="(max-width: 479px)">
                    <source srcset="<?php print template_url(); ?>images/about-img-2-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                    <img src="<?php print template_url(); ?>images/about-img-2.jpg" alt="">
                </picture>
            </div>
        </div>
        <div class="col-lg-5 offset-lg-1 position-relative">
            <div class="circles circles--bottom-right d-none d-xl-block">
                <img src="<?php print template_url(); ?>modules/layouts/templates/svg/news_inner/skin-5.svg">
            </div>
            <div class="about-card-content">
                <h3 class="about-card__title">Subtitle</h3>
                <p class="about-card__text  about-card__text--max-width">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                <div class="about-card__wrap-link">
                    <a href="#" class="link color-red text-decoration-none">
                        Find out more
                        <span class="link__arrow">
                                   <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M1.70711 0.370774C1.31658 -0.0197506 0.683417 -0.0197506 0.292893 0.370774C-0.0976315 0.761298 -0.0976314 1.39446 0.292893 1.78499L1.70711 0.370774ZM5 5.07788L5.70711 5.78499C5.89464 5.59745 6 5.3431 6 5.07788C6 4.81266 5.89464 4.55831 5.70711 4.37077L5 5.07788ZM0.292893 8.37077C-0.0976311 8.7613 -0.0976311 9.39446 0.292893 9.78499C0.683418 10.1755 1.31658 10.1755 1.70711 9.78499L0.292893 8.37077ZM0.292893 1.78499L4.29289 5.78499L5.70711 4.37077L1.70711 0.370774L0.292893 1.78499ZM4.29289 4.37077L0.292893 8.37077L1.70711 9.78499L5.70711 5.78499L4.29289 4.37077Z" fill="#000000"/>
                                   </svg>
                               </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row no-gutters about-card">
        <div class="col-lg-5 order-1">
            <div class="about-card-content pl-lg-1">
                <h3 class="about-card__title">Subtitle</h3>
                <p class="about-card__text  about-card__text--max-width">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                <ul class="list-unstyled list-custom list-custom-check list-custom-check--green">
                    <li>Lorem ipsum dolor</li>
                    <li>Lorem ipsum dolor</li>
                </ul>
                <div class="about-card__wrap-link">
                    <a href="#" class="link color-green text-decoration-none">
                        Find out more
                        <span class="link__arrow">
                                   <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M1.70711 0.370774C1.31658 -0.0197506 0.683417 -0.0197506 0.292893 0.370774C-0.0976315 0.761298 -0.0976314 1.39446 0.292893 1.78499L1.70711 0.370774ZM5 5.07788L5.70711 5.78499C5.89464 5.59745 6 5.3431 6 5.07788C6 4.81266 5.89464 4.55831 5.70711 4.37077L5 5.07788ZM0.292893 8.37077C-0.0976311 8.7613 -0.0976311 9.39446 0.292893 9.78499C0.683418 10.1755 1.31658 10.1755 1.70711 9.78499L0.292893 8.37077ZM0.292893 1.78499L4.29289 5.78499L5.70711 4.37077L1.70711 0.370774L0.292893 1.78499ZM4.29289 4.37077L0.292893 8.37077L1.70711 9.78499L5.70711 5.78499L4.29289 4.37077Z" fill="#000000"/>
                                   </svg>
                               </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 order-0 order-lg-1">
            <div class="about-card__img about-card__img--ml">
                <div class="rect rect--top-right rect--green d-none d-lg-block"></div>
                <picture>
                    <source srcset="<?php print template_url(); ?>images/single-post-img-1-mobile.jpg" media="(max-width: 479px)">
                    <source srcset="<?php print template_url(); ?>images/single-post-img-1-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                    <img src="<?php print template_url(); ?>images/single-post-img-1.jpg" alt="">
                </picture>
            </div>
        </div>
    </div>
</div>
