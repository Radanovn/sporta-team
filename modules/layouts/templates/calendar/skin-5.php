<?php

/*

type: layout

name: Calendar 5

position: 5

*/

?>
<section class="section section-filter section-calendar-trainings edit safe-mode allow-drop" field="layout-calendar-skin-5-<?php print $params['id'] ?>" rel="content">
    <div class="container position-relative">
        <div class="circles circles--top-right d-none d-lg-block">
            <img src="<?php print template_url(); ?>modules/layouts/svg/calendar/skin-6.svg">
        </div>
        <div class="circles circles--bottom-left d-none d-xl-block">
            <img src="<?php print template_url(); ?>modules/layouts/svg/calendar/skin-7.svg">
        </div>
        <div class="row">
            <div class="col-lg-9 mx-lg-auto">
                <div class="section__block-title text-sm-center">
                    <h2>Calender of trainings</h2>
                    <p class="lead-text">Sed do eiusmod tempor incididunt u tempor incididun. Sed do eiusmod tempor
                        incidi-dunt u tempor incididun. Sed do eiusmod tempor incididunt u tempor incididun.</p>
                </div>
            </div>
        </div>
        <div class="cards-wrap mx-lg-auto">
            <div class="col-lg-4 calendar-sidebar">
                <aside class="filters calendar-filters">
                    <form id="form-filters" class="accordion">
                        <div class="filters__header d-lg-none">
                            <div class="d-flex align-items-center">
                                <h2 class="filters__title">Filters</h2>
                                <span class="js-filter-picked clear-all d-md-none">Clear all</span>
                            </div>
                            <div class="filters-btn-close js-filters-close">
                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 15.2471L15 3.24707" stroke="#1D2128" stroke-width="2"
                                          stroke-linecap="round"/>
                                    <path d="M15 15.2471L3 3.24707" stroke="#1D2128" stroke-width="2"
                                          stroke-linecap="round"/>
                                </svg>
                            </div>
                        </div>
                        <div class="filters__item">
                            <div class="filters__item-title" id="headingOne">
                                <h3>
                                            <span class="filters__item-title-text js-filters-item-title"
                                                  role="button" data-toggle="collapse" data-target="#filters-item-1"
                                                  aria-expanded="false" aria-controls="filters-item-1">
                                                For who?
                                                <span class="filters__item-title-icon"></span>
                                            </span>
                                </h3>
                            </div>
                            <div class="collapse js-filters-item-body" id="filters-item-1"
                                 aria-labelledby="headingOne" data-parent="#form-filters">
                                <div class="filters__item-body">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input js-filter"
                                                   id="forwhocheck1" value="Clubleden">
                                            <label class="custom-control-label" for="forwhocheck1">Clubleden</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input js-filter"
                                                   id="forwhocheck2" value="Clubbestuurders">
                                            <label class="custom-control-label"
                                                   for="forwhocheck2">Clubbestuurders</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input js-filter"
                                                   id="forwhocheck3" value="Trainers">
                                            <label class="custom-control-label" for="forwhocheck3">Trainers</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="filters__item">
                            <div class="filters__item-title" id="headingTwo">
                                <h4>
                                            <span class="filters__item-title-text js-filters-item-title"
                                                  role="button" data-toggle="collapse" data-target="#filters-item-2"
                                                  aria-expanded="false" aria-controls="filters-item-2">
                                                Sport
                                                <span class="filters__item-title-icon"></span>
                                            </span>
                                </h4>
                            </div>
                            <div class="collapse js-filters-item-body" id="filters-item-2"
                                 aria-labelledby="headingTwo" data-parent="#form-filters">
                                <div class="filters__item-body">
                                    <div class="block-collapsed">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input js-filter"
                                                       id="sportcheck1" value="Atletiek">
                                                <label class="custom-control-label"
                                                       for="sportcheck1">Atletiek</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input js-filter"
                                                       id="sportcheck2" value="Judo">
                                                <label class="custom-control-label" for="sportcheck2">Judo</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input js-filter"
                                                       id="sportcheck3" value="Basket">
                                                <label class="custom-control-label" for="sportcheck3">Basket</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input js-filter"
                                                       id="sportcheck4" value="Atletiek">
                                                <label class="custom-control-label"
                                                       for="sportcheck4">Atletiek</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input js-filter"
                                                       id="sportcheck5" value="Judo">
                                                <label class="custom-control-label" for="sportcheck5">Judo</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input js-filter"
                                                       id="sportcheck6" value="Atletiek">
                                                <label class="custom-control-label"
                                                       for="sportcheck6">Atletiek</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input js-filter"
                                                       id="sportcheck7" value="Judo">
                                                <label class="custom-control-label" for="sportcheck7">Judo</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input js-filter"
                                                       id="sportcheck8" value="Basket">
                                                <label class="custom-control-label" for="sportcheck8">Basket</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input js-filter"
                                                       id="sportcheck9" value="Atletiek">
                                                <label class="custom-control-label"
                                                       for="sportcheck9">Atletiek</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input js-filter"
                                                       id="sportcheck10" value="Judo">
                                                <label class="custom-control-label" for="sportcheck10">Judo</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                            <span class="filters-show-more js-filters-show-more">
                                                <span class="filters-show-more__show">Show more</span>
                                                <span class="filters-show-more__hide">hide</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="filters__item">
                            <div class="filters__item-title" id="headingThree">
                                <h4>
                                            <span class="filters__item-title-text js-filters-item-title"
                                                  role="button" data-toggle="collapse" data-target="#filters-item-3"
                                                  aria-expanded="false" aria-controls="filters-item-3">
                                                Theme
                                                <span class="filters__item-title-icon"></span>
                                            </span>
                                </h4>
                            </div>
                            <div class="collapse js-filters-item-body" id="filters-item-3"
                                 aria-labelledby="headingThree" data-parent="#form-filters">
                                <div class="filters__item-body">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input js-filter"
                                                   id="themecheck1" value="Social">
                                            <label class="custom-control-label" for="themecheck1">Social</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input js-filter"
                                                   id="themecheck2" value="Ethisch">
                                            <label class="custom-control-label" for="themecheck2">Ethisch</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input js-filter"
                                                   id="themecheck3" value="Promo">
                                            <label class="custom-control-label" for="themecheck3">Promo</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input js-filter"
                                                   id="themecheck4" value="Social">
                                            <label class="custom-control-label" for="themecheck4">Social</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input js-filter"
                                                   id="themecheck5" value="Ethisch">
                                            <label class="custom-control-label" for="themecheck5">Ethisch</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="filters__item">
                            <div class="filters__item-title" id="headingFour">
                                <h4>
                                            <span class="filters__item-title-text js-filters-item-title"
                                                  role="button" data-toggle="collapse" data-target="#filters-item-4"
                                                  aria-expanded="false" aria-controls="filters-item-4">
                                                Date
                                                <span class="filters__item-title-icon"></span>
                                            </span>
                                </h4>
                            </div>
                            <div class="collapse js-filters-item-body" id="filters-item-4"
                                 aria-labelledby="headingFour" data-parent="#form-filters">
                                <div class="filters__item-body">
                                    <div id="filter-datepicker"></div>
                                </div>
                            </div>
                        </div>

                        <div class="filters__btn-bar">
                            <span
                                class="js-filter-picked clear-all d-none d-md-inline-block d-lg-none">Clear all</span>
                            <button type="submit" class="btn btn-animate btn-green btn-apply">Apply filters</button>
                        </div>
                    </form>
                </aside>
            </div>
            <div class="wrap-btn-filter d-lg-none">
                <button class="btn-filter js-filters-open">
                            <span class="btn-filter__icon">
                                <svg width="15" height="16" viewBox="0 0 15 16" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.989136 13.6606H8.13144" stroke="#1D2128" stroke-width="1.75"
                                          stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M0.989136 7.66064H10.9884" stroke="#1D2128" stroke-width="1.75"
                                          stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M0.989136 1.66064H13.8453" stroke="#1D2128" stroke-width="1.75"
                                          stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                    <span class="btn-filter__text">Filters</span>
                </button>
            </div>
            <div class="col-lg-8 filters-selected-wrap d-none d-md-inline-block">
                <div class="filters-selected"></div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 bg-transparent color-red rounded-0">
                    <div class="card-hover-block d-none d-lg-flex">
                        <div class="card-hover-block__body">
                            <h6>LOOKING FOR FURTHER TRAINING AND COURSES SPECIFICALLY FOR TRAINERS?</h6>
                        </div>
                        <div class="card-hover-block__footer">
                            <a href="#" class="card-link link">
                                Meer info
                                <span class="link__arrow">
                                            <svg width="6" height="11" viewBox="0 0 6 11" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1.70711 0.370774C1.31658 -0.0197506 0.683417 -0.0197506 0.292893 0.370774C-0.0976315 0.761298 -0.0976314 1.39446 0.292893 1.78499L1.70711 0.370774ZM5 5.07788L5.70711 5.78499C5.89464 5.59745 6 5.3431 6 5.07788C6 4.81266 5.89464 4.55831 5.70711 4.37077L5 5.07788ZM0.292893 8.37077C-0.0976311 8.7613 -0.0976311 9.39446 0.292893 9.78499C0.683418 10.1755 1.31658 10.1755 1.70711 9.78499L0.292893 8.37077ZM0.292893 1.78499L4.29289 5.78499L5.70711 4.37077L1.70711 0.370774L0.292893 1.78499ZM4.29289 4.37077L0.292893 8.37077L1.70711 9.78499L5.70711 5.78499L4.29289 4.37077Z"
                                                    fill="#000000"/>
                                            </svg>
                                        </span>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="d-block card-img-top rounded-0">
                        <img src="<?php print template_url(); ?>images/calendar-card-img.jpg" class="img-cover"
                             alt="">
                    </a>
                    <div class="card-body">
                        <div class="categories">
                            <a href="#" class="categories__item categories__item--red">financieel</a>
                        </div>
                        <p class="card-text">Multi skillz introduction modu-le: motor skills develop for your
                            sports</p>
                    </div>
                    <div class="card-footer border-0 bg-transparent rounded-0">
                        <div class="d-flex">
                            <span class="card-date">November 17, 2020</span>
                            <span class="card-location">
                                        <span class="card-location__icon">
                                            <svg width="14" height="20" viewBox="0 0 14 20" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.89376 1.21436H6.88526H6.87676C3.73175 1.21436 1.03725 3.72186 0.935248 6.74786C0.909748 7.67436 1.18175 8.68586 1.56425 9.46786C1.56425 9.46786 1.57275 9.47636 1.57275 9.48486L6.13726 17.7809C6.29026 18.0699 6.58776 18.2144 6.88526 18.2144C7.18276 18.2144 7.48026 18.0699 7.63326 17.7809L12.1978 9.48486C12.1978 9.47636 12.2063 9.46786 12.2063 9.46786C12.5888 8.68586 12.8608 7.67436 12.8353 6.74786C12.7333 3.72186 10.0388 1.21436 6.89376 1.21436Z"
                                                    stroke="#221B38" stroke-width="1.75" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round"/>
                                                <path
                                                    d="M6.88672 9.28931C8.06031 9.28931 9.01172 8.3379 9.01172 7.16431C9.01172 5.9907 8.06031 5.03931 6.88672 5.03931C5.71312 5.03931 4.76172 5.9907 4.76172 7.16431C4.76172 8.3379 5.71312 9.28931 6.88672 9.28931Z"
                                                    stroke="#221B38" stroke-width="1.75" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>

                                        Gent
                                    </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 bg-transparent color-yellow rounded-0">
                    <div class="card-hover-block d-none d-lg-flex">
                        <div class="card-hover-block__body">
                            <h6>LOOKING FOR FURTHER TRAINING AND COURSES SPECIFICALLY FOR TRAINERS?</h6>
                        </div>
                        <div class="card-hover-block__footer">
                            <a href="#" class="card-link link">
                                Meer info
                                <span class="link__arrow">
                                            <svg width="6" height="11" viewBox="0 0 6 11" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1.70711 0.370774C1.31658 -0.0197506 0.683417 -0.0197506 0.292893 0.370774C-0.0976315 0.761298 -0.0976314 1.39446 0.292893 1.78499L1.70711 0.370774ZM5 5.07788L5.70711 5.78499C5.89464 5.59745 6 5.3431 6 5.07788C6 4.81266 5.89464 4.55831 5.70711 4.37077L5 5.07788ZM0.292893 8.37077C-0.0976311 8.7613 -0.0976311 9.39446 0.292893 9.78499C0.683418 10.1755 1.31658 10.1755 1.70711 9.78499L0.292893 8.37077ZM0.292893 1.78499L4.29289 5.78499L5.70711 4.37077L1.70711 0.370774L0.292893 1.78499ZM4.29289 4.37077L0.292893 8.37077L1.70711 9.78499L5.70711 5.78499L4.29289 4.37077Z"
                                                    fill="#000000"/>
                                            </svg>
                                        </span>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="d-block card-img-top rounded-0">
                        <img src="<?php print template_url(); ?>images/calendar-card-img.jpg" class="img-cover"
                             alt="">
                    </a>
                    <div class="card-body">
                        <div class="categories">
                            <a href="#" class="categories__item categories__item--red">financieel</a>
                            <a href="#" class="categories__item categories__item--green">promotioneel</a>
                        </div>
                        <p class="card-text">Multi skillz introduction modu-le: motor skills develop for your
                            sports</p>
                    </div>
                    <div class="card-footer border-0 bg-transparent rounded-0">
                        <div class="d-flex">
                            <span class="card-date">November 17, 2020</span>
                            <span class="card-location">
                                        <span class="card-location__icon">
                                            <svg width="14" height="20" viewBox="0 0 14 20" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.89376 1.21436H6.88526H6.87676C3.73175 1.21436 1.03725 3.72186 0.935248 6.74786C0.909748 7.67436 1.18175 8.68586 1.56425 9.46786C1.56425 9.46786 1.57275 9.47636 1.57275 9.48486L6.13726 17.7809C6.29026 18.0699 6.58776 18.2144 6.88526 18.2144C7.18276 18.2144 7.48026 18.0699 7.63326 17.7809L12.1978 9.48486C12.1978 9.47636 12.2063 9.46786 12.2063 9.46786C12.5888 8.68586 12.8608 7.67436 12.8353 6.74786C12.7333 3.72186 10.0388 1.21436 6.89376 1.21436Z"
                                                    stroke="#221B38" stroke-width="1.75" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round"/>
                                                <path
                                                    d="M6.88672 9.28931C8.06031 9.28931 9.01172 8.3379 9.01172 7.16431C9.01172 5.9907 8.06031 5.03931 6.88672 5.03931C5.71312 5.03931 4.76172 5.9907 4.76172 7.16431C4.76172 8.3379 5.71312 9.28931 6.88672 9.28931Z"
                                                    stroke="#221B38" stroke-width="1.75" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>

                                        Gent
                                    </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 bg-transparent color-green rounded-0">
                    <div class="card-hover-block d-none d-lg-flex">
                        <div class="card-hover-block__body">
                            <h6>Sportletselpreventie krijgt meer en meer aandacht binnen de trainingen/sportles-
                                sen.</h6>
                        </div>
                        <div class="card-hover-block__footer">
                            <a href="#" class="card-link link">
                                Meer info
                                <span class="link__arrow">
                                            <svg width="6" height="11" viewBox="0 0 6 11" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1.70711 0.370774C1.31658 -0.0197506 0.683417 -0.0197506 0.292893 0.370774C-0.0976315 0.761298 -0.0976314 1.39446 0.292893 1.78499L1.70711 0.370774ZM5 5.07788L5.70711 5.78499C5.89464 5.59745 6 5.3431 6 5.07788C6 4.81266 5.89464 4.55831 5.70711 4.37077L5 5.07788ZM0.292893 8.37077C-0.0976311 8.7613 -0.0976311 9.39446 0.292893 9.78499C0.683418 10.1755 1.31658 10.1755 1.70711 9.78499L0.292893 8.37077ZM0.292893 1.78499L4.29289 5.78499L5.70711 4.37077L1.70711 0.370774L0.292893 1.78499ZM4.29289 4.37077L0.292893 8.37077L1.70711 9.78499L5.70711 5.78499L4.29289 4.37077Z"
                                                    fill="#000000"/>
                                            </svg>
                                        </span>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="d-block card-img-top rounded-0">
                        <img src="<?php print template_url(); ?>images/calendar-card-img.jpg" class="img-cover"
                             alt="">
                    </a>
                    <div class="card-body">
                        <div class="categories">
                            <a href="#" class="categories__item categories__item--red">financieel</a>
                        </div>
                        <p class="card-text">Multi skillz introduction modu-le: motor skills develop for your
                            sports</p>
                    </div>
                        <div class="card-footer border-0 bg-transparent rounded-0">
                            <div class="d-flex">
                                <span class="card-date">November 17, 2020</span>
                                <span class="card-location">
                                            <span class="card-location__icon">
                                                <svg width="14" height="20" viewBox="0 0 14 20" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.89376 1.21436H6.88526H6.87676C3.73175 1.21436 1.03725 3.72186 0.935248 6.74786C0.909748 7.67436 1.18175 8.68586 1.56425 9.46786C1.56425 9.46786 1.57275 9.47636 1.57275 9.48486L6.13726 17.7809C6.29026 18.0699 6.58776 18.2144 6.88526 18.2144C7.18276 18.2144 7.48026 18.0699 7.63326 17.7809L12.1978 9.48486C12.1978 9.47636 12.2063 9.46786 12.2063 9.46786C12.5888 8.68586 12.8608 7.67436 12.8353 6.74786C12.7333 3.72186 10.0388 1.21436 6.89376 1.21436Z"
                                                        stroke="#221B38" stroke-width="1.75" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path
                                                        d="M6.88672 9.28931C8.06031 9.28931 9.01172 8.3379 9.01172 7.16431C9.01172 5.9907 8.06031 5.03931 6.88672 5.03931C5.71312 5.03931 4.76172 5.9907 4.76172 7.16431C4.76172 8.3379 5.71312 9.28931 6.88672 9.28931Z"
                                                        stroke="#221B38" stroke-width="1.75" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </span>

                                            Gent
                                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 bg-transparent color-green rounded-0">
                        <div class="card-hover-block d-none d-lg-flex">
                            <div class="card-hover-block__body">
                                <h6>Sportletselpreventie krijgt meer en meer aandacht binnen de trainingen/sportles-
                                    sen.</h6>
                            </div>
                            <div class="card-hover-block__footer">
                                <a href="#" class="card-link link">
                                    Meer info
                                    <span class="link__arrow">
                                                <svg width="6" height="11" viewBox="0 0 6 11" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.70711 0.370774C1.31658 -0.0197506 0.683417 -0.0197506 0.292893 0.370774C-0.0976315 0.761298 -0.0976314 1.39446 0.292893 1.78499L1.70711 0.370774ZM5 5.07788L5.70711 5.78499C5.89464 5.59745 6 5.3431 6 5.07788C6 4.81266 5.89464 4.55831 5.70711 4.37077L5 5.07788ZM0.292893 8.37077C-0.0976311 8.7613 -0.0976311 9.39446 0.292893 9.78499C0.683418 10.1755 1.31658 10.1755 1.70711 9.78499L0.292893 8.37077ZM0.292893 1.78499L4.29289 5.78499L5.70711 4.37077L1.70711 0.370774L0.292893 1.78499ZM4.29289 4.37077L0.292893 8.37077L1.70711 9.78499L5.70711 5.78499L4.29289 4.37077Z"
                                                        fill="#000000"/>
                                                </svg>
                                            </span>
                                </a>
                            </div>
                        </div>
                        <a href="#" class="d-block card-img-top rounded-0">
                            <img src="<?php print template_url(); ?>images/calendar-card-img.jpg" class="img-cover"
                                 alt="">
                        </a>
                        <div class="card-body">
                            <div class="categories">
                                <a href="#" class="categories__item categories__item--red">financieel</a>
                            </div>
                            <p class="card-text">Multi skillz introduction modu-le: motor skills develop for your
                                sports</p>
                        </div>
                        <div class="card-footer border-0 bg-transparent rounded-0">
                            <div class="d-flex">
                                <span class="card-date">November 17, 2020</span>
                                <span class="card-location">
                                            <span class="card-location__icon">
                                                <svg width="14" height="20" viewBox="0 0 14 20" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.89376 1.21436H6.88526H6.87676C3.73175 1.21436 1.03725 3.72186 0.935248 6.74786C0.909748 7.67436 1.18175 8.68586 1.56425 9.46786C1.56425 9.46786 1.57275 9.47636 1.57275 9.48486L6.13726 17.7809C6.29026 18.0699 6.58776 18.2144 6.88526 18.2144C7.18276 18.2144 7.48026 18.0699 7.63326 17.7809L12.1978 9.48486C12.1978 9.47636 12.2063 9.46786 12.2063 9.46786C12.5888 8.68586 12.8608 7.67436 12.8353 6.74786C12.7333 3.72186 10.0388 1.21436 6.89376 1.21436Z"
                                                        stroke="#221B38" stroke-width="1.75" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path
                                                        d="M6.88672 9.28931C8.06031 9.28931 9.01172 8.3379 9.01172 7.16431C9.01172 5.9907 8.06031 5.03931 6.88672 5.03931C5.71312 5.03931 4.76172 5.9907 4.76172 7.16431C4.76172 8.3379 5.71312 9.28931 6.88672 9.28931Z"
                                                        stroke="#221B38" stroke-width="1.75" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </span>

                                            Gent
                                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 bg-transparent color-red rounded-0">
                        <div class="card-hover-block d-none d-lg-flex">
                            <div class="card-hover-block__body">
                                <h6>LOOKING FOR FURTHER TRAINING AND COURSES SPECIFICALLY FOR TRAINERS?</h6>
                            </div>
                            <div class="card-hover-block__footer">
                                <a href="#" class="card-link link">
                                    Meer info
                                    <span class="link__arrow">
                                                <svg width="6" height="11" viewBox="0 0 6 11" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.70711 0.370774C1.31658 -0.0197506 0.683417 -0.0197506 0.292893 0.370774C-0.0976315 0.761298 -0.0976314 1.39446 0.292893 1.78499L1.70711 0.370774ZM5 5.07788L5.70711 5.78499C5.89464 5.59745 6 5.3431 6 5.07788C6 4.81266 5.89464 4.55831 5.70711 4.37077L5 5.07788ZM0.292893 8.37077C-0.0976311 8.7613 -0.0976311 9.39446 0.292893 9.78499C0.683418 10.1755 1.31658 10.1755 1.70711 9.78499L0.292893 8.37077ZM0.292893 1.78499L4.29289 5.78499L5.70711 4.37077L1.70711 0.370774L0.292893 1.78499ZM4.29289 4.37077L0.292893 8.37077L1.70711 9.78499L5.70711 5.78499L4.29289 4.37077Z"
                                                        fill="#000000"/>
                                                </svg>
                                            </span>
                                </a>
                            </div>
                        </div>
                        <a href="#" class="d-block card-img-top rounded-0">
                            <img src="<?php print template_url(); ?>images/calendar-card-img.jpg" class="img-cover"
                                 alt="">
                        </a>
                        <div class="card-body">
                            <div class="categories">
                                <a href="#" class="categories__item categories__item--red">financieel</a>
                            </div>
                            <p class="card-text">Multi skillz introduction modu-le: motor skills develop for your
                                sports</p>
                        </div>
                        <div class="card-footer border-0 bg-transparent rounded-0">
                            <div class="d-flex">
                                <span class="card-date">November 17, 2020</span>
                                <span class="card-location">
                                            <span class="card-location__icon">
                                                <svg width="14" height="20" viewBox="0 0 14 20" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.89376 1.21436H6.88526H6.87676C3.73175 1.21436 1.03725 3.72186 0.935248 6.74786C0.909748 7.67436 1.18175 8.68586 1.56425 9.46786C1.56425 9.46786 1.57275 9.47636 1.57275 9.48486L6.13726 17.7809C6.29026 18.0699 6.58776 18.2144 6.88526 18.2144C7.18276 18.2144 7.48026 18.0699 7.63326 17.7809L12.1978 9.48486C12.1978 9.47636 12.2063 9.46786 12.2063 9.46786C12.5888 8.68586 12.8608 7.67436 12.8353 6.74786C12.7333 3.72186 10.0388 1.21436 6.89376 1.21436Z"
                                                        stroke="#221B38" stroke-width="1.75" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path
                                                        d="M6.88672 9.28931C8.06031 9.28931 9.01172 8.3379 9.01172 7.16431C9.01172 5.9907 8.06031 5.03931 6.88672 5.03931C5.71312 5.03931 4.76172 5.9907 4.76172 7.16431C4.76172 8.3379 5.71312 9.28931 6.88672 9.28931Z"
                                                        stroke="#221B38" stroke-width="1.75" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </span>

                                            Gent
                                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 bg-transparent color-yellow rounded-0">
                        <div class="card-hover-block d-none d-lg-flex">
                            <div class="card-hover-block__body">
                                <h6>LOOKING FOR FURTHER TRAINING AND COURSES SPECIFICALLY FOR TRAINERS?</h6>
                            </div>
                            <div class="card-hover-block__footer">
                                <a href="#" class="card-link link">
                                    Meer info
                                    <span class="link__arrow">
                                                <svg width="6" height="11" viewBox="0 0 6 11" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.70711 0.370774C1.31658 -0.0197506 0.683417 -0.0197506 0.292893 0.370774C-0.0976315 0.761298 -0.0976314 1.39446 0.292893 1.78499L1.70711 0.370774ZM5 5.07788L5.70711 5.78499C5.89464 5.59745 6 5.3431 6 5.07788C6 4.81266 5.89464 4.55831 5.70711 4.37077L5 5.07788ZM0.292893 8.37077C-0.0976311 8.7613 -0.0976311 9.39446 0.292893 9.78499C0.683418 10.1755 1.31658 10.1755 1.70711 9.78499L0.292893 8.37077ZM0.292893 1.78499L4.29289 5.78499L5.70711 4.37077L1.70711 0.370774L0.292893 1.78499ZM4.29289 4.37077L0.292893 8.37077L1.70711 9.78499L5.70711 5.78499L4.29289 4.37077Z"
                                                        fill="#000000"/>
                                                </svg>
                                            </span>
                                </a>
                            </div>
                        </div>
                        <a href="#" class="d-block card-img-top rounded-0">
                            <img src="<?php print template_url(); ?>images/calendar-card-img.jpg" class="img-cover"
                                 alt="">
                        </a>
                        <div class="card-body">
                            <div class="categories">
                                <a href="#" class="categories__item categories__item--red">financieel</a>
                                <a href="#" class="categories__item categories__item--green">promotioneel</a>
                            </div>
                            <p class="card-text">Multi skillz introduction modu-le: motor skills develop for your
                                sports</p>
                        </div>
                        <div class="card-footer border-0 bg-transparent rounded-0">
                            <div class="d-flex">
                                <span class="card-date">November 17, 2020</span>
                                <span class="card-location">
                                            <span class="card-location__icon">
                                                <svg width="14" height="20" viewBox="0 0 14 20" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.89376 1.21436H6.88526H6.87676C3.73175 1.21436 1.03725 3.72186 0.935248 6.74786C0.909748 7.67436 1.18175 8.68586 1.56425 9.46786C1.56425 9.46786 1.57275 9.47636 1.57275 9.48486L6.13726 17.7809C6.29026 18.0699 6.58776 18.2144 6.88526 18.2144C7.18276 18.2144 7.48026 18.0699 7.63326 17.7809L12.1978 9.48486C12.1978 9.47636 12.2063 9.46786 12.2063 9.46786C12.5888 8.68586 12.8608 7.67436 12.8353 6.74786C12.7333 3.72186 10.0388 1.21436 6.89376 1.21436Z"
                                                        stroke="#221B38" stroke-width="1.75" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path
                                                        d="M6.88672 9.28931C8.06031 9.28931 9.01172 8.3379 9.01172 7.16431C9.01172 5.9907 8.06031 5.03931 6.88672 5.03931C5.71312 5.03931 4.76172 5.9907 4.76172 7.16431C4.76172 8.3379 5.71312 9.28931 6.88672 9.28931Z"
                                                        stroke="#221B38" stroke-width="1.75" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </span>

                                            Gent
                                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 bg-transparent color-red rounded-0">
                        <div class="card-hover-block d-none d-lg-flex">
                            <div class="card-hover-block__body">
                                <h6>LOOKING FOR FURTHER TRAINING AND COURSES SPECIFICALLY FOR TRAINERS?</h6>
                            </div>
                            <div class="card-hover-block__footer">
                                <a href="#" class="card-link link">
                                    Meer info
                                    <span class="link__arrow">
                                                <svg width="6" height="11" viewBox="0 0 6 11" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.70711 0.370774C1.31658 -0.0197506 0.683417 -0.0197506 0.292893 0.370774C-0.0976315 0.761298 -0.0976314 1.39446 0.292893 1.78499L1.70711 0.370774ZM5 5.07788L5.70711 5.78499C5.89464 5.59745 6 5.3431 6 5.07788C6 4.81266 5.89464 4.55831 5.70711 4.37077L5 5.07788ZM0.292893 8.37077C-0.0976311 8.7613 -0.0976311 9.39446 0.292893 9.78499C0.683418 10.1755 1.31658 10.1755 1.70711 9.78499L0.292893 8.37077ZM0.292893 1.78499L4.29289 5.78499L5.70711 4.37077L1.70711 0.370774L0.292893 1.78499ZM4.29289 4.37077L0.292893 8.37077L1.70711 9.78499L5.70711 5.78499L4.29289 4.37077Z"
                                                        fill="#000000"/>
                                                </svg>
                                            </span>
                                </a>
                            </div>
                        </div>
                        <a href="#" class="d-block card-img-top rounded-0">
                            <img src="<?php print template_url(); ?>images/calendar-card-img.jpg" class="img-cover"
                                 alt="">
                        </a>
                        <div class="card-body">
                            <div class="categories">
                                <a href="#" class="categories__item categories__item--red">financieel</a>
                            </div>
                            <p class="card-text">Multi skillz introduction modu-le: motor skills develop for your
                                sports</p>
                        </div>
                        <div class="card-footer border-0 bg-transparent rounded-0">
                            <div class="d-flex">
                                <span class="card-date">November 17, 2020</span>
                                <span class="card-location">
                                            <span class="card-location__icon">
                                                <svg width="14" height="20" viewBox="0 0 14 20" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.89376 1.21436H6.88526H6.87676C3.73175 1.21436 1.03725 3.72186 0.935248 6.74786C0.909748 7.67436 1.18175 8.68586 1.56425 9.46786C1.56425 9.46786 1.57275 9.47636 1.57275 9.48486L6.13726 17.7809C6.29026 18.0699 6.58776 18.2144 6.88526 18.2144C7.18276 18.2144 7.48026 18.0699 7.63326 17.7809L12.1978 9.48486C12.1978 9.47636 12.2063 9.46786 12.2063 9.46786C12.5888 8.68586 12.8608 7.67436 12.8353 6.74786C12.7333 3.72186 10.0388 1.21436 6.89376 1.21436Z"
                                                        stroke="#221B38" stroke-width="1.75" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path
                                                        d="M6.88672 9.28931C8.06031 9.28931 9.01172 8.3379 9.01172 7.16431C9.01172 5.9907 8.06031 5.03931 6.88672 5.03931C5.71312 5.03931 4.76172 5.9907 4.76172 7.16431C4.76172 8.3379 5.71312 9.28931 6.88672 9.28931Z"
                                                        stroke="#221B38" stroke-width="1.75" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </span>

                                            Gent
                                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 bg-transparent color-yellow rounded-0">
                        <div class="card-hover-block d-none d-lg-flex">
                            <div class="card-hover-block__body">
                                <h6>LOOKING FOR FURTHER TRAINING AND COURSES SPECIFICALLY FOR TRAINERS?</h6>
                            </div>
                            <div class="card-hover-block__footer">
                                <a href="#" class="card-link link">
                                    Meer info
                                    <span class="link__arrow">
                                                <svg width="6" height="11" viewBox="0 0 6 11" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.70711 0.370774C1.31658 -0.0197506 0.683417 -0.0197506 0.292893 0.370774C-0.0976315 0.761298 -0.0976314 1.39446 0.292893 1.78499L1.70711 0.370774ZM5 5.07788L5.70711 5.78499C5.89464 5.59745 6 5.3431 6 5.07788C6 4.81266 5.89464 4.55831 5.70711 4.37077L5 5.07788ZM0.292893 8.37077C-0.0976311 8.7613 -0.0976311 9.39446 0.292893 9.78499C0.683418 10.1755 1.31658 10.1755 1.70711 9.78499L0.292893 8.37077ZM0.292893 1.78499L4.29289 5.78499L5.70711 4.37077L1.70711 0.370774L0.292893 1.78499ZM4.29289 4.37077L0.292893 8.37077L1.70711 9.78499L5.70711 5.78499L4.29289 4.37077Z"
                                                        fill="#000000"/>
                                                </svg>
                                            </span>
                                </a>
                            </div>
                        </div>
                        <a href="#" class="d-block card-img-top rounded-0">
                            <img src="<?php print template_url(); ?>images/calendar-card-img.jpg" class="img-cover"
                                 alt="">
                        </a>
                        <div class="card-body">
                            <div class="categories">
                                <a href="#" class="categories__item categories__item--red">financieel</a>
                            </div>
                            <p class="card-text">Multi skillz introduction modu-le: motor skills develop for your
                                sports</p>
                        </div>
                        <div class="card-footer border-0 bg-transparent rounded-0">
                            <div class="d-flex">
                                <span class="card-date">November 17, 2020</span>
                                <span class="card-location">
                                            <span class="card-location__icon">
                                                <svg width="14" height="20" viewBox="0 0 14 20" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.89376 1.21436H6.88526H6.87676C3.73175 1.21436 1.03725 3.72186 0.935248 6.74786C0.909748 7.67436 1.18175 8.68586 1.56425 9.46786C1.56425 9.46786 1.57275 9.47636 1.57275 9.48486L6.13726 17.7809C6.29026 18.0699 6.58776 18.2144 6.88526 18.2144C7.18276 18.2144 7.48026 18.0699 7.63326 17.7809L12.1978 9.48486C12.1978 9.47636 12.2063 9.46786 12.2063 9.46786C12.5888 8.68586 12.8608 7.67436 12.8353 6.74786C12.7333 3.72186 10.0388 1.21436 6.89376 1.21436Z"
                                                        stroke="#221B38" stroke-width="1.75" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path
                                                        d="M6.88672 9.28931C8.06031 9.28931 9.01172 8.3379 9.01172 7.16431C9.01172 5.9907 8.06031 5.03931 6.88672 5.03931C5.71312 5.03931 4.76172 5.9907 4.76172 7.16431C4.76172 8.3379 5.71312 9.28931 6.88672 9.28931Z"
                                                        stroke="#221B38" stroke-width="1.75" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </span>

                                            Gent
                                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 bg-transparent color-red rounded-0">
                        <div class="card-hover-block d-none d-lg-flex">
                            <div class="card-hover-block__body">
                                <h6>LOOKING FOR FURTHER TRAINING AND COURSES SPECIFICALLY FOR TRAINERS?</h6>
                            </div>
                            <div class="card-hover-block__footer">
                                <a href="#" class="card-link link">
                                    Meer info
                                    <span class="link__arrow">
                                                <svg width="6" height="11" viewBox="0 0 6 11" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.70711 0.370774C1.31658 -0.0197506 0.683417 -0.0197506 0.292893 0.370774C-0.0976315 0.761298 -0.0976314 1.39446 0.292893 1.78499L1.70711 0.370774ZM5 5.07788L5.70711 5.78499C5.89464 5.59745 6 5.3431 6 5.07788C6 4.81266 5.89464 4.55831 5.70711 4.37077L5 5.07788ZM0.292893 8.37077C-0.0976311 8.7613 -0.0976311 9.39446 0.292893 9.78499C0.683418 10.1755 1.31658 10.1755 1.70711 9.78499L0.292893 8.37077ZM0.292893 1.78499L4.29289 5.78499L5.70711 4.37077L1.70711 0.370774L0.292893 1.78499ZM4.29289 4.37077L0.292893 8.37077L1.70711 9.78499L5.70711 5.78499L4.29289 4.37077Z"
                                                        fill="#000000"/>
                                                </svg>
                                            </span>
                                </a>
                            </div>
                        </div>
                        <a href="#" class="d-block card-img-top rounded-0">
                            <img src="<?php print template_url(); ?>images/calendar-card-img.jpg" class="img-cover"
                                 alt="">
                        </a>
                        <div class="card-body">
                            <div class="categories">
                                <a href="#" class="categories__item categories__item--red">financieel</a>
                            </div>
                            <p class="card-text">Multi skillz introduction modu-le: motor skills develop for your
                                sports</p>
                        </div>
                        <div class="card-footer border-0 bg-transparent rounded-0">
                            <div class="d-flex">
                                <span class="card-date">November 17, 2020</span>
                                <span class="card-location">
                                            <span class="card-location__icon">
                                                <svg width="14" height="20" viewBox="0 0 14 20" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.89376 1.21436H6.88526H6.87676C3.73175 1.21436 1.03725 3.72186 0.935248 6.74786C0.909748 7.67436 1.18175 8.68586 1.56425 9.46786C1.56425 9.46786 1.57275 9.47636 1.57275 9.48486L6.13726 17.7809C6.29026 18.0699 6.58776 18.2144 6.88526 18.2144C7.18276 18.2144 7.48026 18.0699 7.63326 17.7809L12.1978 9.48486C12.1978 9.47636 12.2063 9.46786 12.2063 9.46786C12.5888 8.68586 12.8608 7.67436 12.8353 6.74786C12.7333 3.72186 10.0388 1.21436 6.89376 1.21436Z"
                                                        stroke="#221B38" stroke-width="1.75" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path
                                                        d="M6.88672 9.28931C8.06031 9.28931 9.01172 8.3379 9.01172 7.16431C9.01172 5.9907 8.06031 5.03931 6.88672 5.03931C5.71312 5.03931 4.76172 5.9907 4.76172 7.16431C4.76172 8.3379 5.71312 9.28931 6.88672 9.28931Z"
                                                        stroke="#221B38" stroke-width="1.75" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </span>

                                            Gent
                                        </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

