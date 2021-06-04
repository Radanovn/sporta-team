<?php
$randomId = uniqid();
?>

<div class="filters__item">
    <div class="filters__item-title" id="headingFour">
        @if($filter->isFirst)<h3>@else<h4>@endif
            <span class="filters__item-title-text js-filters-item-title"
                  role="button" data-toggle="collapse" data-target="#filters-item-{{$randomId}}"
                  aria-expanded="false" aria-controls="filters-item-{{$randomId}}">
                {{$filter->name}}
                <span class="filters__item-title-icon"></span>
            </span>
            @if($filter->isFirst)</h3>@else</h4>@endif
    </div>
    <div class="collapse show" id="filters-item-{{$randomId}}" aria-labelledby="headingFour" data-parent="#form-filters">
        <div class="filters__item-body">

            <div id="js-filter-option-datepicker{{$randomId}}"></div>

            <script>
                filter.addDateRangePicker({
                    id: 'js-filter-option-datepicker{{$randomId}}',
                    filter: {!! json_encode($filter) !!},
                    setup: {
                        language: 'en',
                        navTitles: {
                            days: 'MM yyyy'
                        },
                        prevHtml: '<svg xmlns="http://www.w3.org/2000/svg" width="11" height="18" viewBox="0 0 11 18" fill="none"><g opacity="0.35"><path d="M9.54974 17.0485L1.69141 9.17153L9.54974 1.29456" stroke="#1D2128" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/></g></svg>',
                        nextHtml: '<svg xmlns="http://www.w3.org/2000/svg" width="11" height="18" viewBox="0 0 11 18" fill="none"><g opacity="0.35"><path d="M1.28906 1.29456L9.1474 9.17153L1.28906 17.0485" stroke="#1D2128" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>\</g></svg>',
                        range: true
                    }
                });
            </script>

        </div>
    </div>
</div>
