<?php
$randomId = uniqid();
?>
@foreach($categories as $category)
<div class="filters__item">
    <div class="filters__item-title" id="headingOne">
       <h3>
           <span class="filters__item-title-text js-filters-item-title"
                      role="button" data-toggle="collapse" data-target="#filters-item-{{$randomId}}"
                      aria-expanded="false" aria-controls="filters-item-{{$randomId}}">
              {{$category->title}}
                <span class="filters__item-title-icon"></span>
            </span>
       </h3>
    </div>
    <div class="collapse show" id="filters-item-{{$randomId}}" aria-labelledby="headingOne" data-parent="#form-filters">
        <div class="filters__item-body">

            @if($category->children()->count() > 0)
                @include('blog::partials.categories_children', ['categories' => $category->children])
            @endif

        </div>
    </div>
</div>
@endforeach
