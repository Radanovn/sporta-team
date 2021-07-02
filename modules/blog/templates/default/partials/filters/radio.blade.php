<?php
$randomId = uniqid();
?>

<div class="filters__item">
    <div class="filters__item-title" id="headingFour">
        @if($filter->isFirst)<h3>@else<h4>@endif
                <span class="filters__item-title-text js-filters-item-title"
                      role="button" data-toggle="collapse" data-target="#filters-item-{{$randomId}}"
                      aria-expanded="false" aria-controls="filters-item-{{$randomId}}">
                {{$filter->controlName}}
                <span class="filters__item-title-icon"></span>
            </span>
            @if($filter->isFirst)</h3>@else</h4>@endif
    </div>
    <div class="collapse show" id="filters-item-{{$randomId}}" aria-labelledby="headingFour" data-parent="#form-filters">
        <div class="filters__item-body">


            @foreach($filter->options as $options)
                <div class="custom-control custom-radio">
                    @php
                        $randIdForCheck = uniqid();
                    @endphp
                    <input class="custom-control-input js-filter-option-select" type="radio" id="{{$randIdForCheck}}" @if ($options->active) checked @endif name="filters[{{$filterKey}}][]" value="{{$options->value}}">
                    <label class="custom-control-label" for="{{$randIdForCheck}}">
                        {{ $options->value }}
                    </label>
                </div>
            @endforeach
        </div>

    </div>
</div>
