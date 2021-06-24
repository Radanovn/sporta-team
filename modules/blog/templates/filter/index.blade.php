<?php

/*

type: layout
name: Filter
description: Filter skin


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
                <div class="section__block-title text-sm-center edit" field="layout-filter-block-title" rel="content">
                    <h2>Sporta team will pamper you</h2>
                    <p class="lead-text">There is more to a membership at Sporta than you think.
                        Our sports club&#8209;sized insurance may be our show-piece, but behind that little horse is a whole series of other club privileges.
                        Feel free to get the most out of it, this range of exclusive benefits is entirely under your command.
                        <br>It would be a shame to pass up such top deals.</p>
                </div>
            </div>
        </div>

        {!! $posts->tags() !!}

        <div class="row cards-wrap mx-xl-auto">

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
                                <h5 class="card-hover-block__title">
                                    {{$post->getContentDataByFieldName('info_card_label')}}
                                </h5>
                                {!! $post->getContentDataByFieldName('info_card_description') !!}
                            </div>
                            <div class="card-hover-block__footer">
                                <a href="{{site_url($post->url)}}" class="btn btn-animate">{{ _e('Meer info') }}</a>
                            </div>
                        </div>
                        <a href="{{site_url($post->url)}}" class="d-block card-img-top rounded-0">
                            <img src="{{$post->thumbnail(650,400)}}" class="img-cover" alt="">
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
                            <h5 class="card-title">
                                <a href="{{site_url($post->url)}}">
                                    {{$post->getContentDataByFieldName('card_title')}}
                                </a>
                            </h5>
                            <p class="card-text">
                                {!! $post->getContentDataByFieldName('card_text') !!}
                            </p>
                        </div>
                        <div class="card-footer border-0 bg-transparent rounded-0">
                            <a href="{{site_url($post->url)}}" class="card-link link color-yellow">
                                {{ _e('Meer info') }}
                                <span class="link__arrow">
                                   <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M1.70711 0.370774C1.31658 -0.0197506 0.683417 -0.0197506 0.292893 0.370774C-0.0976315 0.761298 -0.0976314 1.39446 0.292893 1.78499L1.70711 0.370774ZM5 5.07788L5.70711 5.78499C5.89464 5.59745 6 5.3431 6 5.07788C6 4.81266 5.89464 4.55831 5.70711 4.37077L5 5.07788ZM0.292893 8.37077C-0.0976311 8.7613 -0.0976311 9.39446 0.292893 9.78499C0.683418 10.1755 1.31658 10.1755 1.70711 9.78499L0.292893 8.37077ZM0.292893 1.78499L4.29289 5.78499L5.70711 4.37077L1.70711 0.370774L0.292893 1.78499ZM4.29289 4.37077L0.292893 8.37077L1.70711 9.78499L5.70711 5.78499L4.29289 4.37077Z" fill="#000000"/>
                                   </svg>
                               </span>
                            </a>
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
