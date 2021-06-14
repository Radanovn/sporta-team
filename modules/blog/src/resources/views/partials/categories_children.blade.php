@foreach($categories as $category)

    @php
        $randIdForCheck = uniqid();
    @endphp
    <div class="form-group">
        <div class="custom-control custom-checkbox">
            <input class="custom-control-input js-filter-option-select" type="checkbox" id="{{$randIdForCheck}}" name="categories[]" value="{{$category->id}}">
            <label class="custom-control-label" for="{{$randIdForCheck}}">
                {{$category->title}}
            </label>
        </div>
    </div>

    @if($category->children()->count() > 0)
        @include('blog::partials.categories_children', ['categories' => $category->children])
    @endif

@endforeach
