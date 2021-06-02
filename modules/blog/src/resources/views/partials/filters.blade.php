
<div class="col-lg-4 calendar-sidebar">
    <aside class="filters calendar-filters">
        <form id="form-filters" class="accordion">
            <div class="filters__header d-lg-none">
                <div class="d-flex align-items-center">
                    <h2 class="filters__title">{{_e('Filters')}}</h2>
                    <span class="js-filter-picked clear-all d-md-none">{{_e('Clear all')}}</span>
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
        <span class="btn-filter__text">{{_e('Filters')}}/span>
    </button>
</div>
<div class="col-lg-8 filters-selected-wrap d-none d-md-inline-block">
    <div class="filters-selected"></div>
</div>
