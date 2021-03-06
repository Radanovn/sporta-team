<?php

/*

type: layout

name: Default calendar skin

description: Default calendar skin

*/

?>

<?php
$randId = uniqid();
?>

{!! $posts->scripts() !!}

<section class="section section-filter section-calendar-trainings safe-mode nodrop">
    <div class="container position-relative">
        <div class="circles circles--top-right d-none d-lg-block">
            <img src="<?php print template_url(); ?>modules/layouts/svg/calendar/skin-6.svg">
        </div>
        <div class="circles circles--bottom-left d-none d-xl-block">
            <img src="<?php print template_url(); ?>modules/layouts/svg/calendar/skin-7.svg">
        </div>
        <div class="row">
            <div class="col-lg-9 mx-lg-auto">
                <div class="section__block-title text-sm-center edit" field="layout-blog-block-title" rel="content">
                    <h2>DEFAULT BLOG</h2>
                    <p class="lead-text">This is the simple blog</p>
                </div>
            </div>
        </div>
{{--
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-2">
                {!! $posts->limit(); !!}
            </div>
            <div class="col-md-2">
                {!! $posts->sort(); !!}
            </div>
        </div>--}}

        {!! $posts->tags() !!}

        <div class="cards-wrap mx-lg-auto">

        <div class="col-lg-4 calendar-sidebar">
            <aside class="filters calendar-filters">
                <form id="form-filters" class="js-filter-form accordion" method="get">
                    <div class="filters__header d-lg-none">
                        <div class="d-flex align-items-center">
                            <h2 class="filters__title">{{_e('Filters')}}</h2>
                            <span class="js-filter-picked js-filter-reset clear-all d-md-none">{{_e('Clear all')}}</span>
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

                    {!! $posts->categories() !!}

                    {!! $posts->filters() !!}

                    <div class="filters__btn-bar">
                        <span class="js-filter-picked js-filter-reset clear-all d-none d-md-inline-block d-lg-none">{{_e('Clear all')}}</span>

                        @if($posts->showApplyFilterButton)
                            <button type="button" class="btn btn-animate btn-green btn-apply js-filter-apply">{{_e('Apply filters')}}</button>
                        @endif

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
                    <span class="btn-filter__text">{{_e('Filters')}}</span>
                </button>
            </div>


            {!! $posts->filtersActive() !!}

            @php
                $i=0;
            @endphp
            @foreach($posts->results() as $post)
            @php
               $i++;
               $colorClass = 'color-red';
               if (($i % 3) == 0) {
                   $colorClass = 'color-green';
               }
               if (($i % 2) == 0) {
                   $colorClass = 'color-yellow';
               }
            @endphp

            <div class="col-md-6 col-lg-4">
                <div class="card border-0 bg-transparent {{$colorClass}} rounded-0">
                    <div class="card-hover-block d-none d-lg-flex">
                        <div class="card-hover-block__body">
                         {{--   <h6>{{$post->title}}</h6>
                            <p>{{$post->shortDescription(200)}}</p>--}}

                            <h6>{{$post->getContentDataByFieldName('info_card_label')}}</h6>
                            <p>{!! $post->getContentDataByFieldName('info_card_description') !!}</p>

                        </div>
                        <div class="card-hover-block__footer">
                            <a href="{{site_url($post->url)}}" class="card-link link">
                                {{ _e('Meer info') }}
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
                        <img src="{{$post->thumbnail(650,400)}}" class="img-cover"
                             alt="">
                    </a>
                    <div class="card-body">
                        <div class="categories">
                            @php
                                $iTag=0;
                            @endphp
                            @foreach($post->tags as $tag)
                            @php
                                $iTag++;
                                $colorClass = 'red';
                                if (($iTag % 3) == 0) {
                                    $colorClass = 'green';
                                }
                                if (($iTag % 2) == 0) {
                                    $colorClass = 'yellow';
                                }
                            @endphp
                            <a href="?tags={{$tag->slug}}" class="categories__item categories__item--{{$colorClass}}">{{$tag->name}}</a>
                            @endforeach
                        </div>
                        <p class="card-text">
                            {!! $post->getContentDataByFieldName('card_text') !!}
                        </p>
                    </div>
                    <div class="card-footer border-0 bg-transparent rounded-0">
                        <div class="d-flex">
                            <span class="card-date">
                            @php
                                $date = $post->getCustomFieldValueByName('Date')
                            @endphp
                                @if($date)
                                    {{ date('d/m/Y', strtotime($date)) }}
                                @endif
                            </span>


                            @php
                                $location = $post->getCustomFieldValueByName('Location')
                            @endphp
                            @if($location)
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
                                {{ $location }}
                            </span>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="d-flex">
                <div class="mx-auto">
                {!! $posts->pagination() !!}
                </div>
            </div>

        </div>
    </div>
</section>
